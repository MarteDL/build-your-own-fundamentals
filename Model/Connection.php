<?php
declare(strict_types=1);
require_once('./Config/config.php');

class Connection
{
    public function connect() : PDO {
        $dsn = 'mysql:host='.HOST.';dbname='.DATABASE;
        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        return new PDO($dsn, USERNAME, PASSWORD, $driverOptions);
    }
}