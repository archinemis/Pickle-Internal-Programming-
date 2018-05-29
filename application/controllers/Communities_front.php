<?php

class Communities_front extends CI_Controller{
    function index(){
        $this->load->view('communities_front');
        $this->load->view('footer');
    }

    function detail(){
        $this->load->view('communities_front_detail');
        $this->load->view('footer');
    }
}