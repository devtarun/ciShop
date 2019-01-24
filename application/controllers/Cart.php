<?php 

/**
 * CART CONTROLLER
 */
class Cart extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Products_model', 'pm');
		$this->load->model('Home_model', 'Home_model');

		if(isset($this->session->userdata['token'])){
			$cid = $this->session->userdata['cid'];
			$orderForAcc = $this->pm->getOrdersForCust($cid);
		}else{
			$cid = 0;
			$orderForAcc = "";
		}

		$categories = $this->pm->getCat();
		$this->load->view('inc/header', [
			'categories' => $categories,
			'orderForAcc' 	=> $orderForAcc
		]);
	}

	public function index(){

		if (isset($this->session->userdata['token'])) {
			$this->load->view('cart');
			$this->load->view('inc/footer');
		} else {
			redirect('home/account');
		}

	}

	public function applycoupon(){
		$cc = $this->input->post('cc');
		$this->form_validation->set_rules('cc', 'Coupon Code', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			$disc = $this->pm->checkCoupon($cc);

			if ($disc) {

				$data['cc']   = $disc->cc;
				$data['cp']   = $disc->cp;
				$data['ct']  = $disc->ct;

				// print_r($data);

				$this->session->set_flashdata('ccerror', 'Coupon applied!');
				$this->load->view('cart', $data);
				// echo 'success';
			} else {
				$this->session->set_flashdata('ccerror', 'Invalid Coupon Code!');
				redirect('cart','refresh');
			}

		}
	}

	public function loadCheckout(){
		$this->load->view('checkout');
		$this->load->view('inc/footer');
	}

	public function checkout(){
		if (isset($this->session->userdata['cid'])) {
			$cid = $this->session->userdata['cid'];

			if ($this->pm->checkout($cid)) {
				redirect('cart/loadCheckout','refresh');
			}

		} else {
			$this->load->view('home/login');
		}
	}


}