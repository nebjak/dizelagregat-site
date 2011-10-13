<?php

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('eng/products/index_page');
    }
}
