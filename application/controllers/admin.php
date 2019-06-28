<?php 
class Admin extends MY_Controller{
	
	function __construct() {
		parent::__construct();
		define('PATH', base_url());

		define('ASSETS', base_url().'assets/');

	}
	public function dashboard()
	{
		$this->load->model('articlesmodel','articles');
		$this->load->library('pagination');

		$config=[	
			'base_url' => base_url('index.php/admin/dashboard'),
			'per_page' => 5,
			'total_rows' => $this->articles->num_rows(),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'first_tag_open' => '<li>',
			'first_tag_close' => '</li>',
			'last_tag_open' => '<li>',
			'last_tag_close' => '</li>',
			'next_tag_open' => '<li>',
			'next_tag_close' => '</li>',
			'prev_tag_open' => '<li>',
			'prev_tag_close' => '</li>',
			'num_tag_open' => '<li>',
			'num_tag_close' => '</li>',
			'cur_tag_open' => "<li class='active'><a>",
			'cur_tag_close' => '</a></li>',

		];
		$this->pagination->initialize($config);

		
		if(! $this->session->userdata('user_id')){
			return redirect(login);
		}
		$articles=$this->articles->articles_list($config['per_page'],$this->uri->segment(3));
		
		$this->load->view('admin/dashboard',['articles'=>$articles]);
	}
	public function add_article(){
		//maintain session
		$this->load->model('articlesmodel','articles');
		if(! $this->session->userdata('user_id')){
			return redirect(login);
		}
		// $articles=$this->articles->articles_list($config['per_page'],$this->uri->segment(3));
		
		// $this->load->view('admin/dashboard',['articles'=>$articles]);

		$this->load->view('admin/add_article');
	}
	public function store_article(){
		//maintain session
		$this->load->model('articlesmodel','articles');
		if(! $this->session->userdata('user_id')){
			return redirect(login);
		}

		$config = [
			'upload_path'	=>	'./uploads',
			'allowed_types'	=>	'jpg|gif|png|jpeg',
		];

		$this->load->library('upload',$config);

		$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules') && $this->upload->do_upload('image') ){
			$post=$this->input->post();
			unset($post['submit']);
			$data = $this->upload->data();
			//echo "<pre>";
			//print_r($data); exit;
			$image_path= base_url("uploads/".$data['raw_name'] . $data['file_ext'] );
			//echo $image_path; exit;
			$post['image_path'] = $image_path;
			$this->load->model('articlesmodel','articles');
			return $this->_flashAndRedirect(
				$this->articles->add_article($post),
				'Article Added Successfully.',
				'Article Failed to Add, Please Try Again.'
			);
		}else{
			$upload_error = $this->upload->display_errors();
			$this->load->view('admin/add_article',compact('upload_error'));
		}
	}
	public function edit_article($article_id){
		//maintain sessioon
		$this->load->model('articlesmodel','articles');
		if(! $this->session->userdata('user_id')){
			return redirect(login);
		}			

		$this->load->model('articlesmodel','articles');
		$article = $this->articles->find_article($article_id);
		$this->load->view('admin/edit_article',['article'=>$article]);
	}
	public function update_article() {
		//maintain sessioon
		$this->load->model('articlesmodel','articles');
		if(! $this->session->userdata('user_id')){
			return redirect(login);
		}


		$this->load->library('form_validation');
		if($this->form_validation->run('add_article_rules'))
		{
			$post=$this->input->post();
			$article_id=$post['article_id'];
			unset($post['submit'],$post['article_id']);
			// unset($post['submit']);
			$this->load->model('articlesmodel','articles');
			return $this->_flashAndRedirect(
				$this->articles->update_article($article_id,$post),
				'Article Updated Successfully.',
				'Article Failed to Update, Please Try Again.'
			);
		}else{
			$this->load->view('admin/edit_article');
		}
	}
	public function delete_article()
	{
		//maintain sessioon
		$this->load->model('articlesmodel','articles');
		if(! $this->session->userdata('user_id')){
			return redirect(login);
		}


		$article_id=$this->input->post('article_id');
		$this->load->model('articlesmodel','articles');
		return $this->_flashAndRedirect(
			$this->articles->delete_article($article_id),
			'Article Deleted Successfully.',
			'Article Failed to Delete, Please Try Again.'
		);
	}

	public function __costruct()
	{
		parent::__costruct();
		if( ! $this->session->userdata('user_id'))
			return redirect('login');
		$this->load->model('articlesmodel','articles');
	}
	private function _flashAndRedirect($successful,$successmsg,$failuremsg)
	{
		if($successful)
		{
			$this->session->set_flashdata('feedback',$successmsg);
			if ($successmsg == 'Article Deleted Successfully.') {
				$this->session->set_flashdata('feedback_class','alert-danger');	
			}
			else
			{
				$this->session->set_flashdata('feedback_class','alert-success');	
			}
			// $this->session->set_flashdata('feedback_class','alert-success');
		}else{
			$this->seddion->set_flashdata('feedback',$failuremsg);
			$this->session->set_flashdata('feedback_class','alert-danger');
		}
		return redirect('admin/dashboard');		
	}
}

?>		