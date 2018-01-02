<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view('register');
	}

	public function add_employee()
	{
		$this->load->model('register_m');
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$phone =  $this->input->post('phone');
		$postcode = $this->input->post('postcode');
		$password  = $this->input->post('password');
		$con_pass = $this->input->post('con_password');
		$user_type= "employee";
		$user_status = "pending";

		if($password == $con_pass)
		{
			$records = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'phone'=>$phone,'postcode'=>$postcode,'user_type'=>$user_type,'user_status'=>$user_status);
			$insert_data = $this->register_m->insert_employee($records);
			if($insert_id)
		{
			 $sess_array = array(
				 'user_id' => $insert_id,
			   );
			$this->session->set_flashdata("success", "You Have Been Registred Successfully!");
			redirect('post_resume');	
		}
		else{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('register');	
		}
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('register');
		}
	}
	
	public function add_employeer()
	{
		$this->load->model('register_m');
		$first_name = $this->input->post('f_name');
		$last_name = $this->input->post('l_name');
		$email = $this->input->post('email');
		$phone =  $this->input->post('phone');
		$account_first_name = $this->input->post('acc_fname');
		$account_last_name  = $this->input->post('acc_lname');
		$company_name = $this->input->post('company_name');
		$address = $this->input->post('address');
		$postcode = $this->input->post('post_code');
		$password  = $this->input->post('password');
		$con_pass = $this->input->post('con_password');
		$date = time();
		$user_type= "employeer";
		$user_status = "pending";
		if($password == $con_pass)
		{
			$records = array('first_name'=>$first_name,'last_name'=>$last_name,'email'=>$email,'password'=>$password,'phone'=>$phone,'postcode'=>$postcode,'address'=>$address,'account_first_name'=>$account_first_name,'account_last_name'=>$account_last_name,'comapny_name'=>$company_name,'registration_date'=>$date,'user_type'=>$user_type,'user_status'=>$user_status);

			$insert_employeer = $this->register_m->insert_employee($records);
			if($insert_id)
			{
				$sess_array = array(
				 'user_id' => $insert_id,
			   );
				$this->session->set_flashdata("success", "You Have Been Registred Successfully!");
				redirect('job_post');	
			}
		else
			{
				$this->session->set_flashdata("failed", "Something went wrong!");
				redirect('register');	
			}
		}
		else
		{
			$this->session->set_flashdata("failed", "Something went wrong!");
			redirect('register');
		}
	}

}
?>