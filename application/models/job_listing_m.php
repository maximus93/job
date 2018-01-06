<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_listing_m extends CI_Model {

/*public function fetch_job()
{
	$query = $this->db->get('job_post'); 
	return $query;
}*/
public function record_count() {
        return $this->db->count_all("job_post");
    }
public function fetch_job($limit, $start) {
        $this->db->select('*')->from('lists')
        ->limit($limit, $start);
        $query = $this->db->get("job_post");
        return $query->result();
   }
	

}

/* End of file job_listing_m */
/* Location: ./application/models/job_listing_m */
?>