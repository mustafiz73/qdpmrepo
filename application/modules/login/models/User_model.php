<?php

class User_model extends CI_Model {

	function __construct() {

		parent::__construct();

		$this->load->database();

	}
	
	public function Emailcheck($email) {
		$query = $this->db->get_where('Users', array('email' => $email));
		return $query->row_array();

	}

	public function userinsert($data){
		return $this->db->insert('Users',$data);
		
	}
}