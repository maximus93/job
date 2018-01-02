<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* 
* 	Author: Sujit 
* 	Description: Add Certificate Category model class

*/

class Post_resume_m extends CI_Model 
{
	public function save_resume_m($records)
	{
		$this->db->insert('resume', $records);
		return true;
	}

}
?>	