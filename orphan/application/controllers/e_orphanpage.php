<?php

class  E_orphanpage extends CI_Controller {
	
	public function orphan_table()
	{
		$this->load->model('e_orphanModel');
		$data['orphan_list']=$this->e_orphanModel->getAllOrphan();
		$this->load->view('e_orphan_list',$data); 
	}

	public function newOrphanEntry()
	{
		
		$this->load->view('orphanEntry');
	}

	public function save()
	{
		
		$this->load->model('e_orphanModel');
		if($this->orphanModel->saveOrphan())
			$this->load->view('e_success');
		else
			$this->load->view('save_failure');
	}


}