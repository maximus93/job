<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Job_details extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('job_details_m');
		$job_id = $this->uri->segment(2);
		$data['fetch_job'] = $this->job_details_m->get_details($job_id);
		$jccat = $this->job_details_m->get_details($job_id);
		$yo = explode(',',$jccat->job_category);

		$cat = array();
		$similiar = array();
		foreach ($yo as $cat_id) {
			$fetch_cat = $this->job_details_m->get_cat($cat_id);
			$cat = array_merge($cat,$fetch_cat);
			$fetch_similar = $this->job_details_m->get_similar($cat_id,$job_id);
			$similiar = array_merge($similiar,$fetch_similar);
		}
		$data['fetch_cat'] = $cat;
		$data['similar_job'] = $similiar;
		$data['page_nm'] = "job_details";
		$this->load->view('job_details',$data);
	}
}
?>