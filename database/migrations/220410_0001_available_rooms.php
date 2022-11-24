<?php

use Machine\Database\Migrations\Schema;

class availableRooms
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `available_rooms` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `idRoom` int(11) DEFAULT NULL,
              `date_start` date DEFAULT NULL,
              `date_end` date DEFAULT NULL,
              `num_room` tinyint(4) DEFAULT NULL,
              `price_room` float DEFAULT NULL,
              `old_price` float DEFAULT NULL,
              `adult` tinyint(4) NOT NULL,
              `child` tinyint(4) NOT NULL,
              `status` tinyint(1) DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('available_rooms');
    }
}
