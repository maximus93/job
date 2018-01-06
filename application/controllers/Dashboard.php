<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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

 	function __construct(){
        parent::__construct();
        if(!$this->session->userdata['logged_in']){
            redirect('login');
        }
    }
	public function index()
	{
		$this->load->model('dashboard_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		$data['user_details'] = $this->dashboard_m->fetch_details($user_id);
		$this->load->view('dashboard',$data);
	}

	public function edit_resume_file()
	{
		$this->load->model('dashboard_m');
		$user_id = $this->session->userdata['logged_in']['user_id'];
		
			$config['upload_path'] = 'uploads/';
			$config['allowed_types'] = 'pdf|docx|doc';
			$config['file_name'] = rand(999,99999).$_FILES['resume_file']['name'];
			
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			
			if($this->upload->do_upload('resume_file')){
				$uploadData = $this->upload->data();
				$resume_file = $uploadData['file_name'];
			}else{
				$resume_file = '';
			}

			$posted_date = time();

			$records = array(
			'resume_file' => $resume_file,
			'date_posted' => $posted_date,	
		);
		$edit_resume_data = $this->dashboard_m->edit_resume_file($user_id,$records);
		if($edit_resume_data)
		{
			$this->session->set_flashdata("success", "Success , Your Profile Details Update Successfully!");
			redirect('dashboard');
		}
		else
		{
			$this->session->set_flashdata("failed", "Something Went Wrong!");
			redirect('dashboard');
		}
	}
}
?>