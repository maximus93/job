<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_listing_m extends CI_Model {

/*public function fetch_job()
{
	$query = $this->db->get('job_post'); 
	return $query;
}*/

	public function __construct() {
        parent::__construct();
    }
	public function record_count() {
		return $this->db->count_all("job_post");
	}

	public function fetch_job($limit, $start) {
	        $this->db->select('*');
	        $this->db->from('job_post');
	        $this->db->limit($limit, $start);
	        $this->db->order_by('job_id desc');
	        $query = $this->db->get();
	        return $query->result();
	}

	public function get_cities(){
		$this->db->select("location");
        $this->db->from("resume");
        $query = $this->db->get();
        return $query->result();
	}
	   
}

/* End of file job_listing_m */
/* Location: ./application/models/job_listing_m */
?>