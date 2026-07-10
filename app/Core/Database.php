<?php

namespace App\Core;

use PDO;

class Database
{

    private static $pdo;

    public static function connect()
    {

        if(!self::$pdo){

            self::$pdo=new PDO(

                "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",

                DB_USER,

                DB_PASS

            );

            self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }

        return self::$pdo;

    }

}