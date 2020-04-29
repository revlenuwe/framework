<?php

return [
    'views' => [
        'enabled' => $enabled = env('CACHE'),
        'path' => $enabled ? base_path('cache/views') : false
    ]
];