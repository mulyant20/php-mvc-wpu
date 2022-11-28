<?php

class About extends Controller {
    public function index($name = '') {

        $data['name'] = $name;

        $this->view('templates/header');

        // jika ada param name maka tampilkan index, tidak ada maka tampilkan 404
        $name !== '' ? $this->view('about/index', $data) : $this->view('about/404');
        
        $this->view('templates/footer');
    }
}