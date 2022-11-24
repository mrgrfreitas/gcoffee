<?php

return[

    /*
     |--------------------------------------------------------------------------
     | Default Filesystem Disk
     |--------------------------------------------------------------------------
     |
     | Here you may specify the default filesystem disk that should be used
     | by the framework. The "local" disk, as well as a variety of cloud
     | based disks are available to your application. Just store away!
     |
     */

    'default' => $_ENV['FILESYSTEM_DRIVER'],

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => $_ENV['FILESYSTEM_CLOUD'],

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('App')
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('files'. DIRECTORY_SEPARATOR .'public'),
            'url' => $_ENV['APP_URL'].'/storage',
            'visibility' => 'public',
        ],

        'rootFolder' => $_ENV['ROOT_FOLDER'],
        'siteFolder' => $_ENV['SITE_FOLDER'],

        's3' => [],

    ],

];
