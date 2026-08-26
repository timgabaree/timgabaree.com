#!/usr/bin/env bash

set -euo pipefail

REPO_DIR="$HOME/repositories/timgabaree.com"
LIVE_DIR="$HOME/public_html/timgabaree.com"

cd "$REPO_DIR"

echo "==> Updating repository"
git pull --ff-only origin main

echo "==> Deploying to production"
rsync -avc \
  --exclude='.git/' \
  --exclude='.well-known/' \
  --exclude='cgi-bin/' \
  --exclude='error_log' \
  --exclude='*/error_log' \
  --exclude='tmp/' \
  "$REPO_DIR/" \
  "$LIVE_DIR/"

echo "==> Checking production"
HTTP_STATUS="$(curl -sS -o /dev/null -w '%{http_code}' https://timgabaree.com/)"

if [ "$HTTP_STATUS" != "200" ]; then
    echo "ERROR: Production returned HTTP $HTTP_STATUS"
    exit 1
fi

echo "==> Deployment complete"
echo "Production returned HTTP 200"
