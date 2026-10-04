#!/usr/bin/env bash
# エラーが発生したら即座に停止
set -o errexit

# MySQLドライバーをインストール
apt-get update && apt-get install -y php-mysql

# その他の必要なインストール
composer install --no-dev --optimize-autoloader
npm install && npm run build

# データベースマイグレーション（必要に応じて）
php artisan migrate --force