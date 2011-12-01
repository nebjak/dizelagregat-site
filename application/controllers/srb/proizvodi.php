<?php

class Proizvodi extends CI_Controller {
    
    function  __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('srb/proizvodi/index_page');
    }
}