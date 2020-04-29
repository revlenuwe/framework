<?php

return [
    'mysql' => [
        'driver' => env('DB_DRIVER'),
        'host' => env('DB_HOST'),
        'dbname' => env('DB_NAME'),
        'user' => env('DB_USER'),
        'password' => env('DB_PASSWORD')
    ]
];