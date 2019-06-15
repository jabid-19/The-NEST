<?php

class E_adoptionpage extends MY_Controller {
	
	public function adoption_table ()
	{
		$this->load->model('adoptionModel');
		$data['adoption_list']=$this->adoptionModel->getAlladoption();
		$this->load->view('e_adoption_list',$data);  
	}  

	public function newAdoptionEntry()
	{
		
		$this->load->view('adoptionEntry');
	}
	public function save()
	{
		
		$this->load->model('adoptionModel');
		if($this->adoptionModel->saveAdoption())
			$this->load->view('e_success');
		else
			$this->load->view('save_failure');
	}

}