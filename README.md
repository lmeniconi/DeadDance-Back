<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Dead Dance challenge for Asimov

### API Demo on [Heroku]() - [Docs]() powered by [Swagger](https://swagger.io/solutions/api-documentation/)

### Startup

-   cp .env.example .env
-   composer install
-   php artisan key:generate (we don't using password hashing but is a good practice)
-   docker-compose -f local.yml up

API will be on localhost:8080/api - [PHPMyAdmin](http://localhost:8000/) will be on localhost:8000

### Docs

[Docs](http://localhost:8080/api/documentation) will be on localhost:8080/api/documentation

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
