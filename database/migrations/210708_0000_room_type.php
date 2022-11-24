<?php

use Machine\Database\Migrations\Schema;

class roomType
{
     public function up()
     {
         Schema::create(
        "CREATE TABLE IF NOT EXISTS `room_type` (
              `roomTypeId` int(11) NOT NULL AUTO_INCREMENT,
              `roomTypeName` varchar(255) NOT NULL,
              `roomTypeSlug` varchar(255) NOT NULL,
              `roomTypeDesc` text DEFAULT NULL,
              `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
              PRIMARY KEY (`roomTypeId`) USING BTREE,
              UNIQUE KEY `roomTypeSlug` (`roomTypeSlug`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
         );
     }

    public function down()
    {
        Schema::dropIfExists('room_type');
     }
}
