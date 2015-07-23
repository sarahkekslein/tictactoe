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

    public static function get_data($statement, $db_connection)
    {
        $data = array();
        $db_request = $db_connection->prepare($statement);
        $db_request->execute();
        while ($array = $db_request->fetch()) {
            foreach ($array as $key => $value) {
                if (!is_integer($key)) {
                    $data[$key] = $value;
                }
            }
        }
        return $data;
    }
}
