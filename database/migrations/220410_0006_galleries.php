<?php

use Machine\Database\Migrations\Schema;

class galleries
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `galleries` (
              `gId` int(11) NOT NULL AUTO_INCREMENT,
              `album_id` int(11) NOT NULL,
              `albumName` varchar(255) DEFAULT NULL,
              `image_name` varchar(255) NOT NULL,
              `image_desc` varchar(255) DEFAULT NULL,
              `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
              `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
              PRIMARY KEY (`gId`) USING BTREE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}
