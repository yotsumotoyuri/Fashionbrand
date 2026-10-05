#!/bin/bash
# データベースが準備できるまで待機し、マイグレーションを実行
echo "Running migrations..."
php /var/www/html/artisan migrate --force
echo "Migration finished."

# Apacheを起動
apache2-foreground