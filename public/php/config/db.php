<?php

class Db
{
    private static $db;
    private $connection;

    private function __construct()
    {
        // TO;DO SET UP ENV 
        //$this->connection = new PDO(
        //    'mysql:host=' . getenv('DB_HOST') . '; dbname=' . getenv('DB_NAME'),
        //    getenv('DB_USER'),
        //    getenv('DB_PASSWD')
        //);

        $this->connection = new PDO(
            'mysql:host=localhost; dbname=notion',
            'henry',
            ')JWNF!!pe1[sdb-p'
        );

        $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    function __destruct()
    {
        //$this->connection->close();
    }

    public static function getConnection()
    {
        if (self::$db == null) {
            if (getenv('NODE') == 'localhost') {
                //error_log('DB Connected')
            }

            self::$db = new Db();
        }

        return self::$db->connection;
    }
}
