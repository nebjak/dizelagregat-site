<?php

class About_us extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('eng/about_us/index_page');
    }
}
