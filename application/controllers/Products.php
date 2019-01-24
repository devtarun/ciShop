<?php 

/**
 * Products COntroller
 */
class Products extends CI_Controller
{
	public function __construct(){
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
		$id = $this->uri->segment(2);
		         
	    if (empty($id)){
	        redirect('home','refresh');
	    }
	}

	public function getByCat(){
		$cn = $this->uri->segment(2);
		         
	    if (empty($cn)){
	        show_404();
	    }

	    switch ($cn) {
	    	case 'Men':
	    		$products = $this->pm->getForMen();
	    		$this->load->view('products', ['products' => $products]);
				$this->load->view('inc/footer');
	    		break;

	    	case 'Women':
	    		$products = $this->pm->getForWomen();
	    		$this->load->view('products', ['products' => $products]);
				$this->load->view('inc/footer');
	    		break;

	    	case 'Kids':
	    		$products = $this->pm->getForKids();
	    		$this->load->view('products', ['products' => $products]);
				$this->load->view('inc/footer');
	    		break;

	    	case 'Accessories':
	    		$products = $this->pm->getForKids();
	    		$this->load->view('products', ['products' => $products]);
				$this->load->view('inc/footer');
	    		break;
	    	
	    	default:
	    		redirect('home','refresh');
	    		break;
	    }

	}

	public function details(){
		
		$id = $this->uri->segment(2);
		         
	    if (empty($id)){
	        show_404();
	    }
	    
	   	$productDetail = $this->pm->getProductById($id);

	   	// print_r($productDetail);

	   	if (isset($this->session->userdata['token'])) {
	   		$data['cid'] = $this->session->userdata['cid'];
	   	} else {
	   		$data['cid'] = 0;
	   	}
	   	$data['id']   = $productDetail->id;
	   	$data['pn']   = $productDetail->pn;
	   	$data['psd']  = $productDetail->psd;
	   	$data['pld']  = $productDetail->pld;
	   	$data['pimg'] = $productDetail->pimg;
	   	$data['pcat'] = $productDetail->pcat;
	   	$data['prp']  = $productDetail->prp;
	   	$data['psp']  = $productDetail->psp;
	   	$data['psq']  = $productDetail->psq;

	    $this->load->view('product', $data);
	    $this->load->view('inc/footer');
	}

	public function addtocart(){

		$pid = $this->input->post('pid');
		$cid = $this->input->post('cid');
		$op = $this->input->post('op');
		$oq = $this->input->post('oq');

		if ($this->pm->addOrder($pid, $cid, $oq, $op)) {
			redirect('cart');
		}
		
	}

	public function removeOrder($oid){
		$this->pm->removeOrder($oid);
		redirect('home','refresh');
	}

	public function search(){
		$st = $this->input->post('st');
		$result = $this->pm->searchProd($st);
		$this->load->view('search', ['prod_list' => $result]);
		$this->load->view('inc/footer');
	}

}