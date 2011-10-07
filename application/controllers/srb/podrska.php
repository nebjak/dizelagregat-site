<?php

class Podrska extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('srb/podrska/index_page');
    }
}
