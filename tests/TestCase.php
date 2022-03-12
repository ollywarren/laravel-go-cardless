<?php

namespace Ollywarren\LaravelGoCardless\Tests;

use Ollywarren\LaravelGoCardless\GoCardlessServiceProvider;


class TestCase extends \Orchestra\Testbench\TestCase
{

    public $customer;
    public $customerId;

    public function setUp(): void
    {
        $this->customer = [
            "given_name"    => "Taylor", 
            "family_name"   => "Otwell", 
            "email"         => "bigDaddyT@laravel.test",
            "address_line1" => "Penthouse Suite",
            "address_line2" => "Laravel Towers",
            "address_line3" => "Laravel Way",
            "city"          => "London",
            "company_name"  => "Laravel Inc",
            "country_code"  => "GB",
            "postal_code"   => "LV1 1LV"
    
        ];

        $this->customerId = "CU000KZDMZBATW";

        parent::setUp();
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
        $app['config']->set('gocardless.token', '');
        $app['config']->set('gocardless.environment', 'sandbox');
    }
}