<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Login model class

*/

class Dashboard_m extends CI_Model 
{
	
	public function fetch_details($user_id)
		{
		$condition = "users.user_id =" . "'" . $user_id ."'";
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('resume', 'users.user_id = resume.user_id');
		$this->db->where($condition);
		$query = $this->db->get();
		return $query;
		}
}
?>
