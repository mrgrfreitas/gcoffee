<?php

use Machine\Database\Migrations\Schema;

class booking
{
    public function up()
    {
        Schema::create(
            "CREATE TABLE IF NOT EXISTS `booking` (
                    `bookingId` int(11) NOT NULL AUTO_INCREMENT,
                    `idGuest` int(11) NOT NULL,
                    `idRoom` int(11) NOT NULL,
                    `check_in` date NOT NULL,
                    `check_out` date NOT NULL,
                    `adult` int(11) NOT NULL,
                    `child` int(11) NOT NULL,
                    `requirements` varchar(255) DEFAULT NULL,
                    `time_arrival` time NOT NULL,
                    `coupon_code` varchar(50) DEFAULT NULL,
                    `payment_method` varchar(15) NOT NULL,
                    `bookingStatus` varchar(20) NOT NULL,
                    `bookingDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                    `timestamp` varchar(200) DEFAULT NULL,
                    PRIMARY KEY (`bookingId`) USING BTREE,
                    KEY `idRoom` (`idRoom`),
                    KEY `idGuest` (`idGuest`)
                                     
                ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;"
        );
    }

    public function down()
    {
        Schema::dropIfExists('booking');
    }
}
