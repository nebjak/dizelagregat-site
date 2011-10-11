<?php

class Kontakt extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->helper('nebjak');
        $this->load->library('email');
    }

    function index() {
        $this->load->view('srb/kontakt/index_page');
    }
    
    function process() {
        if(is_ajax()) {
            $this->email->from('nebojsa@nebjak.net', 'DEA');
            $this->email->to('nebojsa.jakovljevic@energoglobal.com');
            $this->email->subject('Kontakt sa sajta: '.date("Y-m-d H:i:s"));
            $this->email->message("
                Firma: {$this->input->post('firma')}
                Ime: {$this->input->post('ime')}
                E-mail: {$this->input->post('email')}
                Br. tel: {$this->input->post('br_tel')}
                Poruka: 
                {$this->input->post('poruka')}
                ");
            if($this->email->send()) {
                echo "Poruka uspešno poslata";
            }
            else {
                echo "Došlo je do greške: {$this->email->print_debugger()}";
            }
        }
        else {
            echo "Nije AJAX";
        }
    }
}
