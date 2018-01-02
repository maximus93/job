<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Register_m extends CI_Model 
{
	public function insert_employee($records)
	{
		$this->db->insert('users', $records);
		$this->db->trans_complete();
		 $insert_id = $this->db->insert_id();
		return  $insert_id;
	}

}
?>	