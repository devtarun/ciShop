<?php 

/**
 * ADMIN MODEL
 */
class Admin_model extends CI_Model
{
	public function loginDB($ae, $ap){
		echo $ae . '/' . $ap;
		$this->db->where('ae', $ae);
		return $this->db->where('apwd', $ap);
		$this->db->limit(1);
		$res = $this->db->get('admin');
		if ($res->num_rows() > 0) {
			echo $res->row();
		} else {
			return false;
		}
	}
}
