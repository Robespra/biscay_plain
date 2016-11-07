<?php
class Database
{
    private static $dbName = 'elhacedopi980';
    private static $dbHost = 'elhacedopi980.mysql.db';
    private static $dbUsername = 'elhacedopi980';
    private static $dbUserPassword = 'Lemysqhac64';

    private static $cont = null;

    public function __construct() {
        die('Init function is not allowed');
    }

    public static function connect() {
        if (null === self::$cont) {
            try {
                self::$cont =  new PDO('mysql:host='.self::$dbHost.'; dbname='.self::$dbName, self::$dbUsername, self::$dbUserPassword);
            } catch(PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$cont;
    }

    public static function disconnect() {
        self::$cont = null;
    }
}