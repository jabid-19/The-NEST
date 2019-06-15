<?php

class  Admin_orphanpage extends CI_Controller {
	
	public function orphan_table()
	{
		$this->load->model('orphanModel' ,'omodel');
		$omodel=$this->omodel->getAllOrphan();
		$this->load->view('admin_orphan_list',['omodel'=>$omodel]); 
	}

	public function newOrphanEntry()
	{
		
		$this->load->view('admin_orphan_entry');
	}

	public function save()
	{
		
		$this->load->model('orphanModel','omodel');
		if($this->omodel->saveOrphan())
			$this->load->view('admin_success');
		else
			$this->load->view('save_failure');
	}


	public function edit_orphan($orphan_sid){
		$this->load->model('orphanModel' ,'omodel');
		$data['orphan_data']=$this->omodel->find_orphan($orphan_sid);
		$this->load->view('update_orphanEntry', $data);
	}

	public function update($orphan_sid){

		$this->load->library('form_validation');
		$post= $this->input->post();
		$this->load->model('orphanModel','omodel');
		if($this->omodel->update_orphan($orphan_sid,$post))
			$this->load->view('admin_success');
		else
			$this->load->view('save_failure');
	}
}