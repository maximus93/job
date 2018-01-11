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
public function insert_msg($job_id,$message)
{
	$query = $this->db->query('select * from job_post where job_id = "'.$job_id.'"');
	$yo = $query->result();
	foreach ($yo as $val) {
		$company_id =  $val->company_id;
		$date = time();
		$data = array(
        'job_id' => $job_id,
        'employee_id' => '1',
        'employer_id' => $company_id,
        'message_data' => $message,
        'apply_date' => $date
		);
		$query2 = $this->db->insert('apply', $data);
		return true;
	}
}

}

/* End of file job_details_m.php */
/* Location: ./application/models/job_details_m.php */