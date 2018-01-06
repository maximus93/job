<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class job_details_m extends CI_Model {

public function get_details($job_id)
{
	$query = $this->db->get_where('job_post', array('job_id' => $job_id));
	return $result=$query->row();
}
public function get_cat($cat_id)
{
	$query = $this->db->get_where('job_category', array('category_id' => $cat_id));
	return $query->result();
}
public function get_similar($cat_id,$job_id)
{
	$query = $this->db->query('select * from job_post where FIND_IN_SET ("'.$cat_id.'", job_category) and job_id !="'.$job_id.'"');
	return $query->result();
}

}

/* End of file job_details_m.php */
/* Location: ./application/models/job_details_m.php */