<?php

class Products extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->model('agregat_model');
    }

    function index() {
        $prozivodjaci_motora = array('perkins', 'iveco', 'doosan', 'mtu_mercedes', 'honda', 'lombardini');
        foreach($prozivodjaci_motora as $prozivodjac) {
            $data[$prozivodjac.'_powered'] = $this->agregat_model->get(str_replace('_', ' ', $prozivodjac));
        }
        
        $this->load->view('eng/products/index_page', $data);
    }
}
