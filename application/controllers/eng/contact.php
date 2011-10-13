<?php

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->helper('nebjak');
        $this->load->library('email');
    }

    function index() {
        $this->load->view('eng/contact/index_page');
    }
    
    function process() {
        if(is_ajax()) {
            $this->email->from('nebojsa@nebjak.net', 'DEA');
            $this->email->to('nebojsa.jakovljevic@energoglobal.com');
            $this->email->subject('Kontakt sa sajta: '.date("Y-m-d H:i:s"));
            $this->email->message("
                Firma: {$this->input->post('company')}
                Ime: {$this->input->post('name')}
                E-mail: {$this->input->post('email')}
                Br. tel: {$this->input->post('phone_num')}
                Poruka: 
                {$this->input->post('message')}
                ");
            if($this->email->send()) {
                echo "Message sent successfully";
            }
            else {
                echo "Error: {$this->email->print_debugger()}";
            }
        }
        else {
            echo "Nije AJAX";
        }
    }
}
