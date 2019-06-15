<?php

class Admin_optionpage extends MY_Controller {
	
	public function admin_dashboard()
	{
		$this->load->view('admin_option'); 
	}

	public function __constructor()
	{
		parent::__constructor();
		if(!$this->session->userdata('user_id'))
			return redirect('admin_loginpage/admin_login');
	}	  
}