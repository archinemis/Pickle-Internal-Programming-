<?php

class M_event extends CI_Model{
    function get_data(){
        return $this->db->get('event');
    }

    function tambah_event($table,$data){
        $this->db->insert($table,$data);
    }
}