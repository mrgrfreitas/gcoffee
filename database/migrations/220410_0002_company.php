<?php

use Machine\Database\Migrations\Schema;

class company
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `company` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `prefix` varchar(25) NOT NULL,
                `name` varchar(70) NOT NULL,
                `about` text DEFAULT NULL,
                `history` text DEFAULT NULL,
                `phone` varchar(25) DEFAULT NULL,
                `mobile` varchar(25) DEFAULT NULL,
                `email` varchar(50) DEFAULT NULL,
                `address` varchar(50) DEFAULT NULL,
                `city` varchar(25) DEFAULT NULL,
                `country` varchar(20) DEFAULT NULL,
                `facebook` varchar(100) DEFAULT NULL,
                `tweeter` varchar(100) DEFAULT NULL,
                `instagram` varchar(100) DEFAULT NULL,
                `google` varchar(100) DEFAULT NULL,
                `post_code` varchar(30) DEFAULT NULL,
                `contact_person` varchar(30) DEFAULT NULL,
                `site` varchar(255) DEFAULT NULL,
                `fax` varchar(30) DEFAULT NULL,
                `state` varchar(30) DEFAULT NULL,
                `slogan` varchar(255) DEFAULT NULL,
                `checkin_time` time DEFAULT NULL,
                `checkout_time` time DEFAULT NULL,
                `cancellation` text DEFAULT NULL,
                `additional_info` text DEFAULT NULL,
                PRIMARY KEY (`id`) USING BTREE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('company');
    }
}
