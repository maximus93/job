<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_listing_m extends CI_Model {

public function fetch_job()
{
	$query = $this->db->get('job_post'); 
	return $query;
}
	

}

/* End of file job_listing_m */
/* Location: ./application/models/job_listing_m */
?>