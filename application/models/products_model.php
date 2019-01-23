<?php 

/**
 * Products Model
 */
class Products_model extends CI_Model
{
	public function __construct(){
		parent::__construct();
	}

	public function getAllProducts(){
		$res = $this->db->get('products');
		return $res->result();
	}

	public function addProduct($data){

		$this->db->insert('products', $data);

	}

	public function updateProduct($pid, $data){
		$this->db->where('id', $id);
		$this->db->update('products', $data);
	}

	public function getOrders(){

		$this->db->select('*');    
		$this->db->from('orders');
		$this->db->join('products', 'orders.pid = products.id');
		$this->db->join('customers', 'orders.cid = customers.id');
		$res = $this->db->get();
		return $res->result();

	}

	public function getProductById($id){
		$this->db->where('id', $id);
		$res = $this->db->get('products');
		return $res->row();
	}

	public function getFeaturedProd(){
		$this->db->where('isf', '1');
		$res = $this->db->get('products');
		return $res->result();
	}

	public function getLatestProd(){
		$this->db->where('pcd BETWEEN DATE_SUB(NOW(), INTERVAL 30 DAY) AND NOW()');
		$res = $this->db->get('products');
		return $res->result();
	}

	public function getForMen() {
		$this->db->where('pcat', '1');
		$res = $this->db->get('products');
		return $res->result();

	}
	public function getForWomen() {
		$this->db->where('pcat', '2');
		$res = $this->db->get('products');
		return $res->result();

	}
	public function getForKids() {
		$this->db->where('pcat', '3');
		$res = $this->db->get('products');
		return $res->result();
	}

	public function getOrdersForCust($id){
		if ($id !== 0) {
			$this->db->where('orders.cid', $id);
			$this->db->where('orders.os', 'incart');
			$this->db->select('orders.*');    
			$this->db->select('customers.id AS c_id');    
			$this->db->select('products.id AS p_id');    
			$this->db->select('products.pn');    
			$this->db->select('products.pimg');    
			$this->db->select('products.psp');    
			$this->db->from('orders');
			$this->db->join('customers', 'customers.id = orders.cid', 'inner');
			$this->db->join('products', 'products.id = orders.pid', 'inner');
			
			$res = $this->db->get();
			return $res->result();
		}
	}

	public function addOrder($pid, $cid, $oq, $op){
		$data = array(
		        'pid' => $pid,
		        'cid' => $cid,
		        'oq' => $oq,
		        'op' => $oq*$op
		);
		if ($this->db->insert('orders', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function removeOrder($id){
		$this->db->where('id', $id);
		$this->db->delete('orders');
	}

	public function checkCoupon($cc){
		$this->db->where('cc', $cc);
		$res = $this->db->get('coupons');
		return $res->row();
	}

	public function checkout($cid){
		$this->db->where('cid', $cid);
		$data = array(
			'os' => 'pending'
		);
		if ($this->db->update('orders', $data)) {
			return true;
		} else {
			return false;
		}
	}

	public function searchProd($st){
		$this->db->like('pn', $st);
		$res = $this->db->get('products');
		return $res->result();
	}

}