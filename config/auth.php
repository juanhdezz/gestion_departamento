<?php

return [

    /*
    |---------------------------------------------------------------------------
    | Authentication Defaults
    |---------------------------------------------------------------------------
    |
    | This option defines the default authentication "guard" and password
    | reset "broker" for your application. You may change these values
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |---------------------------------------------------------------------------
    | Authentication Guards
    |---------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | which utilizes session storage plus the Eloquent user provider.
    |
    | All authentication guards have a user provider, which defines how the
    | users are actually retrieved out of your database or other storage
    | system used by the application. Typically, Eloquent is utilized.
    |
    | Supported: "session"
    |
    */

     'guards' => [
         'web' => [
             'driver' => 'session',
             'provider' => 'professors', // Para autenticar profesores
         ],

         'trainee' => [
             'driver' => 'session',
             'provider' => 'trainees', // Para autenticar trainees
         ],
     ],

    

    /*
    |---------------------------------------------------------------------------
    | User Providers
    |---------------------------------------------------------------------------
    |
    | Providers define how users are retrieved from your database or other 
    | storage systems. You can have different providers for different guards.
    |
    */

    'providers' => [
        // 'users' => [
        //     'driver' => 'eloquent',
        //     'model' => env('AUTH_MODEL', App\Models\User::class),
        // ],

        'professors' => [
            'driver' => 'eloquent',
            'model' => App\Models\Professor::class, // Modelo para los profesores
        ],

        'trainees' => [
            'driver' => 'eloquent',
            'model' => App\Models\Trainee::class, // Modelo para los trainees
        ],
    ],

    /*
    |---------------------------------------------------------------------------
    | Passwords
    |---------------------------------------------------------------------------
    |
    | These options define how the password reset functionality should work.
    | We are using the default configuration to reset passwords for 'users' here.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];
