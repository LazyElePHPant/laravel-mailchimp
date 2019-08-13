<?php

return [
	/*
    |--------------------------------------------------------------------------
    | MailChimp API URL
    |--------------------------------------------------------------------------
    |
    | Here you may specify the mailchimp API URL. You need to look at your account to
    | determine the correct datacenter. https://<dc>.api.mailchimp.com/3.0
    | The <dc> part will correspond to your account URL. Simply look at the URL when you
	| are logged in and that should tell you the correct value for <dc>.
    | https://developer.mailchimp.com/documentation/mailchimp/guides/get-started-with-mailchimp-api-3/
    |
    */

    'api_url' => env('MAILCHIMP_API_URL', null),

    /*
    |--------------------------------------------------------------------------
    | MailChimp API Key
    |--------------------------------------------------------------------------
    |
    | Here you may specify the mailchimp key for the account that you wish to access
    | https://createform.com/support/mailchimp-api
    |
    */

    'api_key' => env('MAILCHIMP_API_KEY', null),

    /*
    |--------------------------------------------------------------------------
    | List ID
    |--------------------------------------------------------------------------
    |
    | Here you may specify a default list id.
    |
    */

    'list_id' => env('MAILCHIMP_LIST_ID', null),

    /*
    |--------------------------------------------------------------------------
    | Username
    |--------------------------------------------------------------------------
    |
    | Here you may specify the account username.
    |
    */

    'username' => env('MAILCHIMP_USERNAME', null),
];

