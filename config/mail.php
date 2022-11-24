<?php

define("SMTP_MAIL_CONFIG", [
    "host"          => $_ENV['MAIL_HOST'],
    "port"          => $_ENV['MAIL_PORT'],
    "user"          => $_ENV['MAIL_USERNAME'],
    "pass"          => $_ENV['MAIL_PASSWORD'],
    "from_name"     => $_ENV['MAIL_FROM_NAME'],
    "from_email"    => $_ENV['MAIL_FROM_ADDRESS'],
]);
