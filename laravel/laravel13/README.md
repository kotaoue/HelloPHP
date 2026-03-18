# Laravel 13 Hello World

Laravel 13 の Hello World サンプルです。Docker を使って localhost:8080 で起動します。

## 必要要件

- Docker
- Docker Compose

## 起動方法

```bash
# このディレクトリに移動
cd laravel/laravel13

# Docker イメージをビルドしてコンテナを起動
docker compose up --build
```

ビルド完了後、ブラウザで http://localhost:8080 にアクセスすると Laravel の Welcome ページが表示されます。

## 停止方法

```bash
docker compose down
```

## 構成

| ファイル | 説明 |
|---|---|
| `Dockerfile` | PHP 8.3 CLI + Composer で Laravel 13 をインストールし、`php artisan serve` で起動 |
| `docker-compose.yml` | コンテナのポートマッピング (8080:8080) を定義 |
