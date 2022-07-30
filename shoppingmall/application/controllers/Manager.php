<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manager extends CI_Controller {

	public function index(){
		$this->load->view('Manager/index.php');
	}

	public function Login(){
		$manager_id = $this->input->post('manager_id');
		$manager_pin = $this->input->post('manager_pin');
		$this->load->model('ManagerModel');
		$row = $this->ManagerModel->Login($manager_id,$manager_pin);
		if($row == null){
			$this->session->set_flashdata('message','LOGIN FAILED');
			redirect('Manager','refresh');
		}else{
			$this->session->set_userdata('Manager_Log',$row->managerId);
			redirect('Manager/manage','refresh');
		}
		$this->load->view('Manager/index.php');
	}

	public function getMallList(){
		$this->load->model('ManagerModel');
		return $this->ManagerModel->getMallsList();  
	}

	public function manage(){
		$this->load->view('Manager/home.php');
	}

	public function Outlet(){
		$this->load->model('ManagerModel');
		$managerId = $this->session->userdata('Manager_Log');
		$mallId = $this->ManagerModel->getManagerMall($managerId);
		$mallId = $mallId->mallId;
		$data['mallId'] = $mallId;
		$data['outlets'] = $this->ManagerModel->getOutletList($mallId);
		$this->load->view('Manager/outlet.php',$data);
	}

	public function addOutlet(){
		$outletName = $this->input->post('outlet_name');
		$mallId = $this->input->post('outlet_mall');
		$this->load->model('ManagerModel');
		$this->ManagerModel->addOutlet($outletName,$mallId);
	}

	public function outletDetails($outletId){
		$this->load->model('ManagerModel');
		$data['products'] = $this->ManagerModel->getProducts($outletId);
		$data['outletId'] = $outletId;
		$this->load->view('Manager/outletProducts.php',$data);
	}

	public function addProductsToOutlet(){
		$productName = $this->input->post('productName');
		$productCost = $this->input->post('productCost');
		$productQuantity = $this->input->post('productQuantity');
		$outletId = $this->input->post('outletId');
		$outletProductDetails = $this->input->post('outletProductDetails');
		$this->load->model('ManagerModel');
		$this->ManagerModel->addProductToOutlet($productName,$productCost,$productQuantity,$outletId,$outletProductDetails);
		redirect("Manager/outletDetails/$outletId",'refresh');
	}

	public function Food(){
		$data['malls']  = $this->getMallList();
		$managerId = $this->session->userdata('Manager_Log');
		$mallId = $this->ManagerModel->getManagerMall($managerId);
		$mallId = $mallId->mallId;
		$data['mallId'] = $mallId;
		$data['foodCourts'] = $this->ManagerModel->getFoodCourtsByMall($mallId);
		$this->load->view('Manager/foodCourt.php',$data);
	}

	public function addFoodCourt()
	{
		$foodCourtName = $this->input->post('foodCourtName');
		$foodCourtContact = $this->input->post('foodCourtContact');
		$foodCourtMall = $this->input->post('foodCourtMall');
		$this->load->model('ManagerModel');
		$this->ManagerModel->addFoodCourt($foodCourtName,$foodCourtContact,$foodCourtMall);
		redirect('Manager/foodCourt','refresh');
	}

	public function Events(){
		$data['malls']  = $this->getMallList();
		$this->load->model('ManagerModel');
		$data['events'] = $this->ManagerModel->getAllEvents();
		$this->load->view('Manager/Events.php',$data);
	}

	public function addEvents(){
		$mallEventName = $this->input->post('mallEventName');
		$mallEventDate = $this->input->post('mallEventDate');
		$Location = $this->input->post('Location');
		$eventTime = $this->input->post('eventTime');
		$this->load->model('ManagerModel');
		$this->ManagerModel->addEvent($mallEventName,$mallEventDate." ".$eventTime.":00",$Location);
		redirect('Manager/Events','refresh');
	}

	public function Logout(){
		session_destroy();
		redirect('Manager','refresh');
	}

	// public function Transactions(){
	// 	$this->load->view('');
	// }
	// public function Patron(){
	// 	$this->load->view('');
	// }
}



