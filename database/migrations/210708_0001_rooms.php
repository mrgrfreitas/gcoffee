<?php

use Machine\Database\Migrations\Schema;

class rooms
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `rooms` (
                  `roomId` int(11) NOT NULL AUTO_INCREMENT,
                  `idRoomType` int(11) NOT NULL,
                  `roomName` varchar(50) NOT NULL,
                  `customRoomName` varchar(50) DEFAULT NULL,
                  `roomSlug` varchar(100) NOT NULL unique,
                  `roomImage` varchar(255) DEFAULT NULL,
                  `roomNumbers` int(3) NOT NULL,
                  `amenitiesIds` varchar(255) DEFAULT NULL,
                  `roomStatus` int(11) NOT NULL DEFAULT 1,
                  PRIMARY KEY (`roomId`) USING BTREE,
                  FOREIGN KEY (`idRoomType`) REFERENCES room_type(`roomTypeId`) ON DELETE CASCADE
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
