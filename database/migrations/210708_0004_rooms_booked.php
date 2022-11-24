<?php

use Machine\Database\Migrations\Schema;

class roomsBooked
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `rooms_booked` (
                `roomBookedId` int(11) NOT NULL AUTO_INCREMENT,
                `idRoom` int(11) NOT NULL,
                `idGuest` int(11) NOT NULL,
                `bookingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                PRIMARY KEY (`roomBookedId`) USING BTREE,
                KEY `idRoom` (`idRoom`),
                KEY `idGuest` (`idGuest`)
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('rooms_booked');
    }
}
