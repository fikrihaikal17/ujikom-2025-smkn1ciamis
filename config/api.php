<?php

return [

    /*
    |--------------------------------------------------------------------------
    | API Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your API settings for your application.
    |
    */

    'version' => env('API_VERSION', 'v1'),
    
    'prefix' => env('API_PREFIX', 'api'),
    
    'middleware' => [
        'api',
        'throttle:api',
        'auth:sanctum',
    ],
    
    'rate_limiting' => [
        'max_attempts' => env('API_RATE_LIMIT', 60),
        'decay_minutes' => env('API_RATE_LIMIT_DECAY', 1),
    ],
    
    'response_format' => [
        'success' => [
            'status' => 'success',
            'code' => 200,
            'message' => null,
            'data' => null,
        ],
        'error' => [
            'status' => 'error',
            'code' => 400,
            'message' => 'An error occurred',
            'errors' => [],
        ],
    ],
    
    'pagination' => [
        'per_page' => env('API_PAGINATION_PER_PAGE', 15),
        'max_per_page' => env('API_PAGINATION_MAX_PER_PAGE', 100),
    ],
    
    'documentation' => [
        'enabled' => env('API_DOCS_ENABLED', true),
        'route' => env('API_DOCS_ROUTE', 'docs'),
    ],
    
    'cors' => [
        'allowed_origins' => explode(',', env('API_CORS_ALLOWED_ORIGINS', '*')),
        'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
        'allowed_headers' => ['*'],
        'exposed_headers' => [],
        'max_age' => 0,
        'supports_credentials' => false,
    ],

];