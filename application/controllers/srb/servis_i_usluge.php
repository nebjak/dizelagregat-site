<?php

class Servis_i_usluge extends CI_Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    function index() {
        $this->load->view('srb/servis_i_usluge/index_page');
    }
}