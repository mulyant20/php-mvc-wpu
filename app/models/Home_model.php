<?php

class Home_model {
    private $techstack = [
        [
            "name" => "React"
        ],
        [
            "name" => "Php"
        ],
        [
            "name" => "MySQL"
        ]
    ];

    public function getTechstack() {
        return $this->techstack; 
    }
}