<?php 

$config = [
	'add_article_rules'		=>		[
											[
												'field' => 'title',
												'label' => 'Article Title',
												'rules' => 'required|alpha_numeric_spaces',
											],
											[
												'field' => 'body',
												'label' => 'Article Body',
												'rules' => 'required',
											]										
									],
	'admin_login'			=>		[
											[
												'field' => 'uname',
												'label' => 'User Name',
												'rules' => 'required|alpha|trim',
											],
											[
												'field' => 'pword',
												'label' => 'Password',
												'rules' => 'required|trim',
											]										
									]
];

 ?>