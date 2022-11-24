<?php

use Machine\Database\Migrations\Schema;

class Guests
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `guests` (
              `guestId` int(11) NOT NULL AUTO_INCREMENT,
              `first_name` varchar(30) NOT NULL,
              `last_name` varchar(30) NOT NULL,
              `guestSlug` varchar(100) DEFAULT NULL,
              `address_1` varchar(100) DEFAULT NULL,
              `address_2` varchar(100) DEFAULT NULL,
              `city` varchar(50) DEFAULT NULL,
              `state` varchar(50) DEFAULT NULL,
              `country` varchar(50) DEFAULT NULL,
              `zip_code` varchar(255) DEFAULT NULL,
              `phone` varchar(20) DEFAULT NULL,
              `cellular` varchar(20) DEFAULT NULL,
              `email` varchar(100) DEFAULT NULL,
              `gender` enum('M','F') DEFAULT NULL,
              PRIMARY KEY (`guestId`) USING BTREE,
              UNIQUE KEY `guestSlug` (`guestSlug`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
