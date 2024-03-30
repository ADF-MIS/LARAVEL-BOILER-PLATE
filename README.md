# Simple one package solution starter kit
Support MVC & Repository Service Pattern

## Specific Version :
Laravel Version	Package Version
| Laravel Version | Package Version   |
| ----------------|-------------------|
|        9        |    1.x            |

## What is included inside this boiler plate:
Package:
- "fruitcake/laravel-cors": "^2.0.5"
- "guzzlehttp/guzzle": "^7.2"
- "laravel/framework": "^9.0"
- "laravel/sanctum": "^2.14"
- "laravel/tinker": "^2.7"
- "maatwebsite/excel": "^3.1"
- "tymon/jwt-auth": "^2.1"
- "yaza/laravel-repository-service": "^3.2"
- "fakerphp/faker": "^1.9.1"
- "laravel/sail": "^1.0.1"
- "mockery/mockery": "^1.4.4"
- "nunomaduro/collision": "^6.1"
- "phpunit/phpunit": "^9.5.10"
- "spatie/laravel-ignition": "^1.0"

Template:
- "AdminLTE v3.2.0"

## Requirement
- Minimum PHP ^8.0
- Installation with composer

## Installation
You can install via composer for latest version:
replace example-app with the name your app
```bash
composer create-project ADF-MIS/laravel-boiler-plate:^1.0 example-app
```

## Repository Pattern
You can also create only the repository, or service, or both with artisan.

Create repository:
```bash
php artisan make:repository User
```
or
```bash
php artisan make:repository UserRepository
```

Create repository together with a service:
```bash
php artisan make:repository User --service
```
or
```bash
php artisan make:repository UserRepository --service
```
Create a service separately
```bash
php artisan make:service User
```
or
```bash
php artisan make:service UserService
```
or
```bash
php artisan make:service UserService --repository
```
Create service for api template
```bash
php artisan make:service UserService --api
```

## JWT Auth Implementation
Generate Secret Key:
this command will generate 
JWT_SECRET=(random value) on your .env file
```bash
php artisan jwt:secret
```
For full implementation guide see on this link: https://jwt-auth.readthedocs.io/en/develop/laravel-installation/

## Changelog
Please see CHANGELOG for more information on what has changed recently.

## Authors
see Authors for information contributors on this repository

## License
The MIT License (MIT). Please see License File for more information.
