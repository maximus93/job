<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Dashboard_m extends CI_Model 
{

	public function fetch_type($user_id)
	{
		$condition = "user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}
	
	public function fetch_details($user_id)
	{
		$condition = "users.user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('resume', 'users.user_id = resume.user_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

	public function fetch_applied_details($user_id)
	{
		$condition = "apply.employee_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('apply');
		$this->db->join('job_post', 'apply.job_id = job_post.job_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->result();

	}



	public function employeer_details($user_id)
	{
		$condition = "users.user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('job_post', 'users.user_id = job_post.company_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}

	public function edit_resume_file($user_id,$records)
	{
		$where  = array('user_id' => $user_id);
		$this->db->where($where);
		$query = $this->db->update('resume', $records);
		return $query;
	}
}
?>
