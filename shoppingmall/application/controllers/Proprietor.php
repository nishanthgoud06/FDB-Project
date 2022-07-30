<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proprietor extends CI_Controller {

	// We login from here
	public function manage(){
		$this->load->model('ProprietorModel');
		$data['malls'] = $this->ProprietorModel->getMallDetails();
		$data['managers'] = $this->ProprietorModel->getManagerDetails();
		$this->load->view('Proprietor/index.php',$data);
	}

	// login 
	public function proprietorLogin(){
		$proprietor_id = $this->input->post('proprietor_id');
		$proprietor_pin = $this->input->post('proprietor_pin');
		$this->load->model('ProprietorModel');
		$row = $this->ProprietorModel->Login($proprietor_id,$proprietor_pin);
		if($row == null){
			$this->session->set_flashdata('message','LOGIN FAILED');
			redirect('Proprietor','refresh');
		}else{
			$this->session->set_userdata('Prop_Log',$row->proprietorId);
			redirect('Proprietor/manage','refresh');
		}
	}

	// We manage mall here like add or delete
    public function index(){
		$this->load->view('Proprietor/Login.php');
	}

	public function addManager(){
		$managerId = $this->input->post('managerId');
		$managerName = $this->input->post('managerName');
		$managerMobile = $this->input->post('managerMobile');
		$managerPassword = $this->input->post('managerPassword');
		$managerSalary = $this->input->post('managerSalary');
		var_dump($managerId." ".$managerName." ".$managerMobile." ".$managerPassword." ".$managerSalary);
		$this->load->model('ProprietorModel');
		$this->ProprietorModel->addManager($managerId,$managerName,$managerMobile,$managerPassword,$managerSalary);
		// redirect('Proprietor/manage','refresh');
	}

	public function addShoppingMallDetails(){
		$shoppingMallName = $this->input->post('shoppingMallName');
		$shoppingMallAddress = $this->input->post('shoppingMallAddress');
		$shoppingMallMobile = $this->input->post('shoppingMallMobile');
		$this->load->model('ProprietorModel');
		$this->ProprietorModel->addShoppingMall($shoppingMallName,$shoppingMallAddress,$shoppingMallMobile);
		redirect('Proprietor/manage','refresh');
	}

	public function Logout(){
		session_destroy();
		redirect('Proprietor','refresh');
	}

}



