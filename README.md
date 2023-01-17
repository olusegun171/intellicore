<h2 align="center">Laravel package to generate random PINs</h2>



## About ##

Laravel package to generate and emit random PINs suitable for use with cash cards, door locks etc

## Requirements ##

Before starting, you need to have [Laravel 8 +](https://laravel.com) installed.

## Installation ##

```bash
# To install, you will have to include the following in your laravel project composer.json file.
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:olusegun171/intellicore.git"
    }
]
```
```bash
# then run composer.
$ composer require intellicore/pin-generator
```

## Usage ##

- Generate PINs
```php
use Intellicore\PinGenerator\Classes\Generator;

$generate = new Generator();
$n = 5; #number of PINs
$pins = $generate->emit($n)
#this will return an array of 'n' number of pins
```

- Using php artisan
```php
php artisan intellicore:generate
```


<a href="#top">Back to top</a>