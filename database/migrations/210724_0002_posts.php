<?php

use Machine\Database\Migrations\Schema;

class posts
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `posts` (
                  `postId` int(10) unsigned NOT NULL AUTO_INCREMENT,
                  `idAuthor` int(11) NOT NULL,
                  `idCategory` int(11) NOT NULL,
                  `postTitle` varchar(255) NOT NULL,
                  `seoTitle` varchar(255) DEFAULT NULL,
                  `postContent` text DEFAULT NULL,
                  `postImage` varchar(255) DEFAULT NULL,
                  `postSlug` varchar(255) NOT NULL,
                  `metaKeywords` text DEFAULT NULL,
                  `postStatus` enum('PUBLISHED','DRAFT','PENDING') NOT NULL DEFAULT 'DRAFT',
                  `viewCount` int(11) DEFAULT NULL,
                  `shared` int(11) DEFAULT NULL,
                  `postPosition` tinyint(4) NOT NULL,
                  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
                  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
                  `published_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                  `url_link` varchar(255) DEFAULT NULL,
                  PRIMARY KEY (`postId`) USING BTREE,
                  UNIQUE KEY `postSlug` (`postSlug`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
