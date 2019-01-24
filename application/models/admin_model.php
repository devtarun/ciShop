<?php 

/**
 * ADMIN MODEL
 */
class Admin_model extends CI_Model
{
	public function loginDB($ae, $ap){
		$this->db->where('ae', $ae);
		$this->db->where('apwd', $ap);
		$res = $this->db->get('admin');
		if ($res->num_rows() > 0) {
			return true;
		} else {
			return false;
		}
	}

	public function adminData($ae){
		$this->db->where('ae', $ae);
		$res = $this->db->get('admin');
		return $res->result();
		
	}

}