# ImageControllerServiceProvider

A auto-image resize controller using [Intervention/image](http://image.intervention.io/) service provider for [Silex](http://silex.sensiolabs.org)

[![Downloads](https://img.shields.io/packagist/dt/microstudi/siex-image-controller.svg?style=flat-square)](https://packagist.org/packages/microstudi/siex-image-controller)
![Travis status](https://travis-ci.org/microstudi/siex-image-controller.svg?branch=master)
[![License](https://img.shields.io/packagist/l/microstudi/siex-image-controller.svg?style=flat-square)](http://opensource.org/licenses/MIT)

## Requirements

- PHP >= 5.3.3
- [`InterventionImageServiceProvider`](https://github.com/microstudi/silex-intervention-image)

## Install

Using composer:

```
composer require microstudi/siex-image-controller
```

## Usage

```php
use Microstudi\Silex\ImageController\ImageControllerServiceProvider;
use Microstudi\Silex\InterventionImage\InterventionImageServiceProvider;

$app = new Silex\Application();
$app->register(new InterventionImageServiceProvider);
$app->register(new ImageControllerServiceProvider)
      ;
$app->run();
```

### Options


## Tests

```bash
$ composer install
$ vendor/bin/phpunit
```


## Changelog

### 1.0.0

- First release

# LICENSE

The MIT LICENSE (MIT)
