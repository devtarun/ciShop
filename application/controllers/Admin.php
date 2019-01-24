<?php 

/**
 * Admin Controller
 */
class Admin extends CI_Controller
{
	
	public function __construct(){
		parent::__construct();

		$config['upload_path'] = './uploads/';

		$this->load->model('Products_model', 'pm');

		$this->load->model('Admin_model', 'am');

		if (isset($this->session->userdata['auth_token'])) {
			$adminData = $this->session->userdata['adminData'];

			// print_r($adminData);die();

			$data['an'] = $adminData['0']->an;
			$data['ae'] = $adminData['0']->ae;
			$data['ap'] = $adminData['0']->ap;
			$data['ar'] = $adminData['0']->ar;

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
		$ap = md5($this->input->post('ap'));
		$this->form_validation->set_rules('ae', 'Username', 'required');
		$this->form_validation->set_rules('ap', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {
			$this->login();
		} else {

			if ($this->am->loginDB($ae, $ap)) {
				$adminData = $this->am->adminData($ae);
				$sessionDate = array(
					'auth_token' => md5($ae.$ap),
					'adminData' => $adminData
				);
				$this->session->set_userdata( $sessionDate );
				redirect('admin');
			} else {
				$this->session->set_flashdata('loginerror', 'Invalid Username/Password');
				$this->login();
			}
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
		
		$this->form_validation->set_rules('pn', 'Product Name', 'required');
		$this->form_validation->set_rules('psd', 'Product Short Description', 'required');
		$this->form_validation->set_rules('pld', 'Product Long Description', 'required');
		$this->form_validation->set_rules('prp', 'Product Regular Price', 'required|numeric|integer');
		$this->form_validation->set_rules('psp', 'Product Sale Price', 'required|numeric|integer');

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
				'isf' => $this->input->post('isf'),
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
	    			'isf' => $this->input->post('isf'),
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
	    			'isf' => $this->input->post('isf'),
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

	public function categories(){

		// $id = $this->uri->segment(3);
		        
  //       if (empty($id)){
  //           show_404();exit;
  //       } else {
  //       	echo 1;exit;
  //       }
		
		$categories = $this->pm->getCat();
		$this->load->view('admin/categories', ['categories' => $categories]);
		$this->load->view('admin/inc/footer');
	}

	public function dbCat(){

	}


}