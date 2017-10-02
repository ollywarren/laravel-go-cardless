<?php
if (!function_exists('gocardless')) {
    /**
     * Get the Go Cardless instance.
     *
     * @return \Ollywarren\LaravelGoCardless\GoCardlessServiceProvider
     */
    function gocardless()
    {
        return app('GoCardless');
    }
}
