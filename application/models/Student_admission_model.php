<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Student_admission_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_adm_number()
    {
        $this->db->select('MAX(id) as max');
        $query = $this->db->get('student_admission')->row();
    	return $query->max ?$query->max:1;
    }

    public function insertintoadmission($arr)
    {
       // $data['data'] = $this->db->get('posts');
        $this->db->insert('student_admission',$arr);
    }

    public function get_all_classes()
    {

        $query = $this->db->get('classes_list');
        return $query;

    }
    public function get_all_years()
    {

        $query = $this->db->get('years_list');
        return $query;

    }
}
