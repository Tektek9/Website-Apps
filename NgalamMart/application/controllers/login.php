<?php
class login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->helper('url');
		$this->load->library('session');
		
	}
	
	// public function logout(){
	// 	$this->session->unset_userdata('logged_in');
	// 	redirect('login');
	// }
		
	public function index(){
		if ($this->session->logged_in){
			redirect('Crud');
		}
		$this->load->helper('form');
		$this->load->library('form_validation');
		
		// $this->form_validation->set_rules('username', 'Username', 'required',	array(
		// 							'required'      => '%snya harus diisi.'
		// 						));
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[4]|max_length[15]');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE)
		{			
			$this->load->view('login');
		} else {
			// $username = $this->input->post('username');
			$username = trim($_POST['username']);
			$result = $this->user_model->get($username);
			
			if (!empty($result) && $result->password === trim($_POST['password']))
			{
				$newdata = array(
					'username'  => $username,
					'logged_in' => TRUE
				);

				$this->session->set_userdata($newdata);
				$this->session->set_userdata('ses_nama',$newdata['username']);
				redirect('Crud');

			} else {
				$this->session->set_flashdata('err','Username atau password salah');
				redirect('login');

			}
				
		}
		
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}