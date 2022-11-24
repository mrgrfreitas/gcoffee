<?php

use Machine\Database\Migrations\Schema;

class extraServices
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `extra_services` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `name` varchar(50) NOT NULL,
              `cost` float NOT NULL,
              PRIMARY KEY (`id`) USING BTREE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('extra_services');
    }
}
