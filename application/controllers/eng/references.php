<?php

class References extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('eng/references/index_page');
    }
}
