<?php

class Admin_employeepage extends MY_Controller {
	
	public function employee_table()
	{	$this->load->model('employeeModel');
	$data['employee_list']=$this->employeeModel->getEmployee();
		$this->load->view('admin_employee_list',$data); 
	}  

	public function newEmployeeEntry()
	{
		$this->load->view('employeeEntry');
	}

	public function save()
	{
		
		$this->load->model('employeeModel');
		if($this->employeeModel->saveEmployee())
			$this->load->view('admin_success');
		else
			$this->load->view('save_failure');
	}
}