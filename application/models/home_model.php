<?php 

/**
 * Home Model
 */
class Home_model extends CI_Model
{
	public function signupData($data){
		$this->db->insert('customers', $data);
		return $this->db->insert_id();
	}

	public function signinData($lce, $lcpwd){
		$this->db->where('ce', $lce);
		$this->db->where('cpwd', $lcpwd);
		$res = $this->db->get('customers');
		if ($res->num_rows() > 0) {
			return $res->row();
		} else {
			return false;
		}
	}

	public function getCustDetail($cid){
		$this->db->where('id', $cid);
		$res = $this->db->get('customers');
		return $res->row();
	}

	

}