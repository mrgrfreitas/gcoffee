<?php

    return[

        /*
        |--------------------------------------------------------------------------
        | Default database Connection Name
        |--------------------------------------------------------------------------
        |
        | Here you may specify which of the database connections below you wish
        | to use as your default connection for all database work. Of course
        | you may use many connections at once using the database library.
        |
        */

        'default' => $_ENV['DB_CONNECTION'],

        /*
        |--------------------------------------------------------------------------
        | database Connections
        |--------------------------------------------------------------------------
        |
        | Here are each of the database connections setup for your application.
        | Of course, examples of configuring each database platform that is
        | supported by Laravel is shown below to make development simple.
        |
        |
        | All database work in Laravel is done through the PHP PDO facilities
        | so make sure you have the driver for your particular database of
        | choice installed on your machine before you begin development.
        |
        */

        'connections' => [

            'sqlite' => [
                'driver' => 'sqlite',
                'url' => '',
                'database' => '',
                'prefix' => '',
                'foreign_key_constraints' => '',
            ],

            'mysql' => [
                'driver' => 'mysql',
                'host' => $_ENV['DB_HOST'],
                'port' => $_ENV['DB_PORT'],
                'database' => $_ENV['DB_DATABASE'],
                'username' => $_ENV['DB_USERNAME'],
                'password' => $_ENV['DB_PASSWORD'],
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
                'prefix_indexes' => true,
                'strict' => true,
                'engine' => null,
                'options' => [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8'],
            ],

        ],

    ];
