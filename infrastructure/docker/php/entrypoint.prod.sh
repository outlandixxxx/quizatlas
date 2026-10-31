#!/bin/sh
set -e

php /usr/local/bin/validate-production.php

# Only public assets are shared with nginx. Never delete or copy persistent storage.
# Named volumes inherit the prepared www-data ownership on their first use.
if [ "${1:-}" = "php-fpm" ]; then
    if [ ! -w /var/www/shared/public ] || [ ! -w /var/www/html/storage ]; then
        echo 'Release volumes must be writable by www-data; review existing volume ownership.' >&2
        exit 1
    fi
    cp -R /var/www/html/public/. /var/www/shared/public/
fi

exec "$@"
