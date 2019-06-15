<?php

class Admin_adoptionpage extends MY_Controller {
	
	public function adoption_table ()
	{
		$this->load->model('adoptionModel');
		$data['adoption_list']=$this->adoptionModel->getAlladoption();
		$this->load->view('admin_adoption_list',$data);  
	}  

	public function newAdoptionEntry()
	{
		
		$this->load->view('admin_adoption_entry');
	}
	public function save()
	{
		
		$this->load->model('adoptionModel');
		if($this->adoptionModel->saveAdoption())
			$this->load->view('admin_success');
		else
			$this->load->view('save_failure');
	}

}