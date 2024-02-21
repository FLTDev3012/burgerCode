<?php

class Database
{

    private static $dbHost = "localhost";
    private static $dbName = "fltdcomp_burger_code";
    private static $dbUser = "fltdcomp_user";
    private static $dbUserPassword = "Motdepasse1*2603";

    private static $connection = null;

    public static function connect()

    {
            try
        {
            self::$connection   = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName,self::$dbUser,self::$dbUserPassword);
        }

        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$connection;
    }
    
    public static function disconnect()
    {
        self::$connection = null;
    }
}

/* Database::connect(); */


?>