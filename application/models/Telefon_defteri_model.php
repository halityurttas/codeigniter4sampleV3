<?php
class Telefon_defteri_model extends CI_Model {
    
    public function getAll() {
        return $this->db->get('telefon_defteri')->result();
    }
    
    public function insert($data) {
        $this->db->insert('telefon_defteri', $data);
    }
    
    public function getDataById($id) {
        return $this->db->get_where('telefon_defteri', ['id' => $id])->result();
    }
    
    public function update($data, $where) {
        $this->db->update('telefon_defteri', $data, $where);
    }
    
    public function delete($where) {
        $this->db->delete('telefon_defteri', $where);
    }
    
}