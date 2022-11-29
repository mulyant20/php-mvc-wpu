<?php

class Talent_model {
    private $table = 'talents';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
}