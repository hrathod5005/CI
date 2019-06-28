<?php 

class User extends MY_Controller{

	function __construct() {
		parent::__construct();
		define('PATH', base_url());

		define('ASSETS', base_url().'assets/');

	}
	Public function index()
	{
		$data=array();

		$this->load->model('articlesmodel','articles');

		$this->load->library('pagination');

		$config=[	
			'base_url' => base_url('index.php/user/index'),
			'per_page' => 10,
			'total_rows' => $this->articles->count_all_articles(),
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

		$articles = $this->articles->all_articles_list($config['per_page'],$this->uri->segment(3));
		$data=compact('articles');
		$data['page']='index.php';
		$this->load->view('main',$data);
	}

	public function search(){
		
		$this->load->library('form_validation');
		$this->form_validation->set_rules('query','Query','required');
		if( ! $this->form_validation->run())
		{
			return $this->index();
		}
		else{
			$query = $this->input->post('query');
			
			return redirect("user/search_results/$query");
		}

	}
	public function search_results( $query )
	{
		$data=array();
		$this->load->library('pagination');
		$this->load->model('articlesmodel','articles');

		$config=[	
			'base_url' => base_url("index.php/user/search_results/$query"),
			'per_page' => 5,
			'total_rows' => $this->articles->count_search_results($query),
			'full_tag_open' => "<ul class='pagination'>",
			'full_tag_close' => "</ul>",
			'first_tag_open' => '<li>',
			'uri_segment' => 4,
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

		$articles = $this->articles->search($query,$config['per_page'],$this->uri->segment(4));

		$data=compact('articles');
			$data['page']='public/search_results';
			$this->load->view('main',$data);		

		// $this->load->view('public/search_results',compact('articles'));
	}
	public function article($id)
	{
		$data=array();
		$this->load->model('articlesmodel','articles');

		$article = $this->articles->find($id);
		$data=compact('article');
		$data['page']="article_detail";
		$this->load->view('main',$data);
	}
	public function registration()
	{
		$data=array();
		if (isset($_POST['submit'])) {
			$row=$this->input->post('row');
			$this->db->insert('users',$row);
			$this->session->set_flashdata('success','New User Register');
			redirect(PATH.'registration');
		}

		$data['page']='registration';
		$this->load->view('main',$data);
	}
	

}
?>