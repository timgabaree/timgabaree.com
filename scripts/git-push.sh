#!/bin/bash

set -u

BRANCH="main"
REMOTE="timgabaree.com"

cd "$(dirname "$0")/.." || {
  echo "Unable to locate repository."
  exit 1
}

echo
echo "Regenerating sitemap..."

if ! php scripts/generate-sitemap.php; then
  echo "Sitemap generation failed."
  exit 1
fi

if command -v xmllint >/dev/null 2>&1; then
  echo
  echo "Validating sitemap XML..."

  if ! xmllint --noout sitemap.xml; then
    echo "Sitemap XML validation failed."
    exit 1
  fi
fi

echo
echo "Checking working tree formatting..."

if ! git diff --check; then
  echo "git diff --check failed."
  exit 1
fi

echo
echo "Current Git status:"
echo "-------------------"
git status --short
echo

HAS_CHANGES=false

if ! git diff --quiet ||
   ! git diff --cached --quiet ||
   [ -n "$(git ls-files --others --exclude-standard)" ]; then
  HAS_CHANGES=true
fi

if [ "$HAS_CHANGES" = true ]; then
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
  git --no-pager diff --cached --stat
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
else
  echo "No working-tree changes need to be committed."
fi

echo
echo "Pulling any remote updates..."

if ! git pull --rebase "$REMOTE" "$BRANCH"; then
  echo
  echo "The pull/rebase could not be completed."
  echo "Resolve any conflicts, then run the script again."
  exit 1
fi

LOCAL_COMMIT="$(git rev-parse "$BRANCH")"
REMOTE_COMMIT="$(git rev-parse "$REMOTE/$BRANCH")"

if [ "$LOCAL_COMMIT" = "$REMOTE_COMMIT" ]; then
  echo
  echo "Local and remote branches are already synchronized."
else
  echo
  echo "Pushing to GitHub..."

  if ! git push "$REMOTE" "$BRANCH"; then
    echo "Push failed."
    exit 1
  fi
fi

echo
echo "Repository synchronization complete."

echo "Branch: $(git branch --show-current)"

echo
echo "Latest commit:"
git --no-pager log -1 --oneline
