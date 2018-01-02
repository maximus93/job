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
		$this->$this->load->model('Post_resume_m');

		$job_title = $this->input->post('job_title');
		$company_name = $this->input->post('company_name');
		$start_date = $this->input->post('start_date');
		$end_date = $this->input->post('end_date');
		$education = $this->input->post('education');
		$max_salary = $this->input->post('max_salary');
		$travel_distance = $this->input->post('travel_distance');
		$relocate = $this->input->post('relocate');
		$post_type = $this->input->post('post_type');
		$posted_date = time();
		$user_id = 1;

		if(!empty($_FILES['image']['resume'])){
                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['file_name'] = rand(999,99999).$_FILES['image']['name'];
                
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('image')){
                    $uploadData = $this->upload->data();
					$image = $uploadData['file_name'];
					$records=array('news_name'=>$news_name,'news_description'=> $news_details,'news_image'=> $image,'date'=> $date);
                }else{
                    $image = '';
					$records=array('news_name'=>$news_name,'news_description'=> $news_details,'date'=> $date);
                }
		}else{
			$records=array('news_name'=>$news_name,'news_description'=> $news_details,'date'=> $date);
		}
	}
}
?>