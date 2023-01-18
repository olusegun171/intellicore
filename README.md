<h2 align="center">Laravel package to generate random PINs</h2>



## About ##

Laravel package to generate and emit random PINs suitable for use with cash cards, door locks etc

## Requirements ##

Before starting, you need to have [Laravel 8 +](https://laravel.com) installed.

## Installation ##

1. Add the following section to your Laravel project composer.json file
```bash
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:olusegun171/intellicore.git"
    }
]
```
2. Run composer to install the package from the repo
```bash

$ composer require intellicore/pin-generator
```
3. Add the following to the list of service provider in config/app.php
<small>Note: This would have be done automatically after running composer if package was already published)</small>
```bash
Intellicore\PinGenerator\GeneratorServiceProvider::class
```

## Usage ##

- Generate PINs
```php
use Intellicore\PinGenerator\Facades\IntellicoreGenerate;

$n = 5; #number of PINs
$pins = IntellicoreGenerate::emit($n)
#this will return an array of 'n' number of pins
```

- Using php artisan
```php
php artisan intellicore:generate
```


<a href="#top">Back to top</a>