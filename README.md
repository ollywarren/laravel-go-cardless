# Laravel Go Cardless
A Laravel 5.5 Wrapper for the Go Cardless PHP Client Library. This package provides simple elegant access to the Go Cardless PHP Client API from across the Laravel Application.

The included helper method makes accessing the underlying methods as easy as:

``` gocardless()->customers()->list()```

## Installation Laravel 5.5 +

Simply require the package through composer and let the Laravel Package Auto Discovery do the rest.

``` composer require ollywarren/laravel-go-cardless ```

Publish the vendor configuration:

``` php artisan vendor:publish``` (Select the relevant package from the list)

Set two environment variables in your Apps .env file:

```
GOCARDLESS_ENV="sandbox" OR "live"
GOCARDLESS_TOKEN="<YOUR API TOKEN>"

```

## Installation Laravel 5.4

Use composer to add it to your project dependencies:

``` composer require ollywarren/laravel-go-cardless ```


Then inside your ```config/app.php```


Add the package service provider to the providers array:

``` Ollywarren\LaravelGoCardless\GoCardlessServiceProvider::class, ```

Finally for good measure dump the composer autoloader to make sure we've pulled in the helper method:

``` composer dump-autoloader ```

Publish the vendor configuration:

``` php artisan vendor:publish```

Set two environment variables in your Apps .env file:

```
GOCARDLESS_ENV="sandbox" OR "live"
GOCARDLESS_TOKEN="<YOUR API TOKEN>"

```

## Usage Instructions

This package exposes the underlaying Go Cardless PHP Client Library usign the ``` gocardless() ``` helper method.
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