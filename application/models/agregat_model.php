<?php

class Agregat_model extends CI_Model {
    
    function __construct() {
        parent::__construct();
    }
    
    function get($motor) {
        $this->db->select('agregati.id, agregati.gorivo, agregati.tip, agregati.snaga, 
            proizvodjaci_motora.naziv as proizvodjac_motora,
            proizvodjaci_generatora.naziv as proizvodjac_generatora');
        $this->db->join('proizvodjaci_motora', 'agregati.motor_id = proizvodjaci_motora.id');
        $this->db->join('proizvodjaci_generatora', 'agregati.generator_id = proizvodjaci_generatora.id');
        $this->db->where('proizvodjaci_motora.naziv', $motor);
        $qry = $this->db->get("agregati");
        
        if ($qry->num_rows() > 0) {
            return $qry->result();
        }
        else {
            return FALSE;
        }
    }
} 