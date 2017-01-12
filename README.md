# InterventionImageServiceProvider

 [Intervention/image](http://image.intervention.io/) service provider for [Silex](http://silex.sensiolabs.org)

[![Downloads](https://img.shields.io/packagist/dt/microstudi/silex-intervention-image.svg?style=flat-square)](https://packagist.org/packages/microstudi/silex-intervention-image)
![Travis status](https://travis-ci.org/microstudi/silex-intervention-image.svg?branch=master)
[![License](https://img.shields.io/packagist/l/microstudi/silex-intervention-image.svg?style=flat-square)](http://opensource.org/licenses/MIT)

## Requirements

- PHP >= 5.5.9 (same as Silex 2.0)

## Install

Using composer:

```
composer require microstudi/silex-intervention-image
```

## Usage

```php
use Microstudi\Silex\InterventionImage\InterventionImageServiceProvider;

$app = new Silex\Application();
$app->register(new InterventionImageServiceProvider)
      ;
$app->run();
```

### Options


- `intervention.image` - Instance of `Intervention\Image\ImageManager`.
- `intervention.response` - For use ImageManager directly such as `$app['intervention.response']($image)`
- `intervention.driver` -  Driver used (*imagick* or *gd*)


## Tests

```bash
$ composer install
$ vendor/bin/phpunit
```


## Changelog

### 1.0.0

- First release

#### 1.0.3

- Locked version Silex 1 for 1.0 of this service

#### 2.0.1

- Updated to Silex 2.0
- Removed support for PHP versions lower thant 5.6

# LICENSE

The MIT LICENSE (MIT)
