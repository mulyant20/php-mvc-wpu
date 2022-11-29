<?php

class Auth extends Controller {
    public function login() {
        $data['title'] = 'login';
        $this->view('templates/header', $data);
        $this->view('auth/login');
        $this->view('templates/footer');
    }

    public function register() {
        $data['title'] = 'register';
        $this->view('templates/header', $data);
        $this->view('auth/register');
        $this->view('templates/footer');
    }
}