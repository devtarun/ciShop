<?php 

/**
 * Admin Controller
 */
class Admin extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();

		$config['upload_path'] = './uploads/';

		$this->load->model('products_model', 'pm');

		$this->load->model('admin_model', 'am');

		if (isset($this->session->userdata['auth_token'])) {
			$adminData = $this->session->userdata['adminData'];

			$data['an'] = $adminData->an;
			$data['ae'] = $adminData->ae;
			$data['ap'] = $adminData->ap;
			$data['ar'] = $adminData->ar;

			$this->load->view('admin/inc/header', $data);
		}

	}

	public function index() {
		if (isset($this->session->userdata['auth_token'])) {
			$this->load->view('admin/dashboard');
			$this->load->view('admin/inc/footer');
		} else {
			redirect('admin/login','refresh');
		}
	}

	public function login(){
		// $this->load->view('admin/inc/header');
		$this->load->view('admin/login');
		// $this->load->view('admin/inc/footer');
	}

	public function logout(){
		$this->session->unset_userdata('auth_token');
		redirect('admin','refresh');
	}

	public function login_auth(){
		$ae = $this->input->post('ae');
		$ap = $this->input->post('ap');
		$this->form_validation->set_rules('ae', 'Username', 'required');
		$this->form_validation->set_rules('ap', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('adminerror', 'Invalid Email/Password');
			$this->login();
		} else {

			$adminData = $this->am->loginDB($ae, $ap);

			$sessionDate = array(
				'auth_token' => md5($ae.$ap),
				'adminData' => $adminData
			);
			
			$this->session->set_userdata( $sessionDate );
			redirect('admin');
		}
	}


	public function getproducts(){

		$products = $this->pm->getAllProducts();
		$this->load->view('admin/product-all', [
			'products' => $products
		]);
		$this->load->view('admin/inc/footer');
	}

	public function addproducts(){
		$this->load->view('admin/product-add');
		$this->load->view('admin/inc/footer');

	}

	public function addproduct(){

		$pn = $this->input->post('pn');
		$psd = $this->input->post('psd');
		$pld = $this->input->post('pld');
		$prp = $this->input->post('prp');
		$psp = $this->input->post('psp');
		$pcat = $this->input->post('pcat');
		
		$this->form_validation->set_rules('pn', 'Product Name', 'required');
		$this->form_validation->set_rules('psd', 'Product Short Description', 'required');
		$this->form_validation->set_rules('pld', 'Product Long Description', 'required');
		$this->form_validation->set_rules('prp', 'Product Regular Price', 'required|numeric|integer');
		$this->form_validation->set_rules('psp', 'Product Sale Price', 'required|numeric|integer');
		$this->form_validation->set_rules('pcat', 'Product Category', 'required');

		if ($this->form_validation->run() === FALSE){
			$this->load->view('admin/product-add');
        } else {
			$url = $this->do_upload();

			
			$data = array(
				'pn' => $this->input->post('pn'),
				'psd' => $this->input->post('psd'),
				'pld' => $this->input->post('pld'),
				'prp' => $this->input->post('prp'),
				'psp' => $this->input->post('psp'),
				'pcat' => $this->input->post('pcat'),
				'pimg' => $url
			);

	        $this->pm->addProduct($data);
	        redirect('admin/getproducts');
        }

	}

	private function do_upload() {
		$type = explode('.', $_FILES['pimg']['name']);
		$type = $type[count($type)-1];
		$url = "uploads/" . rand(10000,99999).'.'.$type;
		if (in_array($type, array("jpg", "jpeg", "gif", "png"))) {
			if (is_uploaded_file($_FILES['pimg']['tmp_name'])) {
				if (move_uploaded_file($_FILES['pimg']['tmp_name'], $url)) {
					return $url;
				}
			}
		}
	}

	public function manageOrders(){
		$orders = $this->pm->getOrders();
		$this->load->view('admin/orders', [
			'orders' => $orders
		]);
		$this->load->view('admin/inc/footer');
	}

	public function editproduct(){
		$id = $this->uri->segment(3);
		        
        if (empty($id)){
            show_404();
        }
        
       $data['prod_detail'] = $this->pm->getProductById($id);

       $this->form_validation->set_rules('pn', 'Product Name', 'required');
       $this->form_validation->set_rules('psd', 'Product Short Description', 'required');
       $this->form_validation->set_rules('pld', 'Product Long Description', 'required');
       $this->form_validation->set_rules('prp', 'Product Regular Price', 'required|numeric|integer');
       $this->form_validation->set_rules('psp', 'Product Sale Price', 'required|numeric|integer');
       $this->form_validation->set_rules('pcat', 'Product Category', 'required');

       if (!empty($prod_detail->pimg)) {
       		$this->form_validation->set_rules('pimg', 'Product Image', 'required');
       }

       if ($this->form_validation->run() === FALSE) {

           $this->load->view('admin/product-edit', $data);
           $this->load->view('admin/inc/footer');

       } else {
       		if ($_FILES['pimg']['name'] == "") {
	    		$data = array(
	    			'pn' => $this->input->post('pn'),
	    			'psd' => $this->input->post('psd'),
	    			'pld' => $this->input->post('pld'),
	    			'prp' => $this->input->post('prp'),
	    			'psp' => $this->input->post('psp'),
	    			'pcat' => $this->input->post('pcat'),
	    			'pimg' => $this->input->post('pimge')
	    		);
	    	} else {
	    		$url = $this->do_upload();
	    		$data = array(
	    			'pn' => $this->input->post('pn'),
	    			'psd' => $this->input->post('psd'),
	    			'pld' => $this->input->post('pld'),
	    			'prp' => $this->input->post('prp'),
	    			'psp' => $this->input->post('psp'),
	    			'pcat' => $this->input->post('pcat'),
	    			'pimg' => $url
	    		);
	    	}

	    	$this->pm->updateProduct($id, $data);
           	redirect('admin/getproducts');       		
       }
       
	}

	public function deleteProd($pid) {
		$this->pm->deleteProd($pid);
		redirect('admin/getproducts','refresh');
	}

}