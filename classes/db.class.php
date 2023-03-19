<?php
class DB
{    
    public static function connect()
    {
        $host = ''; 
        $user = '';
        $pass = '';
        $base = '';
        $port = 3306;

        return new PDO("mysql:host={$host};dbname={$base};charset=UTF8;", $user, $pass);
    }
}

// DATABASE_URL="mysql://u595063194_logicinfo:Greenfactor01@212.1.209.193:3306/u595063194_logicinfo"
