<?php

class Connection
{
    private $pdo;

    public function __construct($host, $port, $username, $password, $database)
    {
        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$database;port=$port", $username, $password);
        } catch (PDOException $e) {
            echo 'Połączenie nie mogło zostać utworzone.<br />';
        }
    }
	
    public function getPDO()
    {
        return $this->pdo;
    }
}
?>