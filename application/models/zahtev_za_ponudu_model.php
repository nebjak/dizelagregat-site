<?php

class Zahtev_za_ponudu_model extends CI_Model {
    
    var $email_to = 'nebjak@localhost';
    
    function __construct() {
        parent::__construct();
        $this->load->library('email');
    }
    
    function send($data) {
        $this->email->from('nebojsa@nebjak.net', 'DEA Sajt');
        $this->email->to($this->email_to);
        
        $this->email->subject("Zahtev za ponudu: ".$data['ponuda_za']);
        
        $message = '';
        foreach($data as $key => $value) {
            $message .= "\n{$key}: {$value}";
        }
        $this->email->message($message);
        if($this->email->send()) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}