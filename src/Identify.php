<?php

namespace Unicodeveloper\Identify;

use Sinergi\BrowserDetector\Browser;
use Sinergi\BrowserDetector\Os;
use Sinergi\BrowserDetector\Language;

class Identify {

    /**
     * Store the browser object
     * @var object
     */
    protected $browser;

    /**
     * Store the os object
     * @var object
     */
    protected $os;

    /**
     * Store the language object
     * @var object
     */
    protected $language;

    /**
     *  Create an Instance of Browser and Os
     */
    public function __construct()
    {
        $this->os = new Os();
        $this->browser = new Browser();
        $this->language = new Language();
    }

    /**
     * Get all the methods applicable to browser detection
     * e.g getName(), getVersion()
     * @return \Sinergi\BrowserDetector\Browser
     */
    public function browser()
    {
        return $this->browser;
    }

    /**
     * Get all the methods applicable to Os detection
     * e.g getName(), getVersion()
     * @return \Sinergi\BrowserDetector\Os
     */
    public function os()
    {
        return $this->os;
    }

    /**
     * Get all the methods applicable to Language detection
     * e.g getLanguage()
     * @return \Sinergi\BrowserDetector\Language
     */
    public function lang()
    {
        return $this->language;
    }

}