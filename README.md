# Laravel 5.3 Vendor Package Example
### An example on how-to create a vendor package for Composer

"Packages are the primary way of adding functionality to Laravel. Packages might be anything from a great way to work with dates like Carbon, or an entire BDD testing framework like Behat."
https://laravel.com/docs/master/packages

Use this package to help develop new packages to share among your projects -- or the world.

# Installation
1. Clone this repo.
2. Rename the following to match your repository & package name:
    * namespace: `Askedio\LaravelVendorPackage`
    * composer package name: `askedio/laravel-vendor-package`
    * resource namespace: `LaravelVendorPackage`
3. Add to https://packagist.org.
4. Using your details, install with commands below.

# Installation
Install a fresh copy of Laravel then require the package:
```
composer create-project --prefer-dist laravel/laravel blog
cd blog
composer require askedio/laravel-vendor-package:dev-master
```
## Register with config/app.php
Register the service providers to enable the package:
```
Askedio\LaravelVendorPackage\Providers\AppServiceProvider::class,
```

Autoload it:
```
composer dumpautoload
```
## Test with Laravel
```
php artisan serv
```
Browse to http://localhost:8000/dashboard

# Test the Package
In the packages repository folder:
```
composer install
vendor/bin/phpunit
```