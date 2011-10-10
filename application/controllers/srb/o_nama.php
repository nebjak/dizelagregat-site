<?php

class O_nama extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->view('srb/o_nama/index_page');
    }
}