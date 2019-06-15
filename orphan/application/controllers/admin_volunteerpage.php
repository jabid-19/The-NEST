<?php

class  Admin_volunteerpage extends CI_Controller {
	
	public function volunteer_table()
	{
		$this->load->model('volunteerModel');
		$data['volunteer_list']=$this->volunteerModel->getAllvolunteer();
		$this->load->view('admin_volunteer_list',$data); 
	}

	

	public function save()
	{
		
		$this->load->model('volunteerModel');
		if($this->volunteerModel->saveVolunteer())
			$this->load->view('home');
		else
			$this->load->view('save_failure');
	}


}