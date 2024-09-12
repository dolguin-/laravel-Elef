# Trail task


## executive summary

this repository contains the implementation of a lab environment to run a Laravel application based on `docker compose` to run a `LAMP` stack.

## Dependencies

* Docker

## How to

### init

```
docker compose run web php artisan migrate
docker compose run web php artisan db:seed --class=MessageSeeder
```

### RUN

```
docker compose start
```

### to access the laravel app

http://localhost/

### to manage de db

http://localhost:8081/


### to stop

```
docker compose stop
```

###  logs 

```
docker compose logs
```


## autor

Damian Olguin @ Teracloud
