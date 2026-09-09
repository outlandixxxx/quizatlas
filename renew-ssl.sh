#!/bin/bash
# Renew Let's Encrypt certificates and reload nginx

cd /opt/maroquiz

docker compose -f docker-compose.prod.yml stop nginx

docker run --rm \
  -p 80:80 \
  -v maroquiz_certbot_certs:/etc/letsencrypt \
  certbot/certbot renew --standalone --quiet

docker compose -f docker-compose.prod.yml start nginx
