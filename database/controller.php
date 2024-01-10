<?php
require_once 'connection.php';
require_once 'config.php';

class Controller {
    private $connection;

    public function __construct() {
        $this->connection = new Connection(Config::$mysql_host, Config::$port, Config::$username, Config::$password, Config::$database);
    }

    public function fetchEmployees()
    {
        $employees = [];

        $pdo = $this->connection->getPDO();
        $stmt = $pdo->query('SELECT * FROM employees');
        $employees = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $employees;
    }

    public function fetchDelegations()
    {
        $delegations = [];

        $pdo = $this->connection->getPDO();
        $stmt = $pdo->query('SELECT * FROM delegations');
        $delegations = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $delegations;
    }

    public function fetchInvoices()
    {
        $invoices = [];

        $pdo = $this->connection->getPDO();
        $stmt = $pdo->query('SELECT * FROM vat_invoices');
        $invoices = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $invoices;
    }

    public function fetchContractors()
    {
        $contractors = [];

        $pdo = $this->connection->getPDO();
        $stmt = $pdo->query('SELECT * FROM contractors');
        $contractors = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $contractors;
    }
}
?>