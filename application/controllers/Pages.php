<?php

class Pages extends CI_Controller{

    public function index(){
    $this->load->view('templates/header');
    $this->load->view('pages/main');
    }
}