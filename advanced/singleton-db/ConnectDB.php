<?php

class ConnectDB
{
    private static ConnectDB $instance;
    private mysqli $db;

    private function __construct()
    {
        $this->db = new mysqli(
            'localhost',
            'root',
            'root',
            'test',
            '3306'
        );
    }

    private function __clone(): void
    {

    }

    /**
     * @throws Exception
     */
    public function __wakeup(): void
    {
        throw new Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): ConnectDB
    {
        if (!isset(self::$instance))
        {
            return self::$instance = new static();
        }

        return self::$instance;
    }

    public function connect(): mysqli
    {
        return $this->db;
    }
}

$db = ConnectDB::getInstance()->connect();
var_dump($db->query('select 1'));