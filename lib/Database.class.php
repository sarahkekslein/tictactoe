<?php
class Database
{
    private static $server = "mysql:dbname=tictactoe;host=127.0.0.1";
    private static $username = "root";
    private static $password = "";
    private static $connection;

    private function __construct()
    {
    }


    public static function getInstance()
    {
        if (Database::$connection === null) {
            try {
                Database::$connection = new PDO(self::$server, self::$username, self::$password);
            } catch (PDOException $e) {
                echo 'Connection failed' . $e->getMessage();
            }
        }


        return Database::$connection;
    }
}
