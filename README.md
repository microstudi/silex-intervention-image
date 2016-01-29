# InterventionImageServiceProvider

 [Intervention/image](http://image.intervention.io/) service provider for [Silex](http://silex.sensiolabs.org)

[![Downloads](https://img.shields.io/packagist/dt/microstudi/silex-intervention-image.svg?style=flat-square)](https://packagist.org/packages/microstudi/silex-captcha)
[!Travis status](https://travis-ci.org/microstudi/silex-intervention-image.svg?branch=master)
[![License](https://img.shields.io/packagist/l/microstudi/silex-captcha.svg?style=flat-square)](http://opensource.org/licenses/MIT)

## Requirements

- PHP >= 5.3.3

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

# LICENSE

The MIT LICENSE (MIT)
