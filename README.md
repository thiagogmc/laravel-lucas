# Pai de Pet

## Instalação

1. Clone o repositório
2. Execute o seguinte comando:
```
docker-compose up -d
```

## Como executar as migrations

1. Execute o seguinte comando:
```
docker-compose exec laravel.test php artisan migrate
```

## Como criar migrations:
1. Execute o seguinte comando:
```
docker-compose exec laravel.test php artisan make:migration create_users_table
```

## Como acessar o container:
1. Execute o seguinte comando:
```
docker-compose exec laravel.test bash
```

## Como criar o controller:
1. Execute o seguinte comando:
```
docker-compose exec laravel.test php artisan make:controller UserController
```

## Como apagar o banco inteiro (drop all tables) e recriar novamente:
1. Execute o seguinte comando:
```
docker-compose exec laravel.test php artisan migrate:fresh
```
