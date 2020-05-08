<?php

return [
    'debug' => env('APP_DEBUG',false),

    'providers' => [
        'App\Providers\AppServiceProvider',
        'App\Providers\ViewServiceProvider',
        'App\Providers\DatabaseServiceProvider',
        'App\Providers\SessionServiceProvider',
        'App\Providers\CookieServiceProvider',
        'App\Providers\AuthServiceProvider',
        'App\Providers\CsrfServiceProvider',
        'App\Providers\ViewShareServiceProvider',
        'App\Providers\ValidationRulesServiceProvider',
    ],

    'middleware' => [
        'App\Middleware\ShareValidationErrors',
        'App\Middleware\ClearValidationErrors',
        'App\Middleware\Authenticate',
        'App\Middleware\AuthenticateFromCookie',
        'App\Middleware\CsrfVerify'
    ]
];