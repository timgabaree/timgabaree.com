#!/usr/bin/env bash

set -euo pipefail

echo "==> Checking local repository"

if [ -n "$(git status --porcelain)" ]; then
    echo "ERROR: Local working tree has uncommitted changes."
    echo "Commit or discard them before deploying."
    exit 1
fi

echo "==> Checking GitHub"

git fetch timgabaree.com main --quiet

LOCAL="$(git rev-parse HEAD)"
REMOTE="$(git rev-parse timgabaree.com/main)"

if [ "$LOCAL" != "$REMOTE" ]; then
    echo "ERROR: Local main does not match GitHub main."
    echo "Commit and push your changes before deploying."
    exit 1
fi

echo "==> Local repository matches GitHub"
echo "==> Starting production deployment"

ssh -T \
    -i ~/.ssh/timgabaree_com \
    ma81y7v45nyj@timgabaree.com \
    "cd ~/repositories/timgabaree.com && ./scripts/deploy-production.sh"
