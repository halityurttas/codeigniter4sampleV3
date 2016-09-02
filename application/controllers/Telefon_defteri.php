<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Telefon_defteri extends CI_Controller {
    
    public function index() {
        $this->load->helper('url');
        $this->load->model('telefon_defteri_model');
        $data = $this->telefon_defteri_model->getAll();
        $this->load->view("header.php");
        $this->load->view("telefon_defteri/index", array('model' => $data));
        $this->load->view("footer.php");
    }
    
    public function create() {
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->view("header.php");
        $this->load->view("telefon_defteri/create");
        $this->load->view("footer.php");
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
    
    public function edit($id) {
        $this->load->helper("form");
        $this->load->helper("url");
        $this->load->model('telefon_defteri_model');
        $data = array(
            'kayit' => $this->telefon_defteri_model->getDataById($id)[0]
        );
        $this->load->view("header.php");
        $this->load->view("telefon_defteri/edit", $data);
        $this->load->view("footer.php");
    }
    
}