<?php 

class Login extends CI_Controller{

	function __construct() {
		parent::__construct();
		define('PATH', base_url());

		define('ASSETS', base_url().'assets/');

	}
	public function index()
	{
		$data=array();
		if($this->session->userdata('user_id'))
		{
			return redirect('admin/dashboard');
		}
		$this->load->helper('form');
		$data['page']="public/admin_login";
		// $this->load->view('public/admin_login');
		
		$this->load->view('main',$data);

		
	}

	public function admin_login()
	{
		$data=array();

		$this->load->library('form_validation');

		$this->form_validation->set_rules('uname','User Name','required|alpha|trim');
		$this->form_validation->set_rules('pword','Password','required|trim');

		$this->form_validation->set_error_delimiters("<p class='text-danger'>","</p>");

		if($this->form_validation->run('admin_login') ) { //if validation passes
			//Success
			$username=$this->input->post('uname');
			$password=$this->input->post('pword');

			$this->load->model('loginmodel');

			$login_id = $this->loginmodel->login_valid($username,$password);
			if( $login_id )
			{//creadintials valid, login user
				$this->session->set_userdata('user_id',$login_id);
				return redirect('admin/dashboard');
			}
			else
			{
				$this->session->set_flashdata('login_failed','Invalid Username/Password.');
				return redirect ('login');
			}
		}
		else
		{
			$data['page']="public/admin_login";
		// $this->load->view('public/admin_login');
			
			$this->load->view('main',$data);
			// $this->load->view('public/admin_login');
			// $data['page']="admin_login";
			// $this->load->view('last',$data);
			// echo validation_errors();
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('user_id');
		return redirect('login');
	}

}

?>