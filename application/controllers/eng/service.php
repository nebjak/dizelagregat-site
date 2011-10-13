<?php

class Service extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('eng/service/index_page');
    }
}
