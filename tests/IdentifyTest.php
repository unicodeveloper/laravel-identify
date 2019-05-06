<?php

namespace Unicodeveloper\Identify\Test;

use PHPUnit\Framework\TestCase;
use Sinergi\BrowserDetector\{ Browser, Device, Language, Os };
use Unicodeveloper\Identify\Identify;

class IdentifyTest extends TestCase
{

    /**
     * Identify Object
     * @var Identify
     */
    protected $identify;

    protected function setUp()
    {
        parent::setUp();
        $this->identify = new Identify();
    }

    /**
     * Test if Identify can be constructed
     *
     */
    public function testIdentifyCanBeConstructed()
    {
        $this->assertInstanceOf(Identify::class, $this->identify);
    }

    /**
     * Test if Os is constructed on Identify Object created
     *
     */
    public function testOSIsInitializedOnIdentifyConstruction()
    {
        $this->assertInstanceOf(Os::class, $this->identify->os());
    }

    /**
     * Test if Device is constructed on Identify Object created
     *
     */
    public function testDeviceIsInitializedOnIdentifyConstruction()
    {
        $this->assertInstanceOf(Device::class, $this->identify->device());
    }

    /**
     * Test if Os is constructed on Identify Object created
     *
     */
    public function testBrowserIsInitializedOnIdentifyConstruction()
    {
        $this->assertInstanceOf(Browser::class, $this->identify->browser());
    }

    /**
     * Test if Language is constructed on Identify Object created
     *
     */
    public function testLanguageIsInitializedOnIdentifyConstruction()
    {
        $this->assertInstanceOf(Language::class, $this->identify->lang());
    }
}
