<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Browse_candidate extends CI_Controller {

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

    public function __construct() {
        parent:: __construct();
        $this->load->helper("url");
        $this->load->model("browse_candidate_m");
        $this->load->library("pagination");
    }


    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "browse_candidate";
        $config["total_rows"] = $this->browse_candidate_m->record_count();
        $config['per_page'] = 1;
		$config['uri_segment'] = 2;
		$config['num_links'] = 3;
		$config['page_query_string'] = FALSE;
		// $config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'page';
		$config['full_tag_open'] = '<div class="pagination"><ul>';
		$config['full_tag_close'] = '</ul></div><!--pagination-->';
		$config['first_link'] = '&laquo; First';
		$config['first_tag_open'] = '<li class="prev page">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = 'Last &raquo;';
		$config['last_tag_open'] = '<li class="next page">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Next &rarr;';
		$config['next_tag_open'] = '<li class="next page">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = '&larr; Previous';
		$config['prev_tag_open'] = '<li class="prev page">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page">';
		$config['num_tag_close'] = '</li>';
		// $config['display_pages'] = FALSE;
		// 
		$config['anchor_class'] = 'follow_link';
		// $config['display_pages'] = FALSE;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $start= (int)$this->uri->segment(3) * $config['per_page']+1;
		$end = ($this->uri->segment(3) == floor($config['total_rows']/ $config['per_page']))? $config['total_rows'] : (int)$this->uri->segment(3) * $config['per_page'] + $config['per_page'];

		$data['result_count']= "Showing ".$start." - ".$end." of ".$config['total_rows']." Results";
        $data["results"] = $this->browse_candidate_m->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

        $this->load->view("browse_candidate", $data);

        //print_r($data);
        //exit;
    }
}
?>