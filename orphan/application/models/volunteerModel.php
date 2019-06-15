<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class volunteerModel extends CI_Model {

        
        public function getAllVolunteer(){

                $this->db->select('id,last_name,first_name,gender,phone_number,email');
                $this->db->from('volunteerentry');
                return $this->db->get()->result_array();
        }
        public function saveVolunteer(){

                $table_data=array(
                        
                        'id'=>$this->input->post('volunteer_id'),
                        'first_name'=>$this->input->post('volunteer_first_name'),
                        'last_name'=>$this->input->post('volunteer_last_name'),                      
                        'gender'=>$this->input->post('volunteer_gender'),                       
                        'phone_number'=>$this->input->post('phone_number'),
                        'email'=>$this->input->post('email'),
                
                        );
                if($this->db->insert('volunteerentry',$table_data))
                        return TRUE;
                else
                        return FALSE;
        }

}