<?php

/**
 * This function will save user record in database
 */
class Auth_model extends CI_Model{
	
	public function create($formArray){
		$this->db->insert('form',$formArray);
	}
}




?>