<?php

class E_employeepage extends MY_Controller {
	
	public function employee_table()
	{	$this->load->model('employeeModel');
	$data['employee_list']=$this->employeeModel->em_getEmployee();
		$this->load->view('e_employee_list',$data); 
	}  

	public function newEmployeeEntry()
	{
		$this->load->view('employeeEntry');
	}

	public function save()
	{
		
		$this->load->model('employeeModel');
		if($this->employeeModel->saveEmployee())
			$this->load->view('save_successful');
		else
			$this->load->view('save_failure');
	}
}