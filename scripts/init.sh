#!/bin/sh
# Make all scripts executable by executing $ sh scripts/init.sh
set -eo pipefail

cd "$(dirname "$0")"

chmod +x *.sh
