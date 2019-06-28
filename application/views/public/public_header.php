<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Articles List</title>
	<!-- <link rel="stylesheet" type="text/css" href="ci/assets/css/font-awesome.css"> -->
	<?= link_tag('assets/css/bootstrap.min.css') ?>	
	<?= link_tag('assets/css/font-awesome.css') ?>	
<style type="text/css">
</style>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href='http://127.0.0.1/CI/index.php'>Articles</a>
			</div>

			<div class="collapse navbar-collapse" id="mynav">
				<?= form_open('user/search',['class'=>'navbar-form navbar-left','role'=>'search']); ?>
				<!-- <form class="navbar-form navbar-left" role="searcg"> -->
					<div class="form-group">
						<input type="text" class="form-control" name="query" placeholder="Search Article">
					</div>
					<button type="submit" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i> Submit</button>
					<?= form_close(); ?>
					<?= form_error('query',"<p class='navbar-text text-danger'>",'</p>') ?>
					<!-- </form> -->
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://127.0.0.1/CI/index.php/user/registration"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
						<li><a href="http://127.0.0.1/CI/index.php/login"><i class="fa fa-lock" aria-hidden="true"></i> Login</a></li>
					</ul>
				</div>
			</div>
		</nav>