<script src="<?=ASSETS?>js/jquery.validate.js"></script>
<script src="<?=ASSETS?>js/bootstrap.min.js"></script>
<style type="text/css">
.error{
	color: red;
}
</style>
<div class="container">
	
	<?php 
	if ($this->session->flashdata('success')) { ?>
	<div class="alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<?php echo '<strong>Success!</strong> '.$this->session->flashdata('success');
		echo '</div>';
	} ?>

	<form class="form-horizontal" role="form" id="myform" method="POST">
		<fieldset>
			<legend>Registration Form</legend>
		<!--  	<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<label for="inputfname" class="col-lg-4 control-label">First Name</label>
						<div class="col-lg-8">
							<div class="input-group">
								<span class="input-group-addon"><i class="fa fa-user"></i></span>
								<input type="text" class="form-control" id="inputfname" placeholder="First Name">	
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-5">

				</div>			
			</div>	 -->
			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputfname" class="col-lg-4 control-label">First Name</label> -->
						<div class="col-lg-8">
							<input type="text" class="form-control" required name="row[fname]" id="row[fname]" placeholder="First Name">	
						</div>
					</div>
				</div>	
				<div class="col-lg-5 help-block with-errors">

				</div>			
			</div>
			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputlname" class="col-lg-4 control-label">Last Name</label> -->
						<div class="col-lg-8">
							<input type="text" required  class="form-control" id="row[lname]" placeholder="Last Name" name="row[lname]">
						</div>
					</div>
				</div>
				<div class="col-lg-5">
					<span class="error"></span>
				</div>			
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputusername" class="col-lg-4 control-label">Username</label> -->
						<div class="col-lg-8">
							<input type="text"  required  class="form-control" id="row[uname]" name="row[uname]" placeholder="Username" >
						</div>
					</div>	
				</div>
				<div class="col-lg-5">

				</div>			
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputpassword" class="col-lg-4 control-label">Password</label> -->
						<div class="col-lg-8">
							<input type="password" required class="form-control password" name="row[pword]" id="pwd" placeholder="Password">
						</div>
					</div>
				</div>			
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputconfirmpassword" class="col-lg-4 control-label">Confirm Password</label> -->
						<div class="col-lg-8">
							<input type="password" required class="form-control compare-pwd" name="inputconfirmpassword" id="inputconfirmpassword" placeholder="Confirm Password">
						</div>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputconfirmpassword"class="col-lg-4 control-label">Birth Date</label> -->
						<div class="col-lg-8">
							<input type="date" required class="form-control" id="row[dob]" name="row[dob]" placeholder="Birth Date">
						</div>
					</div>
				</div>			
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<label class="col-lg-4 control-label">Gender</label>
						<div class="col-lg-8">
							<div class="radio">
								<label>
									<input type="radio" required name="row[gender]"  value="male" > Male   
									  <input type="radio" required name="row[gender]" value="female"> Female
									  <input type="radio" required name="row[gender]" value="other"> Other
								</label>
							</div>
							<div class="radio">
								<label>
									
								</label>
							</div>
						</div>
					</div>
				</div>			
			</div>
			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputemail" class="col-lg-4 control-label">Email</label> -->
						<div class="col-lg-8">
							<input type="email" required class="form-control" id="row[email]" name="row[email]" placeholder="Email">
						</div>
					</div>
				</div>
				<div class="col-lg-5">

				</div>			
			</div>

			<div class="row">
				<div class="col-lg-7">
					<div class="form-group">
						<!-- <label for="inputmobile" class="col-lg-4 control-label">Mobile Phone</label> -->
						<div class="col-lg-8">
							<input type="text"  required class="form-control" name="row[mob]" id="mob"   placeholder="Mobile Phone">
							<!-- <input type="tel" required /> -->
						</div>
					</div>
				</div>
				<div class="col-lg-5">

				</div>			
			</div>
			<div class="form-group">
				<div class="col-lg-offset-3 col-lg-7 ">
					<!-- <input type="submit" class="btn btn-primary fa fa-send" name="submit" id="submit" value="SUBMIT"> -->
					<button type="submit" class="btn btn-primary" name="submit" id="submit">Submit <i><span class="fa fa-send"></span></i></button>
					<button type="reset" class="btn btn-default">CANCEL</button>
				</div>
			</div>
		</fieldset>
	</form> 
</div>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $("#myform").validate({
    // $("#myform").validate({
    	rules: {
    		inputfname: "required",
    		inputlname: "required",
    		inputusername: {
    			required: true,
    			minlength: 2
    		},
    		// "row[pwd]": {
      //           require_from_group: [1, ".password"],
      //           equalTo:".compare-pwd",

      //       },
    		email: {
    			required: true,
    			email: true
    		},
    		inputmobile:{
    			required: true,
    			minlength: 10,
    			number:true,
    		}
    	},
    	messages: {
    		inputfname: "Please enter your firstname",
    		inputlname: "Please enter your lastname",
    		inputusername: {
    			required: "Please enter a Username",
    			minlength: "Your Username must consist of at least 2 characters"
    		},
    		email: "Please enter a valid email address",
    		inputmobile:{
    			required: "Please provide a Mobile Number",
    			minlength: "Your Mobile Number must be 10 Digits",
    			number: "Only Digits",
    		}
    	}
    });
    $("#pwd").rules("add", {
         required:true,
         minlength:5,
         messages: {
                required: "Please Enter Description of Project.",
                minlength:"Your Password must consist of at least 4 characters"
         }
      });
      $("#inputconfirmpassword").rules("add", {
         required:true,
         minlength:5,
         equalTo:"#pwd",
         messages: {
                required:"Please Entet the Password",
                equalTo: "Please Enter the Same Password as Above",
                minlength:"Your Password must consist of at least 4 characters"
         }
      }); 
      $("#mob").rules("add", {
         required:true,
         maxlength:10,
         number:true,
         messages: {
                required: "Please Enter the Mobile Number",
                maxlength: "Only 10 digits Allow",
                number:"Only Digits Allow"
         }
      });
});

</script>
