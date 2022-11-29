<?php

class Database {
    private $host = DB_HOST;
    private $user = DB_USER; 
    private $pass = DB_PASS; 
    private $Dbname = DB_NAME;
    private $connection;
    private $statement;
    private $result;
    
    public function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->Dbname);
        if (!$this->connection) {
            echo "<script>alert('Gagal tersambung dengan database.')</script>";
        }
    }

    public function query($query) {
        $this->statement = $query;
    }

    public function execute() {
        $this->result = $this->connection->query($this->statement);
    }

    public function getSingle() {
        $this->execute();
        return $this->result->fetch_assoc();
    }
    
    public function getAll() {
        $this->execute();
        $result = [];
        while($data = mysqli_fetch_array($this->result)) {
            array_push($result, $data);
        }
        return $result;
    }
}