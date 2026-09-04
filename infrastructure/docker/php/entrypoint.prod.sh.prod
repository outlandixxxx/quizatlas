#!/bin/sh
set -e

# Populate the shared volume from the image's baked-in code so nginx
# (a separate container) can serve public/ directly, while php-fpm still
# runs against its own immutable, optimized copy.
mkdir -p /var/www/shared
rm -rf /var/www/shared/*
cp -a /var/www/html/. /var/www/shared/

exec "$@"