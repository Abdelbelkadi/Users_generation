<?php

class Database
{

    protected $host = "localhost";
    protected $dbname = "users";
    protected $user = "root";
    protected $password = "admin";
    protected $DBH;

    function __construct()
    {
        try {
            $this->DBH = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        } catch (PDOException $e) {
            die("Failed to connect to DB: " . $e->getMessage());
        }
    }


    public function getDb()
    {
        if ($this->DBH instanceof PDO) {
            return $this->DBH;
        }
    }

    public function closeConnection()
    {
        $this->DBH = null;
    }
}
