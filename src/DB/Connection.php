<?php
namespace App\DB;

class Connection
{   
    private static $instance = null;

    private function __construct()
    {

    }

    public static function getInstance()
    {
        if(is_null(self::$instance))
        {
            self::$instance = new \PDO('mysql:dbname=productcatalog;host=localhost','root','123');
            self::$instance->exec('SET NAMES UTF8');
        }
        return self::$instance;
    }
}