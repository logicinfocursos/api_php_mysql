<?php
class DB
{    
    public static function connect()
    {
        $host = '212.1.209.193'; 
        $user = 'u595063194_logicinfo';
        $pass = 'Greenfactor01';
        $base = 'u595063194_logicinfo';
        $port = 3306;

        return new PDO("mysql:host={$host};dbname={$base};charset=UTF8;", $user, $pass);
    }
}

// DATABASE_URL="mysql://u595063194_logicinfo:Greenfactor01@212.1.209.193:3306/u595063194_logicinfo"