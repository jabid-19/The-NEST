<?php

class LogInModel extends CI_Model{

	public function valid_login($username,$password)
	{
		$log_result = $this->db->where(['username'=>$username,'password'=>$password])
							->get('employee');

		if ($log_result->num_rows() ){
			return $log_result->row()->employee_id;
		}else {
			return FALSE;
		}
	}


	public function admin_valid_login($username,$password)
	{
		$log_result = $this->db->where(['username'=>$username,'password'=>$password])
							->get('admin');

		if ($log_result->num_rows() ){
			return $log_result->row()->id;
		}else {
			return FALSE;
		}
	}
}