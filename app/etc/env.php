<?php
return [
    'backend' => [
        'frontName' => 'admin_1b132x'
    ],
    'cache' => [
        'graphql' => [
            'id_salt' => 'y51CMmJZfj3Z0VAUoa5G4GAWPoSlpkOY'
        ],
        'frontend' => [
            'default' => [
                'id_prefix' => 'fce_'
            ],
            'page_cache' => [
                'id_prefix' => 'fce_'
            ]
        ],
        'allow_parallel_generation' => false
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => '6e28230f69f3fdfbe0d9c75ed76f09ba'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => '127.0.0.1',
                'dbname' => 'magento',
                'username' => 'root',
                'password' => 'option123',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
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
        'save' => 'files'
    ],
    'lock' => [
        'provider' => 'db'
    ],
    'directories' => [
        'document_root_is_pub' => true
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
        'translate' => 1
    ],
    'downloadable_domains' => [
        'magento.local'
    ],
    'install' => [
        'date' => 'Tue, 19 Dec 2023 07:48:14 +0000'
    ]
];
