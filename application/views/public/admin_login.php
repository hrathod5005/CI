
<!-- <div class="container" style="margin-top: 20px;"> -->

	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/global.css">
<!-- <link href='https://fonts.googleapis.com/css?family=TRICKSTER' rel='stylesheet'> -->
	<!-- <div class="panel-body"> -->
		<?php echo form_open('login/admin_login',['class'=>'form-horizontal']); ?>
		<!-- <form class="form-horizontal"> -->
			<fieldset>
				<!-- <legend>Admin Login 2</legend> -->

				<div class="container-fluid ">
					<div class="row" style="margin-bottom: 90px;">
						<div class="col-md-4 col-sm-4 col-xs-12"></div>
						<div class="col-md-4 frm">
							<!-- from start -->
							<form class="form-container frm">
								<img src="<?=base_url()?>assets/img/men.svg">
								<center><h1 style="font-family: 'TRICKSTER';">Login Form </h1></center>
								<?php if( $error = $this->session->flashdata('login_failed')): ?>
									<div class="row">
										<div class="col-lg-12">
											<div class="alert alert-dismissible alert-danger">
												<?php echo ($error); ?>	
											</div>
										</div>	
									</div>
								<?php endif; ?>
								<div class="form-group ">
									<label for="exampleInputEmail1">Email address</label>
									<input type="text" class="form-control txt" name="uname" id="exampleInputEmail1" placeholder="Email">
									<div class="col-lg-12">
										<?php echo form_error('uname'); ?>
									</div>
								</div>
								<div class="form-group ">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control txt" name="pword" id="exampleInputPassword1" placeholder="Password">
									<div class="col-lg-12">
									<?php echo form_error('pword'); ?>
								</div>
								</div>
								
								<div class="checkbox">
									<label>
										<input type="checkbox"> Remember Me
									</label>
								</div>
								<div>
									<center>
									<button type="submit" class="btn btn-success ">Submit</button>
								<button type="submit" class="btn btn-danger ">Reset</button>
								</center>
								</div>
							</form>

							<!-- from end -->
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12"></div>
					</div>
				</div>

				
 			<!-- <div class="row">
 				<div class="col-lg-6">
 					<div class="form-group">
 						 <label for="inputEmail" class="col-lg-3 control-label">User Name</label>
 						<div class="col-lg-9">
 							<?php echo form_input(['class'=>'form-control ','id'=>'inputEmail','name'=>'uname' ,'placeholder'=>'Username','value'=>set_value('uname')]); ?>
 						</div>
 					</div>
 				</div>
 				<div class="col-lg-6">
 					<?php echo form_error('uname'); ?>
 				</div>
 			</div> -->
 			<!-- <div class="row">
 				<div class="col-lg-6">
 					<div class="form-group">
 						<label for="inputPassword" class="col-lg-3 control-label">Password</label>
 						<div class="col-lg-9">
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
				 <button type="reset" class="btn btn-default">Cancel</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div> -->
			<div class="container"></div>
		</fieldset>
	</div>
	<!-- </div> -->
	