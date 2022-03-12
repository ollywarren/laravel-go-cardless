<?php

namespace Ollywarren\LaravelGoCardless\Tests\Unit;


use Ollywarren\LaravelGoCardless\Tests\TestCase;



final class CustomerTest extends TestCase
{

    public function test_can_create_a_new_customer()
    {
        $customer = gocardless()->customers()->create([
            'params' => $this->customer
        ]);

        $this->assertEquals(201, $customer->api_response->status_code, "Expected Status Code 201 on Successful Create, got Satus Code {$customer->api_response->status_code}");
        $this->assertInstanceOf("\\GoCardlessPro\\Resources\\Customer", $customer, "Response from the CREATE Customer Endpoint is not a Instance of Customer");

    }

    public function test_can_retrieve_a_single_customer()
    {
        $customer = gocardless()->customers()->get($this->customerId);
        $this->assertEquals(200, $customer->api_response->status_code, "Expected Status Code 200 on Successful Create, got Satus Code {$customer->api_response->status_code}");
    }

    public function test_can_get_all_customers()
    {
        $customers = gocardless()->customers()->list();
        $this->assertEquals(200, $customers->api_response->status_code, "Expected Status Code 200 on Successful Create, got Satus Code {$customers->api_response->status_code}");
    }
}