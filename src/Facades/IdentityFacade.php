<?php

namespace Unicodeveloper\Identify\Facades;

use Illuminate\Support\Facades\Facade;

class IdentifyFacade extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() : string
  {
    return 'laravel-identify';
  }
}


