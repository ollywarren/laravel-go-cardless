<?php

namespace Ollywarren\LaravelGoCardless\Tests;

use Ollywarren\LaravelGoCardless\GoCardlessServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{
  public function setUp(): void
  {
    parent::setUp();
    // additional setup
  }

  protected function getPackageProviders($app)
  {
    return [
      GoCardlessServiceProvider::class,
    ];
  }

  protected function getEnvironmentSetUp($app)
  {
    // perform environment setup
  }
}