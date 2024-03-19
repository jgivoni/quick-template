#!/bin/sh
docker compose exec -it -e XDEBUG_MODE=off php vendor/bin/phpunit "$@"
