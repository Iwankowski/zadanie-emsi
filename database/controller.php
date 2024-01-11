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

    public function fetchDelegation($delegationId)
    {
        $pdo = $this->connection->getPDO();
        $stmt = $pdo->query('SELECT * FROM delegations WHERE id = ' . $delegationId);
        $delegation = $stmt->fetch(PDO::FETCH_ASSOC);

        return $delegation;
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

    public function fetchContractor($contractorId)
    {
        $pdo = $this->connection->getPDO();
        $stmt = $pdo->query('SELECT * FROM contractors WHERE id = ' . $contractorId);
        $contractor = $stmt->fetch(PDO::FETCH_ASSOC);

        return $contractor;
    }

    public function editContractorById($contractorId, $data)
    {
        $pdo = $this->connection->getPDO();
        $sql = 'UPDATE contractors SET 
            nip = :nip,
            regon = :regon,
            name = :name,
            vat_payer = :vat,
            street = :street,
            house_number = :house_number,
            apartment_number = :apartment_number 
            WHERE id = :id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nip", $data['nip']);
        $stmt->bindParam(":regon", $data['regon']);
        $stmt->bindParam(":vat", $data['vat']);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":street", $data['street']);
        $stmt->bindParam(":house_number", $data['house_number']);
        $stmt->bindParam(":apartment_number", $data['apartment_number']);
        $stmt->bindParam(":id", $contractorId);

        $stmt->execute();
    }

    public function deleteContractorById($contractor_id)
    {
        $pdo = $this->connection->getPDO();
        $sql = 'UPDATE contractors SET deleted = 1 WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $contractor_id);

        $stmt->execute();
    }

    public function createContractor($data)
    {
        $pdo = $this->connection->getPDO();
        $sql = 'INSERT INTO contractors 
            (nip,regon,name,vat_payer,street,house_number,apartment_number) VALUES 
            (:nip,:regon,:name,:vat_payer,:street,:house_number,:apartment_number)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":nip", $data['nip']);
        $stmt->bindParam(":regon", $data['regon']);
        $stmt->bindParam(":vat_payer", $data['vat_payer']);
        $stmt->bindParam(":name", $data['name']);
        $stmt->bindParam(":street", $data['street']);
        $stmt->bindParam(":house_number", $data['house_number']);
        $stmt->bindParam(":apartment_number", $data['apartment_number']);

        $stmt->execute();
    }

    public function editDelegationById($delegationId, $data)
    {
        $pdo = $this->connection->getPDO();
        $sql = 'UPDATE delegations SET 
            fullname = :fullname,
            date_from = :date_from,
            date_to = :date_to,
            departure = :departure,
            arrival = :arrival
            WHERE id = :id';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":fullname", $data['fullname']);
        $stmt->bindParam(":date_from", $data['date_from']);
        $stmt->bindParam(":date_to", $data['date_to']);
        $stmt->bindParam(":departure", $data['departure']);
        $stmt->bindParam(":arrival", $data['arrival']);
        $stmt->bindParam(":id", $delegationId);

        $stmt->execute();
    }

    public function createDelegation($data)
    {
        $pdo = $this->connection->getPDO();
        $sql = 'INSERT INTO delegations 
            (fullname,date_from,date_to,departure,arrival) VALUES 
            (:fullname,:date_from,:date_to,:departure,:arrival)';

        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":fullname", $data['fullname']);
        $stmt->bindParam(":date_from", $data['date_from']);
        $stmt->bindParam(":date_to", $data['date_to']);
        $stmt->bindParam(":departure", $data['departure']);
        $stmt->bindParam(":arrival", $data['arrival']);
    
        $stmt->execute();
    }

    public function deleteDelegationById($delegation_id)
    {
        $pdo = $this->connection->getPDO();
        $sql = 'UPDATE delegations SET deleted = 1 WHERE id = :id';
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $delegation_id);

        $stmt->execute();
    }

}
?>