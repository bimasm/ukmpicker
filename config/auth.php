<?php
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    // Guard
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        'admin' => [
          'driver' => 'session',
          'provider' => 'admin',
        ],
        'admin-api' => [
            'driver' => 'token',
            'provider' => 'admin',
        ],
        'pengurus' => [
          'driver' => 'session',
          'provider' => 'pengurus',
        ],
        'pengurus-api' => [
            'driver' => 'token',
            'provider' => 'pengurus',
        ],
        'mahasiswa' => [
          'driver' => 'session',
          'provider' => 'mahasiswa',
        ],
        'mahasiswa-api' => [
            'driver' => 'token',
            'provider' => 'mahasiswa',
        ],
    ],
    //  Providers
    'providers' => [
        'mahasiswa' => [
            'driver' => 'eloquent',
            'model' => App\Mahasiswa::class,
        ],
        'admin' => [
          'driver' => 'eloquent',
          'model' => App\Admin::class,
        ],
        'pengurus' => [
          'driver' => 'eloquent',
          'model' => App\Pengurus::class,
        ],
    ],
    // Password
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
];