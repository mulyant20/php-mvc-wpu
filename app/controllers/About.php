<?php

class About {
    public function index($name = '') {
        if($name !== '') {
            echo 'hello  ' . $name . ', selamat datang';
        } else {
            echo 'tidak ada';
        }
    }
}