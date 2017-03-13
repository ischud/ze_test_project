    <?php

    return [
      'doctrine' => [
        'orm'    => [
          'auto_generate_proxy_classes' => true,
          'proxy_dir'                   => 'data/cache/EntityProxy',
          'proxy_namespace'             => 'EntityProxy',
          'underscore_naming_strategy'  => true,
        ],
        'connection' => [
          // default connection
          'orm_default' => [
            'driver'   => 'pdo_mysql',
            'host'     => $db['host'],
            'port'     => '3306',
            'dbname'   => $db['name'],
            'user'     => $db['user'],
            'password' => $db['pass'],
            'charset'  => 'UTF8',
          ],
        ],
        /*
        'cache' => [
          'redis' => [
            'host' => '127.0.0.1',
            'port' => '80',
          ],
        ],
        'cache' => [
          'array' => [],
        ],
        */
      ],
    ];