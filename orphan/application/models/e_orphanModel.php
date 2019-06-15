<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class E_orphanModel extends CI_Model {

        
        public function getAllOrphan(){
                $this->db->select('id,last_name,first_name,date_of_birth,gender,religion,blood_group,special_case,father_name,mother_name,guardian_name,contact_number,address, relation_with_orphan, date_of_entry');
                $this->db->from('orphanentry');
                return $this->db->get()->result_array();
        }
        public function saveOrphan(){
                $table_data=array(
                        
                        'id'=>$this->input->post('orphan_id'),
                        'first_name'=>$this->input->post('orphan_first_name'),
                        'last_name'=>$this->input->post('orphan_last_name'),
                        'date_of_birth'=>$this->input->post('orphan_birth_date'),
                        'gender'=>$this->input->post('orphan_gender'),
                        'religion'=>$this->input->post('orphan_religion'),
                        'blood_group'=>$this->input->post('orphan_blood_group'),
                        'special_case'=>$this->input->post('specialEntry'),
                        'father_name'=>$this->input->post('orphan_father_name'),
                        'mother_name'=>$this->input->post('orphan_mother_name'),
                        'guardian_name'=>$this->input->post('orphan_gurdian_name'),
                        'contact_number'=>$this->input->post('gurdian_contact_number'),
                        'address'=>$this->input->post('gurdian_address'),
                        'relation_with_orphan'=>$this->input->post('gurdian_orphan_relation'),
                        'date_of_entry'=>$this->input->post('name'),


                        );
                if($this->db->insert('orphanentry',$table_data))
                        return TRUE;
                else
                        return FALSE;
        }

}