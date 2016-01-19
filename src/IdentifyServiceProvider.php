<?php

namespace Unicodeveloper\Identify;

use Illuminate\Support\ServiceProvider;

class IdentifyServiceProvider extends ServiceProvider {

  /*
   * Indicates if loading of the provider is deferred.
   *
   * @var bool
   */
  protected $defer = false;

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
      $this->app->bind('laravel-identify', function() {

          return new Identify;

      });
  }

  /**
   * Get the services provided by the provider
   * @return array
   */
  public function provides() : array
  {
      return ['laravel-identify'];
  }
}