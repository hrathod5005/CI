 <div class="container">
 	<link rel="stylesheet" type="text/css" href="assets/css/global.css">
 	<!-- <div class="panel-body"> -->
 		<?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
 		<!-- <form class="form-horizontal"> -->
 			<fieldset>
 				<legend>Admin Login 1</legend>

 				<div class="container-fluid bg">
 					<div class="row" style="margin-bottom: 50px;">
 						<div class="col-md-4 col-sm-4 col-xs-12"></div>
 						<div class="col-md-4 ">
 							<!-- from start -->
 							<form class="form-container">
 								<img src="assets/img/men.svg">
 								<h1>Login Form 1</h1>
 								<div class="form-group ">
 									<label for="exampleInputEmail1">Email address</label>
 									<input type="email" class="form-control txt" id="inputEmail" name="uname" placeholder="Email">
 								</div>
 								<div class="col-lg-4">
 									<?php echo form_error('uname'); ?>
 								</div>
 								<div class="form-group ">
 									<label for="exampleInputPassword1">Password</label>
 									<input type="password" class="form-control txt" id="inputPassword" name="pword" placeholder="Password">
 								</div>
 								<div class="col-lg-6">
 									<?php echo form_error('pword'); ?>
 								</div>
 								<div class="checkbox">
 									<label>
 										<input type="checkbox"> Remember Me
 									</label>
 								</div>
 								<input type="submit" name="submit" value="Login" class="btn btn-success btn-block">
 								<button type="reset"  class="btn btn-info btn-block">Reset</button>
 							</form>

 							<!-- from end -->
 						</div>
 						<div class="col-md-4 col-sm-4 col-xs-12"></div>
 					</div>
 				</div>

 				<?php if( $error = $this->session->flashdata('login_failed')): ?>
 					<div class="row">
 						<div class="col-lg-6">
 							<div class="alert alert-dismissible alert-danger">
 								<?php echo ($error); ?>	
 							</div>
 						</div>	
 					</div>
 				<?php endif; ?>
 				<!-- <div class="row">
 					<div class="col-lg-8">
 						<div class="form-group">
 							<div class="col-lg-10">
 								<?php echo form_input(['class'=>'form-control col-lg-10','id'=>'inputEmail','name'=>'uname' ,'placeholder'=>'Username','value'=>set_value('uname')]); ?>
 							</div>
 						</div>
 					</div>
 					<div class="col-lg-4">
 						<?php echo form_error('uname'); ?>
 					</div>
 				</div> -->
 				<!-- <div class="row">
 					<div class="col-lg-6">
 						<div class="form-group">
 					]		<div class="col-lg-9">
 								<?php echo form_password(['class'=>'form-control','id'=>'inputPassword','name'=>'pword' ,'placeholder'=>'Password']); ?>
 							</div>
 						</div>
 					</div>
 					<div class="col-lg-6">
 						<?php echo form_error('pword'); ?>
 					</div>		
 				</div> -->
 				<!-- <div class="form-group">
 					<div class="col-lg-10 col-lg-offset-2">
 						<?php 
 						echo form_submit(['name'=>'submit','value'=>'Login','class'=>'btn btn-primary']),
 						form_reset(['name'=>'reset','value'=>'Reset','class'=>'btn btn-default']);
 						?>
				
				</div>
			</div> -->
		</fieldset>
	</div>
	<!-- </div> -->
	