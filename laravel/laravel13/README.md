# Laravel 13 Hello World

A Laravel 13 Hello World sample using Docker, served on localhost:8080.

## Requirements

- Docker
- Docker Compose

## Getting Started

```bash
cd laravel/laravel13
docker compose up --build
```

Once the build is complete, open [localhost:8080](http://localhost:8080) in your browser to see the Laravel welcome page.

## Stopping

```bash
docker compose down
```

## File Structure

| File | Description |
| --- | --- |
| `Dockerfile` | PHP 8.3 CLI + Composer, installs Laravel 13 and serves it via `php artisan serve` |
| `docker-compose.yml` | Defines the container port mapping (8080:8080) |
