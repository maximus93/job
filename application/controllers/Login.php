<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login');
	}

	public function login_user()
	{
		$this->load->model('login_m');
		echo $email = $this->input->post('email');
		echo $password = $this->input->post('password');
		$records=array('email'=>$email,'password'=>$password);
		$get_login = $this->login_m->check_login($records);
		if($get_login)
		{
			$sess_array = array();
			foreach($get_login as $row)
			{
				$sess_array = array(
				 'user_id' => $row->user_id,
			   );
			   $this->session->set_userdata('logged_in', $sess_array);
			   $get_type = $row->user_type;
			   if($get_type == 'employee')
				{
					redirect('post_resume');
				}
				elseif($get_type == 'employeer')
				{
					redirect('job_post');
				}
			}
		}
		else
		{
			$this->session->set_flashdata("password_failed", "Email Or Password Does Not match!");
			redirect('login');
		}

	}
}
?>