<?php
/**
 * Part of the InterventionImageServiceProvider.
 *
 * For the full copyright and license information,
 * view the LICENSE file that was distributed with this source code.
 *
 * @author  Ivan Vergés <ivan@microstudi.net>
 */
namespace Microstudi\Silex\InterventionImage\Tests;

use Microstudi\Silex\InterventionImage\InterventionImageServiceProvider;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
/**
 * Class InterventionImageServiceProviderTest.
 */
class InterventionImageServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Returns Silex Application instance.
     *
     * @return Application
     */
    private function createApplication()
    {
        $app = new Application();
        $provider = new InterventionImageServiceProvider();
        $app
            ->register($provider)
            ;
        return $app;
    }
    public function testRegister()
    {
        $app = $this->createApplication();
        $this->assertInstanceOf('Intervention\\Image\\ImageManager', $app['intervention.image']);
    }
}