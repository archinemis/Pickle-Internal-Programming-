<?php

class Event_front extends CI_Controller{
    function index(){
        $this->load->view('event_front');
        $this->load->view('footer');
    }

    function detail(){
        $this->load->view('event_front_detail');
        $this->load->view('footer');
    }
}