<?php

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_LOGIN, DB_PASSWORD,[
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8mb4' "
    ]);
} catch (PDOException $e) {
    die($e->getMessage());
}
