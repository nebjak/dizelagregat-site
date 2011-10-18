<?php

class Zahtev_za_ponudu extends CI_Controller {

    function __construct() {
        parent::__construct();
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('zahtev_za_ponudu_model');
    }

    function index() {
        $this->prodaja();
    }
    
    function prodaja() {
        $this->form_validation->set_rules('trazena_oprema', 'Tražena oprema', 'trim|required');
        $this->form_validation->set_rules('snaga', 'Potrebna snaga', 'trim|required');
        $this->form_validation->set_rules('rezim_rada', 'Režim rada', 'trim|required');
        $this->form_validation->set_rules('konstrukcija', 'Konstrukcija', 'trim|required');
        $this->form_validation->set_rules('start', 'Startovanje', 'trim|required');
        $this->form_validation->set_rules('glavni_prekidac', 'Glavni prekidač', 'trim');
        $this->form_validation->set_rules('punjac_akumulatora', 'Punjač akumulatora', 'trim');
        $this->form_validation->set_rules('grejac_motora', 'Grejac motora', 'trim');
        $this->form_validation->set_rules('daljinska_kontrola', 'Daljinska kontrola', 'trim');
        $this->form_validation->set_rules('extra_rezervoar', 'extra_rezervoar', 'trim');
        $this->form_validation->set_rules('automatsko_pretakanje', 'automatsko_pretakanje', 'trim');
        $this->form_validation->set_rules('lokacija', 'Lokacija ugradnje', 'trim');
        $this->form_validation->set_rules('vreme_isporuke', 'Potrebno vreme isporuke', 'trim');
        $this->form_validation->set_rules('dodatni_zahtevi', 'Dodatni zahtevi', 'trim');
        $this->form_validation->set_rules('firma', 'Naziv firme', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('k_osoba', 'Naziv firme', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('pib', 'PIB', 'trim|numeric');
        $this->form_validation->set_rules('adresa', 'Adresa', 'trim');
        $this->form_validation->set_rules('grad', 'Grad', 'trim');
        $this->form_validation->set_rules('telefon', 'Telefon', 'trim|required');
        $this->form_validation->set_rules('telefon2', 'Telefon 2', 'trim');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_emails');
        $this->form_validation->set_rules('web_site', 'Web sajt', 'trim');
        
        if($this->form_validation->run()) {
            $data['ponuda_za'] = 'PRODAJA';
            $data['trazena_oprema'] = $this->input->post('trazena_oprema');
            $data['snaga'] = $this->input->post('snaga');
            $data['rezim_rada'] = $this->input->post('trazena_oprema');
            $data['konstrukcija'] = $this->input->post('konstrukcija');
            $data['start'] = $this->input->post('start');
            $data['glavni_prekidac'] = $this->input->post('glavni_prekidac');
            $data['punjac_akumulatora'] = $this->input->post('punjac_akumulatora');
            $data['grejac_motora'] = $this->input->post('grejac_motora');
            $data['daljinska_kontrola'] = $this->input->post('daljinska_kontrola');
            $data['extra_rezervoar'] = $this->input->post('extra_rezervoar');            
            $data['automatsko_pretakanje'] = $this->input->post('automatsko_pretakanje');
            $data['lokacija'] = $this->input->post('lokacija');
            $data['vreme_isporuke'] = $this->input->post('vreme_isporuke');
            $data['dodatni_zahtevi'] = $this->input->post('dodatni_zahtevi');
            $data['firma'] = $this->input->post('firma');
            $data['k_osoba'] = $this->input->post('k_osoba');
            $data['pib'] = $this->input->post('pib');
            $data['adresa'] = $this->input->post('adresa');
            $data['grad'] = $this->input->post('grad');
            $data['telefon'] = $this->input->post('telefon');
            $data['telefon2'] = $this->input->post('telefon2');
            $data['email'] = $this->input->post('email');
            $data['web_site'] = $this->input->post('web_site');
            
            if($this->zahtev_za_ponudu_model->send($data)) {
                $this->session->set_flashdata('message', 'Vaš zahtev je uspešno prosleđen našoj službi prodaje');
                redirect('srb/zahtev_za_ponudu/prodaja');
            }
            else {
                $this->session->set_flashdata('message', 'Vaš zahtev nije poslat');
                redirect('srb/zahtev_za_ponudu/prodaja');
            }
        }
        
        $this->load->view('srb/zahtev_za_ponudu/prodaja_form');
    }
    
    function rental() {
        $this->form_validation->set_rules('trazena_oprema', 'Tražena oprema', 'trim|required');
        $this->form_validation->set_rules('snaga', 'Potrebna snaga', 'trim|required');
        $this->form_validation->set_rules('rezim_rada', 'Režim rada', 'trim|required');
        $this->form_validation->set_rules('konstrukcija', 'Konstrukcija', 'trim|required');
        $this->form_validation->set_rules('start', 'Startovanje', 'trim|required');
        $this->form_validation->set_rules('lokacija', 'Lokacija ugradnje', 'trim');
        $this->form_validation->set_rules('vreme_isporuke', 'Potrebno vreme isporuke', 'trim');
        $this->form_validation->set_rules('period', 'Vreme rentiranja', 'trim|required');
        $this->form_validation->set_rules('dodatni_zahtevi', 'Dodatni zahtevi', 'trim');
        $this->form_validation->set_rules('firma', 'Naziv firme', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('k_osoba', 'Naziv firme', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('pib', 'PIB', 'trim|numeric');
        $this->form_validation->set_rules('adresa', 'Adresa', 'trim');
        $this->form_validation->set_rules('grad', 'Grad', 'trim');
        $this->form_validation->set_rules('telefon', 'Telefon', 'trim|required');
        $this->form_validation->set_rules('telefon2', 'Telefon 2', 'trim');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_emails');
        $this->form_validation->set_rules('web_site', 'Web sajt', 'trim');
        
        if($this->form_validation->run()) {
            $data['ponuda_za'] = 'RENTAL';
            $data['trazena_oprema'] = $this->input->post('trazena_oprema');
            $data['snaga'] = $this->input->post('snaga');
            $data['rezim_rada'] = $this->input->post('trazena_oprema');
            $data['konstrukcija'] = $this->input->post('konstrukcija');
            $data['start'] = $this->input->post('start');
            $data['lokacija'] = $this->input->post('lokacija');
            $data['vreme_isporuke'] = $this->input->post('vreme_isporuke');
            $data['period'] = $this->input->post('period');
            $data['dodatni_zahtevi'] = $this->input->post('dodatni_zahtevi');
            $data['firma'] = $this->input->post('firma');
            $data['k_osoba'] = $this->input->post('k_osoba');
            $data['pib'] = $this->input->post('pib');
            $data['adresa'] = $this->input->post('adresa');
            $data['grad'] = $this->input->post('grad');
            $data['telefon'] = $this->input->post('telefon');
            $data['telefon2'] = $this->input->post('telefon2');
            $data['email'] = $this->input->post('email');
            $data['web_site'] = $this->input->post('web_site');
            
            if($this->zahtev_za_ponudu_model->send($data)) {
                $this->session->set_flashdata('message', 'Vaš zahtev je uspešno prosleđen');
                redirect('srb/zahtev_za_ponudu/rental');
            }
            else {
                $this->session->set_flashdata('message', 'Vaš zahtev nije poslat');
                redirect('srb/zahtev_za_ponudu/rental');
            }
        }
        
        $this->load->view('srb/zahtev_za_ponudu/rental_form');
    }
    
    function servis() {
        $this->form_validation->set_rules('proizvodjac', 'Proizvođač agregata', 'trim|required');
        $this->form_validation->set_rules('tip', 'Tip agregata', 'trim|required');
        $this->form_validation->set_rules('snaga', 'Snaga agregata', 'trim|required');
        $this->form_validation->set_rules('u_kvaru', 'u_kvaru', 'trim');
        $this->form_validation->set_rules('garancija', 'garancija', 'trim');
        $this->form_validation->set_rules('dodatni_zahtevi', 'dodatni_zahtevi', 'trim');
        $this->form_validation->set_rules('firma', 'Naziv firme', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('k_osoba', 'Naziv firme', 'trim|required|min_length[6]');
        $this->form_validation->set_rules('pib', 'PIB', 'trim|numeric');
        $this->form_validation->set_rules('adresa', 'Adresa', 'trim');
        $this->form_validation->set_rules('grad', 'Grad', 'trim');
        $this->form_validation->set_rules('telefon', 'Telefon', 'trim|required');
        $this->form_validation->set_rules('telefon2', 'Telefon 2', 'trim');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|valid_emails');
        $this->form_validation->set_rules('web_site', 'Web sajt', 'trim');
        
        
        if($this->form_validation->run()) {
            $data['ponuda_za'] = 'SERVIS';
            $data['proizvodjac'] = $this->input->post('proizvodjac');
            $data['tip'] = $this->input->post('tip');
            $data['snaga'] = $this->input->post('snaga');
            $data['u_kvaru'] = $this->input->post('u_kvaru');
            $data['garancija'] = $this->input->post('garancija');
            $data['dodatni_zahtevi'] = $this->input->post('dodatni_zahtevi');
            $data['firma'] = $this->input->post('firma');
            $data['k_osoba'] = $this->input->post('k_osoba');
            $data['pib'] = $this->input->post('pib');
            $data['adresa'] = $this->input->post('adresa');
            $data['grad'] = $this->input->post('grad');
            $data['telefon'] = $this->input->post('telefon');
            $data['telefon2'] = $this->input->post('telefon2');
            $data['email'] = $this->input->post('email');
            $data['web_site'] = $this->input->post('web_site');
            
            if($this->zahtev_za_ponudu_model->send($data)) {
                $this->session->set_flashdata('message', 'Vaš zahtev je uspešno prosleđen');
                redirect('srb/zahtev_za_ponudu/servis');
            }
            else {
                $this->session->set_flashdata('message', 'Vaš zahtev nije poslat');
                redirect('srb/zahtev_za_ponudu/servis');
            }            
        }
            
        $this->load->view('srb/zahtev_za_ponudu/servis_form');
    }
}
