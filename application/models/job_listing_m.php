<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_listing_m extends CI_Model {

/*public function fetch_job()
{
	$query = $this->db->get('job_post'); 
	return $query;
}*/
<<<<<<< HEAD
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
	        $query = $this->db->get();
	        return $query->result();
	   }
=======
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
        $query = $this->db->get();
        return $query->result();
   }
>>>>>>> a7692b10258519a3a4f0d6c843d24f44a38249ae
	

}

/* End of file job_listing_m */
/* Location: ./application/models/job_listing_m */
?>