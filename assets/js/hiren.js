$(document).ready(function(){
	$("#myform").validate({
		rules: {
			inputfname : {
				required:true,
				// minleght:3
			},
			inputlname :{
				required:true,
				// minleght:3
			},
			inputusername : {
				required:true,
				minlegth:3
			},
			password : {
				required:true,
				minlegth:5,

			},
			inputconfirmpassword : {
				required:true,
				minlegth:5,
				equalTo: "#password"
			},
			email: {
				required:true,
				email:true
			},
			inputmobile : {
				required:true,
				maxlegth:10			
			}
		},
		messages:{
			inputfname: "Please enter your First Name",
			inputlname: "Please enter your Last Name",
			inputusername :{
				required: "Please enter a Username",
				minlegth: "Your Username must consists of at least 3 character"
			},
			password:{
				required: "Please enter a Password",
				minlegth: "Your Password must be at least 5 character long"	
			},
			inputconfirmpassword:{
				required: "Please enter a Password",
				minlegth: "Your Password must be at least 5 character long",
				equalTo: "Please enter the same Password as above"	
			},
			email:{
				required: "Please enter a Email ID",
				email: "Please enter valid Email ID"	
			},
			inputmobile:{
				required: "Please enter a Mobile Phone",
				maxlegth: "Your Mobile Phone must be 10 digits long"	
			}	
		},
		submitHandler: function(myform) {
        var fname=$("#inputfname").val();
        var lname=$("#inputlname").val();
        var email=$("#email").val();
    	var phone=$("#inputmobile").val();
    	var dataString = 'fname='+ fname +'lname'+ lname+ '&uemail='+ email + '&phone='+ phone;
    	$.ajax({
    		type: "POST",
    		url: "dd",
    		data: dataString,
    		cache: false,
    		success: function(result){
    			alert(result);
    			$("#fname").val('');$("#lname").val('');$("#email").val('');$("#phone").val('');
    		}
    	});
    }
	});
});