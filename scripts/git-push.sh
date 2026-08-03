#!/bin/bash

set -u


BRANCH="main"

cd "$(dirname "$0")/.." || {
    echo "Unable to locate repository."
    exit 1
}

echo
echo "Current Git status:"
echo "-------------------"
git status --short
echo

if git diff --quiet &&
   git diff --cached --quiet &&
   [ -z "$(git ls-files --others --exclude-standard)" ]; then
  echo "No changes are available to commit."
  exit 0
fi

read -r -p "Commit message: " COMMIT_MESSAGE

if [ -z "$COMMIT_MESSAGE" ]; then
  echo "Commit canceled: no message was entered."
  exit 1
fi

echo
echo "Staging changes..."
git add -A

echo
echo "Files to be committed:"
echo "----------------------"
git diff --cached --stat
echo

read -r -p "Commit and push these changes? [y/N] " CONFIRMATION

case "$CONFIRMATION" in
  y|Y|yes|YES)
    ;;
  *)
    echo "Commit canceled."
    git restore --staged .
    exit 0
    ;;
esac

if ! git commit -m "$COMMIT_MESSAGE"; then
  echo "Commit failed."
  exit 1
fi

echo
echo "Pulling any remote updates..."
if ! git pull --rebase timgabareecom "$BRANCH"; then
  echo
  echo "The pull/rebase could not be completed."
  echo "Resolve any conflicts, then run the script again."
  exit 1
fi

echo
echo "Pushing to GitHub..."
if ! git push timgabareecom "$BRANCH"; then
  echo "Push failed."
  exit 1
fi

echo
echo "Successfully committed and pushed to GitHub."