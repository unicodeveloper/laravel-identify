<?php

namespace Unicodeveloper\Identify\Test;

use Mockery as m;
use PHPUnit_Framework_TestCase;
use Unicodeveloper\Identify\{ Identify, IdentifyServiceProvider };

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
        $this->mockApp = m::mock('\Illuminate\Contracts\Foundation\Application');
        $this->provider = new IdentifyServiceProvider($this->mockApp);
    }

    /**
     * Test that it registers the correct service name with Identity
     */
    public function testRegister()
    {
        $this->mockApp->shouldReceive('bind')
            ->once()
            ->andReturnUsing(function($name, $closure) {
                $this->assertEquals('laravel-identify', $name);
                $this->assertInstanceOf(Identify::class, $closure());
            });

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