<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Register_m extends CI_Model 
{
	public function Insert_employee($records)
	{

		$this->db->insert('users', $records);
		$last_id = $this->db->insert_id();
		return $last_id;

	}

	public function check_email($records)
	{
		$condition = "email =" . "'" . $records['email'] . "'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where($condition);
		$query = $this->db->get();
		$check_rows = $query->num_rows();
		return $check_rows;
	}

	public function insert_emp($records)	
	{
		$query = $this->db->insert('employee_details', $records);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
}
?>	