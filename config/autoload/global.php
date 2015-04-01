<?php
/**
 * Global Configuration Override.
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return [
    'db' => [
        'driver'         => 'Pdo',
        'dsn'            => 'sqlite:' . getcwd() . '/data/database/contatos.sqlite',
        'driver_options' => [],
    ],
    'service_manager' => [
        'factories' => [
            'zend_db_adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
        ],
    ],
];
