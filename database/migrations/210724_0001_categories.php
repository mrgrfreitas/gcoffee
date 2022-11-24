<?php

use Machine\Database\Migrations\Schema;

class categories
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `categories` (
                  `catId` int(11) unsigned NOT NULL AUTO_INCREMENT,
                  `parentId` int(10) unsigned DEFAULT NULL,
                  `categoryName` varchar(255) COLLATE utf8_general_ci NOT NULL,
                  `categorySlug` varchar(255) COLLATE utf8_general_ci NOT NULL,
                  `categoryColor` varchar(15) COLLATE utf8_general_ci DEFAULT NULL,
                  `categoryViews` decimal(10,0) DEFAULT NULL,
                  `categoryDesc` varchar(255) COLLATE utf8_general_ci DEFAULT NULL,
                  `created_at` timestamp NULL DEFAULT NULL,
                  `updated_at` timestamp NULL DEFAULT NULL,
                  PRIMARY KEY (`catId`),
                  UNIQUE KEY `categories_slug_unique` (`categorySlug`),
                  KEY `categories_parent_id_foreign` (`parentId`),
                  CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parentId`) REFERENCES `categories` (`catId`) ON DELETE SET NULL ON UPDATE CASCADE
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
