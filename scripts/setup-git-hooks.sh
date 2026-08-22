#!/bin/sh

set -e

git config core.hooksPath .githooks

echo "Git hooks enabled from .githooks"
