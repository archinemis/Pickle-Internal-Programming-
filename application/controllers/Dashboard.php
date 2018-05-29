<?php

class Dashboard extends CI_Controller {
    function __construct(){
        parent::__construct();
        if($this->session->userdata('status') != "login"){
            redirect(base_url('index.php/login'));
        }
        $this->load->model('m_dashboard');
    }

    function index(){
        $nim = $this->session->userdata('nim');
		$data['mahasiswa'] = $this->m_dashboard->data_user($nim)->result();
		$this->load->view('dashboard',$data);
    }
}