<?php

namespace LazyElePHPant\MailChimp;

use Illuminate\Support\ServiceProvider;

class MailChimpServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/mailchimp.php' => config_path('mailchimp.php')
        ], 'mailchimp');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
