<?php

class Database 
{

    private static $dbHost = "dataHost";
    private static $dbName = "databaseName";
    private static $dbUser = "dataUser";
    private static $dbUserPassword = "userPassword";

    private static $dbconnection = null;

    public static function connect() 
    {
        try 
        {
            self::$dbconnection = new PDO("mysql:host=" .self::$dbHost. ";dbname=" .self::$dbName,self::$dbUser,self::$dbUserPassword);
        }
        catch(PDOException $e)
        {
            die($e->getMessage());
        }
        return self::$dbconnection;
    }

    public static function disconnect() 
    {
        self::$dbconnection = null;
    }
}

Database::connect();

?>