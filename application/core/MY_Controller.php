<?php 

class MY_Controller extends CI_Controller{
	public function __costruct()
	{
		parent::__costruct();
		if(! $this->session->userdata('user_id'))
		{
			return redirect('login');
		}
	}

}

?>