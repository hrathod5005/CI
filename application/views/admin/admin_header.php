<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
		<!-- <link rel="stylesheet" type="text/css" href="http://localhost/CI/assets/css/bootstrap.min.css"> -->
	 <?= link_tag('assets/css/bootstrap.min.css') ?>
	 <?= link_tag('assets/css/font-awesome.css') ?>	
</head>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Admin Panel</a>
			</div>

			<div class="collapse navbar-collapse" id="mynav">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="<?= base_url('index.php/login/logout') ?>"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>