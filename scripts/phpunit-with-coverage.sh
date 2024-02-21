#!/bin/sh
docker compose exec -it -e XDEBUG_MODE=coverage php vendor/bin/phpunit \
    --coverage-html .phpunit.coverage.html \
    --coverage-filter src
    "$@"
