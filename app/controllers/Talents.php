<?php

class Talents extends Controller {
    public function index() {
        
        $data['title'] = 'Talent index';
        $this->view('templates/header', $data);
        $this->view('talents/index');
        $this->view('templates/footer');
    }
}