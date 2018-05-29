<?php

class Login extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('m_login');
    }

    function index(){
		$nim = $this->input->post('nim');
		$pin = $this->input->post('pin');

		$where = array(
			'nim' => $nim,
			'pin' => $pin
		);
		$check = $this->m_login->cek_login("user",$where)->num_rows();
		if ($check > 0) {
			$data_session = array(
				'nim' => $nim,
				'status' => "login"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url("index.php/dashboard"));
		}else{
			echo "ada kesalahan";
		}
	}

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url('index.php/home'));
    }
}