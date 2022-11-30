<?php

class Job_model {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getJobs($id){
        $this->db->query("SELECT * FROM jobs WHERE id = '$id'");
        return $this->db->getSingle();
    }
}