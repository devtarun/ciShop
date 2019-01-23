<?php 

/**
 * ADMIN MODEL
 */
class Admin_model extends CI_Model
{
	public function loginDB($ae, $ap){
		$this->db->where('ae', $ae);
		$this->db->where('apwd', md5($ap));
		$res = $this->db->get('admin');
		if ($res->num_rows() > 0) {
			return $res->row();
		} else {
			return false;
		}
	}
}