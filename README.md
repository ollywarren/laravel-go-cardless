# Laravel Go Cardless

[![Total Downloads](https://poser.pugx.org/ollywarren/laravel-go-cardless/downloads)](https://packagist.org/packages/ollywarren/laravel-go-cardless)
[![Latest Stable Version](https://poser.pugx.org/ollywarren/laravel-go-cardless/v/stable)](https://packagist.org/packages/ollywarren/laravel-go-cardless)
[![License](https://poser.pugx.org/ollywarren/laravel-go-cardless/license)](https://packagist.org/packages/ollywarren/makepackage)

A Laravel 9+ Wrapper for the Go Cardless PHP Client Library. This package provides simple elegant access to the Go Cardless PHP Client API from across the Laravel Application.


The included helper method makes accessing the underlying methods as easy as:

``` gocardless()->customers()->list()```

## Installation Laravel 9 +

Simply require the package through composer and let the Laravel Package Auto Discovery do the rest.

``` composer require ollywarren/laravel-go-cardless ```

Publish the vendor configuration:

``` php artisan vendor:publish``` (Select the relevant package from the list)

Set two environment variables in your Apps .env file:

```
GOCARDLESS_ENV="sandbox" OR "live"
GOCARDLESS_TOKEN="<YOUR API TOKEN>"

```

## Usage Instructions

This package exposes the underlaying Go Cardless PHP Client Library using the ``` gocardless() ``` helper method.
Any of the methods described in the API Documentation will be accessible.

For example:

### Get a List of Customers

``` gocardless()->customers()->list();```

### Create a New Customer

``` 
    gocardless()->customers()->create([
        'params' => [
            "given_name"    => "Jack", 
            "family_name"   => "Sparrow", 
            "email"         => "oljacky@sparrowsnest.com"
        ]
    ]);
```

For a full breakdown of the API see the [Documentation](https://developer.gocardless.com/api-reference/#overview-errors "Go Cardless API Docs") or the [PHP Client Library](https://github.com/gocardless/gocardless-pro-php "Go Cardless PHP Client Library")
