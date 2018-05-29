<?php

class Event_back extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('m_event');
    }

    function index(){
        $data['event'] = $this->m_event->get_data()->result();
        $this->load->view('event_back',$data);
    }

    function insert(){
        $nama = $this->session->userdata('nim');
        $config['upload_path'] = './upload/user/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 1024;
		$config['file_name'] = $nama;

		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
		}else{
			$data = array('upload_data' => $this->upload->data());
		}

        $nm_event = $this->input->post('nm_event');
        $deskripsi = $this->input->post('deskripsi');
        $tgl_event = $this->input->post('tgl_event');
        $waktu_event = $this->input->post('waktu_event');
        $kategori = $this->input->post('kategori_event');
        $no_hp = $this->input->post('no_hp');
        $nim = $this->session->userdata('nim');
        $status = 2;
        $foto = $this->upload->data('file_name');


        $data = array(
            'nama_event' => $nm_event,
            'deskripsi' => $deskripsi,
            'id_kategori_event' => $kategori,
            'tgl_evt' => $tgl_event,
            'waktu_event' => $waktu_event,
            'nim' => $nim,
            'status' => $status,
            'foto' => $foto,
            'no_hp' => $no_hp
        );

        $this->m_event->tambah_event('event',$data);
        $flash = $this->session->set_flashdata('item','item-value');
        redirect(base_url('index.php/event_back'));
    }
}