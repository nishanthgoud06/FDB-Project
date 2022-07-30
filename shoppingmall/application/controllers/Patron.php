<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patron extends CI_Controller {

	public function index(){
		$this->load->view('Patron/index.php');
	}

    public function Login(){
        $patronEmail = $this->input->post('patronEmail');
        $patronPassword = $this->input->post('patronPassword');
        $this->load->model('PatronModel');
        $row = $this->PatronModel->Login($patronEmail,$patronPassword);
		if($row == null){
			$this->session->set_flashdata('message','LOGIN FAILED');
			redirect('Patron','refresh');
		}else{
			$this->session->set_userdata('Patron_Log',$row->patronUserId);
			redirect('Patron/malls','refresh');
		}
		// $this->load->view('Manager/mallsList.php');
    }

    public function signUp(){
        $this->load->view('Patron/signUp.php');
    }

    public function signUpPatron(){
        $patronFirstName = $this->input->post('patronFirstName');
        $patronUserId = $this->input->post('patronUserId');
        $patronPassword = $this->input->post('patronPassword');
        $patronContact = $this->input->post('patronContact');
        $patronLastName = $this->input->post('patronLastName');
        $this->load->model('PatronModel');
        $this->PatronModel->signUp($patronFirstName,$patronUserId,$patronPassword,$patronContact,$patronLastName);
        redirect('Patron/Login','refresh');
    }

	public function malls(){
        $this->load->model('PatronModel');
        $data['malls'] = $this->PatronModel->getMallsList();
		$this->load->view('Patron/mallsList.php',$data);
	}

    public function mall(){
        $data['mallId'] = $_GET['mallId'];
		$this->load->view('Patron/malldetails.php',$data);
    }

    public function events(){
        $data['mallId'] = $_GET['mallId'];
        $this->load->model('PatronModel');
        $data['events'] = $this->PatronModel->getEventsList($data['mallId']);
		$this->load->view('Patron/events.php',$data);
    }

    public function outletDetails(){}

    public function outlets(){
        $this->load->model('PatronModel');
        $mallId = $_GET['mallId'];
        $data['outlets'] = $this->PatronModel->getOutletList($mallId);
        $this->load->view('Patron/outlets.php',$data);
    }

    public function outletProducts($outletId){
		$this->load->model('ManagerModel');
		$data['products'] = $this->ManagerModel->getProducts($outletId);
		$data['outletId'] = $outletId;
		$this->load->view('Patron/outletProducts.php',$data);
    }

    public function buy($productId){
        $data['productId'] = $productId;
        $this->load->view('Patron/buy.php',$data);
    }

    public function bought(){
        redirect('Patron/malls','refresh');
    }

    public function logout(){
        redirect('Patron','refresh');
    }

}