<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post_resume extends CI_Controller {

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
		$this->load->view('post_resume');
	}

	public function save_resume(){
		$this->load->model('post_resume_m');

		$job_title = $this->input->post('job_title');
		$company_name = $this->input->post('company_name');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$education = $this->input->post('education');
		$max_salary = $this->input->post('max_salary');
		$travel_distance = $this->input->post('travel_distance');
		$relocate = $this->input->post('relocate');
		$post_type = $this->input->post('post_type');
		$skills_get = $this->input->post('skills');
		$all_skills = implode(",",$skills_get);
		$posted_date = time();
		$user_id = 1;

		if(!empty($_FILES['resume']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'pdf|docx|doc';
                $config['file_name'] = rand(999,99999).$_FILES['resume']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('resume')){
                    $uploadData = $this->upload->data();
					$resume_file = $uploadData['file_name'];
                }else{
                    $resume_file = '';
                }
		}else{
			$resume_file = '';
		}

		if(!empty($_FILES['cover_letter']['name'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'pdf|docx|doc';
                $config['file_name'] = rand(999,99999).$_FILES['cover_letter']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('cover_letter')){
                    $uploadData = $this->upload->data();
					$coverletr_file = $uploadData['file_name'];
                }else{
                    $coverletr_file = '';
                }
		}else{
			$coverletr_file = '';
		}

		$records = array(
			'job_title' => $job_title,
			'company_name' => $company_name,
			'skills' => $all_skills,
			'start_date' => strotime($start_date),
			'end_date' => strtotime($end_date),
			'education' => $education,
			'max_salary' => $max_salary,
			'travel_distance' => $travel_distance,
			'relocate' => $relocate,
			'resume_file' => $resume_file,
			'cover_letter' => $coverletr_file,
			'post_type' => $post_type,
			'date_posted' => $posted_date,
			'user_id' => $user_id
		);

		print_r($records);
		$insert_data = $this->post_resume_m->save_resume_m($records);
		if($insert_data)
		{
			$this->session->set_flashdata("success", "Resume uploaded successfully!");
			redirect('Post_resume');	
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong! please try again later.");
			redirect('Post_resume');	
		}
	}
}
?>