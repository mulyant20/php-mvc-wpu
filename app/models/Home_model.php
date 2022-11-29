<?php

class Home_model {
    private $table = 'techstack';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function getTechstack() {
        $tableDB = $this->table;
        $this->db->query("SELECT * FROM techstack");
        return $this->db->getAll();
    }
}