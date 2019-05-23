<?php
return [
    'namespace' => 'App\Http\Controllers',
    'router' => [

        'authentication'=>'\Auth\LoginController',
        'app'=>'\App\AppController',
        'order'=>'\App\OrderController',
        'dashboard'=>'\App\AppController',
        'admin'=>'\Dashboard\DashboardController',
        'user'=>'\User\UserController',
    ]
];
