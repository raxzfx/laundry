<?php
class C_mhs extends CI_Controller{

    public function __construct(){
        parent::__construct();

    }
    public function index(){
        $this->load->model('M_mhs');
        $data['mahasiswa']= $this->M_mhs->get_data();

        $this->load->view('v_mhs', $data);
    }
}
?>