<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class EmployeeModel extends CI_Model {

        
        public function getEmployee(){
                $this->db->select('employee_id,first_name,last_name,date_of_birth,gender,nid_number,religion,blood_group,email_id,job_title,address,contact_number,father_name,mother_name,salary,hire_date,username,password,special_case');
                $this->db->from('employee');
                return $this->db->get()->result_array();
        }
         public function em_getEmployee(){
                $this->db->select('employee_id,first_name,last_name,gender,religion,blood_group,job_title,email_id,address');
                $this->db->from('employee');
                return $this->db->get()->result_array();
        }
        public function saveEmployee(){
                $table_data=array(
                        
                        'first_name'=>$this->input->post('employee_first_name'),
                        'last_name'=>$this->input->post('employee_last_name'),
                        'date_of_birth'=>$this->input->post('employee_birth_date'),
                        'gender'=>$this->input->post('employee_gender'),
                        'nid_number'=>$this->input->post('employee_nid_number'),
                        'religion'=>$this->input->post('employee_religion'),
                        'blood_group'=>$this->input->post('employee_blood_group'),
                        'address'=>$this->input->post('employee_address'),
                        'contact_number'=>$this->input->post('employee_contact_number'),
                        'email_id'=>$this->input->post('employee_email_id'),
                        'father_name'=>$this->input->post('employee_father_name'),
                        'mother_name'=>$this->input->post('employee_mother_name'),
                        'salary'=>$this->input->post('employee_salary'),
                        'hire_date'=>$this->input->post('employee_hire_date'),
                        'job_title'=>$this->input->post('employee_job_title'),
                        'username'=>$this->input->post('username'),
                        'password'=>$this->input->post('password'),
                        
                        'special_case'=>$this->input->post('specialEntry'),

                        );
                if($this->db->insert('employee',$table_data))
                        return TRUE;
                else
                        return FALSE;
        }

}