<?php
return [
    'backend' => [
        'frontName' => 'quanly'
    ],
    'crypt' => [
        'key' => '38d4c8ef712b862dbce9faa29a3c437a'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'alanshop.vn',
                'dbname' => 'alanshop_db',
                'username' => 'alanshop_user',
                'password' => 'Vansay@94',
                'active' => '1',
                'driver_options' => [
                    1014 => true
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' => [
        'save' => 'db'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '77c_'
            ],
            'page_cache' => [
                'id_prefix' => '77c_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 1,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'www.alanshop.vn'
    ],
    'install' => [
        'date' => 'Sun, 09 Aug 2020 13:44:44 +0000'
    ]
];
