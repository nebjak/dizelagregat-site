<?php

class Pocetna extends CI_Controller {
    function  __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('srb/pocetna/index_page');
    }
}