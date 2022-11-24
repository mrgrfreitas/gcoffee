<?php

use Machine\Database\Migrations\Schema;

class services
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `services` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `service_name` varchar(100) NOT NULL,
              `service_slogan` varchar(255) DEFAULT NULL,
              `service_slug` varchar(200) NOT NULL,
              `description` text DEFAULT NULL,
              `category` varchar(30) NOT NULL,
              `image` varchar(200) NOT NULL,
              `cost` float DEFAULT NULL,
              `company` varchar(40) DEFAULT NULL,
              `site` varchar(100) DEFAULT NULL,
              `facebook` varchar(255) DEFAULT NULL,
              `instagram` varchar(100) DEFAULT NULL,
              `tweeter` varchar(100) DEFAULT NULL,
              `email` varchar(100) DEFAULT NULL,
              `phone` varchar(25) DEFAULT NULL,
              `status` tinyint(4) NOT NULL,
              `position` int(11) DEFAULT NULL,
              `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
