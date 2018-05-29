<?php

class M_dashboard extends CI_Model{
	
	function data_user($nim){
		$this->db->select('*')
				 ->where('nim = ',$nim);
		return $result = $this->db->get('mahasiswa');
	}

}