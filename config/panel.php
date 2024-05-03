<?php
return
[
    'create-actions' => [
        [ 'route' => 'users.create', 'name' => 'New User', 'access' => 'admin' ],
    ],

    'registration' => [
        'admin' => true,
    ],

    // Roles Management
    
    'roles' => [
        // for administrative purpose only
        [
            'id' => 'data_manager',
            'name' => 'data_manager',  // 0 index is fixed for data manager
        ],
        [
            'id' => 'store_manager',
            'name' => 'store_manager', // 1 index is fixed for store manager
        ],
        [
            'id' => 'support',
            'name' => 'support', // 2 index is fixed for support
        ],
        // defaul roles
        [
            'id' => 'user',
            'name' => 'user', // 3 index is fixed for user
        ],
    ],

    // Dashboard Sidelinks

    'actionlinks' => [

    ],

    'modulelinks' => [
        [
            
        ],
    ],

    'applinks' => [],

    'userlinks' => [],

    'defaultinks' => [
        // 1 => [
        //     'icon' => 'bi bi-person-circle',
        //     'name' => 'My Profile',
        //     'route' => 'profiles.index', // auth module
        //     'access' => '',
        // ],
        2 => [
            'icon' => 'bi bi-',
            'name' => 'About Us',
            'route' => 'about-us',
            'access' => '',
        ],
        3 => [
            'icon' => 'bi bi-',
            'name' => 'Terms & Conditions',
            'route' => 'terms-and-conditions',
            'access' => '',
        ],
    ],
];
