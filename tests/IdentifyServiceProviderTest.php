<?php

namespace Unicodeveloper\Identify\Test;

use Mockery\MockInterface;
use PHPUnit_Framework_TestCase;
use Unicodeveloper\Identify\IdentifyServiceProvider;

class IdentifyServiceProviderTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var MockInterface
     */
    protected $mockApp;

    /**
     * @var IdentifyServiceProvider
     */
    protected $provider;

    protected function setUp()
    {
        parent::setUp();
        $this->mockApp = \Mockery::mock();
        $this->provider = new IdentifyServiceProvider($this->mockApp);
    }

    /**
     * Test that it provides the correct service name
     */
    public function testRegister()
    {
        $this->mockApp->shouldReceive('bind')->once()->withAnyArgs()->once();

        $this->provider->register();
    }

    /**
     * Test that it provides the correct service name
     */
    public function testProvides()
    {
        $expected = ['laravel-identify'];
        $actual = $this->provider->provides();

        $this->assertEquals($expected, $actual);
    }
}