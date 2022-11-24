<?php

use Machine\App\Application;

$dir = str_replace('\database', '', __DIR__);


require_once  $dir . "/vendor/autoload.php";

$app = new Application($dir);
$app->db->runSeeders();