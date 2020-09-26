<?php
	class Admin_model extends CI_Model {

    public function __construct(){
        $this->load->database();
    }

	public function login($email, $password){
		// Validate
		$this->db->where('email', $email);
		$query = $this->db->get('admin');

		$result = $query->row_array();

		if(!empty($result) && password_verify($password, $result['password'])){
			return $query->row_array();
		} else {
			return false;
		}
	}
}