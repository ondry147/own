<?php

use \Core\Config;;

class Db
{

    private static $connection;

    private static $settings = array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_EMULATE_PREPARES => false,
    );

    public static function connect() {
        $db_host = Config::DB_HOST;
        $db_name = Config::DB_NAME;
        $db_pw = Config::DB_PASSWORD;
        $db_user = Config::DB_USER;
        if (!isset(self::$connection)) {
            self::$connection = @new PDO(
                "mysql:host=$db_host;dbname=$db_name",
                $db_user,
                $db_pw,
                self::$settings
            );
        }
    }

    // Return the 1st row
    public static function queryAlone($query, $parameters = array()) {
        $result = self::$connection->prepare($query);
        $result->execute($parameters);
        return $result->fetch();
    }

    // Return all rows
    public static function queryAll($query, $parameters = array()) {
        $result = self::$connection->prepare($query);
        $result->execute($parameters);
        return $result->fetchAll();
    }

    // Return the number of affected rows
    public static function query($query, $parameters = array()) {
        $result = self::$connection->prepare($query);
        $result->execute($parameters);
        return $result->rowCount();
    }

    public static function playerDb()
    {
        return Config::DB_PLAYER;
    }

    public static function accountDb()
    {
        return Config::DB_ACCOUNT;
    }
}