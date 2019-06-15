<?php

class Employee_optionpage extends MY_Controller {
	
	public function employee_dashboard()
	{
		$this->load->view('employee_option'); 
	}

	public function __constructor()
	{
		parent::__constructor();
		if(!$this->session->userdata('user_id'))
			return redirect('logInPage/employee_login');
	}	  
}