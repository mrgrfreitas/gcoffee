<?php

use Machine\Database\Migrations\Schema;

class facilities
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `facilities` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `name` varchar(30) DEFAULT NULL,
              `icon` varchar(50) DEFAULT NULL,
              `status` tinyint(1) DEFAULT NULL,
              PRIMARY KEY (`id`) USING BTREE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('facilities');
    }
}
