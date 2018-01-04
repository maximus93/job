<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Dashboard_m extends CI_Model 
{
	
	public function fetch_details($user_id)
		{
		$condition = "user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('employee_details', 'users.user_id = employee_details.emp_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query;
		}
}
?>
