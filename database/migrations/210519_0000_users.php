<?php

use Machine\Database\Migrations\Schema;

class users
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `users` (
              `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(191) COLLATE utf8_general_ci NOT NULL,
              `roleId` int(11) NOT NULL DEFAULT 4,
              `email` varchar(191) COLLATE utf8_general_ci NOT NULL,
              `email_verified_at` timestamp NULL DEFAULT NULL,
              `password` varchar(191) COLLATE utf8_general_ci NOT NULL,
              `remember_token` varchar(100) COLLATE utf8_general_ci DEFAULT NULL,
              `status` tinyint(1) NOT NULL DEFAULT 1,
              `deleted_at` timestamp NULL DEFAULT NULL,
              `created_at` timestamp NULL DEFAULT NULL,
              `updated_at` timestamp NULL DEFAULT NULL,
              PRIMARY KEY (`id`),
              UNIQUE KEY `users_email_unique` (`email`)
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
