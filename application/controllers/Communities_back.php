<?php

class Communities_back extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('m_komunitas');
    }

    function index(){
        $data['komunitas'] = $this->m_komunitas->tampil_data()->result();
        $this->load->view('communities_back',$data);
    }

    function insert(){
        $nama = date("dmy")."".time();

        $config['upload_path'] = './upload/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 1024;
		$config['file_name'] = $nama;

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
		}

        $nama_komunitas = $this->input->post('nm_komunitas');
        $deskripsi = $this->input->post('deskripsi');
        $id_kategori = $this->input->post('kat');
        $nim = $this->session->userdata('nim');
        $status = 2;
        $foto = $this->upload->data('file_name');
        $tgl = date("d-M-Y");
        $no_telp = $this->input->post('no_telp');
        $id_line = $this->input->post('id_line');

        $data = array(
            'nama_komunitas' => $nama_komunitas,
            'deskripsi' => $deskripsi,
            'id_kategori_komunitas' => $id_kategori,
            'nim' => $nim,
            'status' => $status,
            'foto' => $foto,
            'tgl_dibentuk' => $tgl,
            'line_komunitas' => $id_line,
            'no_telp' => $no_telp
        );
        $this->m_komunitas->tambah_komunitas('komunitas',$data);
        $flash = $this->session->set_flashdata('item','item-value');
        redirect(base_url('index.php/communities_back'));
    }
}