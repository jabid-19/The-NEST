<?php
class LogInPage extends MY_Controller{

	public function index()
	{
		if($this->session->userdata('user_id'))
			return redirect ('employee_optionpage/employee_dashboard');
		
		$this->load->helper('form');
		$this->load->view('logIn');
	}

	public function employee_login()
	{
		
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','User Name','trim|required|alpha_numeric');
		$this->form_validation->set_rules('password','Password','required');


		if( $this->form_validation->run() ) {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$this->load->model('logInModel');

			$login_id= $this->logInModel->valid_login($username,$password);

			if ($login_id){

				$this->load->library('session');

				$this->session->set_userdata('user_id',$login_id);
				return redirect('employee_optionpage/employee_dashboard');

					

			}else{
				
					echo "Username Or Password does not match";
			}

		}else{

			$this->load->view('logIn');
		}

	}

	public function employee_logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('logInPage');
	}

} 