<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

## link: http://127.0.0.1:8000/QueuePost/index/3
## Laravel queue

Iniciar server:
```sh
php artisan serve
```

Configura .env
```sh
QUEUE_CONNECTION=database
```

Criar tabela queue
```sh
php artisan queue:table
php artisan queue:failed-table
```

Criar tabela
```sh
php artisan make:migration teste
```

Limpar cache
```sh
php artisan cache:clear 
```

Criar Controller/Job/Model
```sh
php artisan make:controller TesteController

php artisan make:job Teste

php artisan make:model TesteModel
```

Gerar tabela
```sh
php artisan migrate
```

Volta um passo a trás após gerar tabela
```sh
php artisan migrate:rollback
```

Rodar queue
```sh
php artisan queue:work
```
