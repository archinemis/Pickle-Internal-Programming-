<?php

class M_komunitas extends CI_Model{
    function tambah_komunitas($table,$data){
        $this->db->insert($table,$data);
    }

    function tampil_data(){
        return $this->db->get('komunitas');
    }
}