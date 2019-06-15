<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AdoptionModel extends CI_Model {

        
        public function getAllAdoption(){
                $this->db->select('id,first_name,last_name,date_of_birth,gender,nid_number,contact_number,email_id,address, occupation, orphan_name,orphan_id,date_of_adoption,cause_of_adoption');
                $this->db->from('adoptionentry');
                return $this->db->get()->result_array();
        }
        public function saveAdoption(){
                $table_data=array(
                        
                        'first_name'=>$this->input->post('adopter_first_name'),
                        'last_name'=>$this->input->post('adopter_last_name'),
                        'date_of_birth'=>$this->input->post('adopter_birth_date'),
                        'gender'=>$this->input->post('adopter_gender'),
                        'nid_number'=>$this->input->post('adopter_nid_number'),
                        'contact_number'=>$this->input->post('adopter_contact_number'),
                        'email_id'=>$this->input->post('adopter_email_id'),
                        'address'=>$this->input->post('adopter_address'),
                        'occupation'=>$this->input->post('adopter_occupation'),
                        'orphan_name'=>$this->input->post('orphan_name'),
                        'orphan_id'=>$this->input->post('orphan_id'),
                        'date_of_adoption'=>$this->input->post('adoption_date'),
                        'cause_of_adoption'=>$this->input->post('adoption_coz'),


                        );
                if($this->db->insert('adoptionentry',$table_data))
                        return TRUE;
                else
                        return FALSE;
        }

}