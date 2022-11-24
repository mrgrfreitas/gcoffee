<?php

use Machine\Database\Migrations\Schema;

class staff
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `staff` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `fullname` varchar(100) NOT NULL,
              `gender` enum('M','F') NOT NULL DEFAULT 'M',
              `image` varchar(100) DEFAULT NULL,
              `role` varchar(100) NOT NULL,
              `phone` varchar(100) DEFAULT NULL,
              `email` varchar(100) DEFAULT NULL,
              `facebook` varchar(100) DEFAULT NULL,
              `instagram` varchar(100) DEFAULT NULL,
              `google` varchar(100) DEFAULT NULL,
              `status` tinyint(4) DEFAULT NULL,
              `created_at` datetime DEFAULT NULL,
              PRIMARY KEY (`id`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
