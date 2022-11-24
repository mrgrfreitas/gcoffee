<?php

use Monolog\Handler\NullHandler;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\SyslogUdpHandler;

return [

    'debug' => storage_path('logs/gcoffee.log'),
    'emergency' => storage_path('logs/gcoffee.log'),

];
