<?php

namespace Unicodeveloper\Identify;

use Sinergi\BrowserDetector\Browser;

class Identify {

    public function __construct()
    {
        $this->browser = new Browser();
    }

    public function browser()
    {
        return $this->browser->getName();
    }
}