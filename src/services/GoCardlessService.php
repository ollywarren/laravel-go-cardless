<?php

namespace Ollywarren\LaravelGoCardless\Services;

use GoCardlessPro\Client;
use BadMethodCallException;

class GoCardlessService
{
	private $environment;
	private $token;
	private $client;

	public function __construct()
	{
		$this->token        = config('gocardless.token');
		$this->environment  = config('gocardless.environment');

		$this->client = new Client( array (
			'access_token' => $this->token,
			'environment'  => $this->environment
		));
	}

	public function __call($method, $args) {
		if( is_callable([$this->client, $method]) ) {
			return call_user_func_array([$this->client, $method],$args);
		} else {
			throw new BadMethodCallException("Method $method does not exist on Go Cardless Library");
		}
	}

	public function __get($property) {
		if( property_exists($this->client, $property) ) {
			return $this->client->{$property};
		} else {
			throw new BadMethodCallException("Property $property does not exist on Go Cardless Library");
		}
	}
}
