<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telefon_defteri extends CI_Controller {
    
    public function index() {
        $this->load->model('telefon_defteri_model');
        $data = $this->telefon_defteri_model->getAll();
        var_dump($data);
    }
    
    public function create() {
        $this->load->helper("form");
        $this->load->view("telefon_defteri/create");
    }
    
    public function create_post() {
        $this->load->helper('url');
        $this->load->model('telefon_defteri_model');
        $data = array(
            'adi_soyadi' => $this->input->post('adi_soyadi'),
            'telefon' => $this->input->post('telefon')
        );
        $this->telefon_defteri_model->insert($data);
        redirect('telefon_defteri');
    }
    
}