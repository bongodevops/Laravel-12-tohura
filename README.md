# Laravel-12-tohura
# Ostad_laravel

## creat project command for composer(app-11 and app-12)
```
composer create-project laravel/laravel app-12
composer create-project laravel/laravel:^11.0 app-11
```

## Create project command for laravel(tohura)
```
composer global require laravel/installer
laravel new tohura
cd toura
npm install && npm run build
composer run dev
```
###ontroller Create
```
php artisan make:controller DemoControler
php artisan make:controller FileControler
```
###blade file create
php artisan make:view demo

- function create(Inside=>DemoControler & FileControler)
- Route Create(web.php)



## project run command
```php artisan serve```
   
## project delete command
```rm -rf project_name```
