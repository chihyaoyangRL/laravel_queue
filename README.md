## About Laravel queue


php artisan serve



link http://127.0.0.1:8000/QueuePost/index/3


Configura .env

QUEUE_CONNECTION=database


Criar banco para fila

php artisan queue:table

php artisan queue:failed-table



Criar banco que a file vai inserir
php artisan make:migration teste



limpar cache

php artisan cache:clear 






Criar Controler/job/model

php artisan make:controller TesteController

  php artisan make:job Teste

php artisan make:model TesteModel



Geracao de bacno

php artisan migrate

Volta um passo a tras


php artisan migrate:rollback




Para rodar queue

php artisan queue:work
