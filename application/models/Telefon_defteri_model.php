<?php
class Telefon_defteri_model extends CI_Model {
    
    public function getAll() {
        return $this->db->get('telefon_defteri')->result();
    }
    
    public function insert($data) {
        $this->db->insert('telefon_defteri', $data);
    }
    
}