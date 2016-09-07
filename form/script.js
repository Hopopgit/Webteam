// JavaScript Document

$('document').ready(function()
{ 
     /* validation */
	 $("#register-form").validate({
      rules:
	  {
			name: {
		    required: true,
			minlength: 3
			},
			coupon_code: {
		    required: false,
		
			},
			contact_number: {
			required: true,
			minlength: 10,
			maxlength: 10,
			
			},
			
			email_id: {
            required: true,
            email: true
            },
			location: {
			required: true,
			minlength: 5,
			maxlength: 500
			
			},
			mode_of_transport: {
			required: true,
			minlength: 3,
			maxlength: 12
			
			},
	   },
       messages:
	   {
            name: "Enter your name",
			
            contact_number:{
                      required: " Enter valid contact number",
                      minlength: "contact number at least have 10 characters",
					  tel:"enter only numbers"
                     },
					 
            email_id: {
			required:" enter email address",
			email : "Please enter valid email"
			},
			
			location: "enter your valid address",
						
					  
					 mode_of_transport: "enter your mode of transport",
						
					  
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* form submit */
	   function submitForm()
	   {		
				var data = $("#register-form").serialize();
				
				$.ajax({
				
				type : 'POST',
				url  : 'register.php',
				data : data,
				beforeSend: function()
				{	
					$("#error").fadeOut();
					$("#btn-submit").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Registering ...');
				},
				success :  function(data)
						   {						
								if(data==1){
									
									$("#error").fadeIn(200, function(){
											
											
											$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; Sorry your  already registered !</div>');
											
											$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register');
										
									});
																				
								}
								else if(data=="registered")
								{
									
									$("#btn-submit").html(' &nbsp; Registering ...');
									setTimeout('$(".form-signin").fadeOut(200, function(){ $(".signin-form").load("success.php"); }); ',500);
									
								}
								else{
										
									$("#error").fadeIn(200, function(){
											
						$("#error").html('<div class="alert alert-danger"><span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
											
									$("#btn-submit").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Register');
										
									});
											
								}
						   }
				});
				return false;
		}
	   /* form submit */
	   //<img src="btn-ajax-loader.gif" />
	   
	 

});