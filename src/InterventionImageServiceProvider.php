<?php
/*
 * This file is part of Intervention Image Service Provider.
 *
 * (c) 2013 Ivan Vergés <ivan@microstudi.net>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Source class:
 * https://github.com/Intervention/image
 */

namespace Microstudi\Silex\InterventionImage;

use Silex\Application;
use Pimple\ServiceProviderInterface;
use Pimple\Container;
use Intervention\Image\ImageManager;
use Intervention\Image\Image;

class InterventionImageServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        if (class_exists('\Imagick')) {
            $app['intervention.driver'] = 'imagick';
        } else {
            $app['intervention.driver'] = 'gd';
        }

        $app['intervention.image'] = function(Application $app) {
            return new ImageManager(array('driver' => $app['intervention.driver']));
        };

        /**
         * For calling like:
         * return $app['intervention.response']($image);
         */
        $app['intervention.response'] = $app->protect(function(Image $image) use ($app) {
            return $app->stream(
                function() use ($image) {
                    echo $image->response();
                 }
                 , 200);
        });
    }

    public function boot(Application $app)
    {
    }
}
