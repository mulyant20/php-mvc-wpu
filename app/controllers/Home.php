<?php

class Home extends Controller{
    public function index() {
        $data['title'] = 'Home';
        $data['techstack'] = $this->model('Home_model')->getTechstack();
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}