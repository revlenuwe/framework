<?php

return [
    'debug' => env('APP_DEBUG',false),

    'providers' => [
        'App\Providers\AppServiceProvider',
        'App\Providers\ViewServiceProvider',
        'App\Providers\DatabaseServiceProvider',
        'App\Providers\SessionServiceProvider',
        'App\Providers\AuthServiceProvider',
        'App\Providers\CsrfServiceProvider',
        'App\Providers\ViewShareServiceProvider',
    ],

    'middleware' => [
        'App\Middleware\ShareValidationErrors',
        'App\Middleware\ClearValidationErrors',
        'App\Middleware\Authenticate',
        'App\Middleware\CsrfVerify'
    ]
];