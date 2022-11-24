<?php

use Machine\Database\Migrations\Schema;

class roomService
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `room_service` (
              `id` int(11) NOT NULL,
              `service_name` varchar(50) DEFAULT NULL,
              `status` tinyint(1) DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('room_service');
    }
}
