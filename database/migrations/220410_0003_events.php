<?php

use Machine\Database\Migrations\Schema;

class events
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `events` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `title` varchar(255) NOT NULL,
              `slug` varchar(100) DEFAULT NULL,
              `description` text NOT NULL,
              `image` varchar(200) NOT NULL,
              `event_date_start` date NOT NULL,
              `event_time_start` time NOT NULL,
              `event_date_end` date DEFAULT NULL,
              `event_time_end` time DEFAULT NULL,
              `participants` int(11) NOT NULL,
              `cost` float DEFAULT NULL,
              `status` tinyint(4) NOT NULL,
              `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('events');
    }
}
