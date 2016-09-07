$(function() {
	$("#register-form").validate({
    rules:
    {
		first_name : {

				required : true,
				minlength : 3,
				maxlength : 15
			},
      last_name : {

  				required : true,
  				minlength : 1,
  				maxlength : 15
  			},
        login_name : {

    				required : true,
    				minlength : 3,
    				maxlength : 15
    			},
          encrypt_password : {

            minlength : 5,
            required:true


          },
			email_id : {
				required : true,
				minlength : 5,
				maxlength : 25,
				email : true
			},
      user_role : {

          required : true,
          minlength : 3,
          maxlength : 15
        },



			contact_number : {
				required : true,


			address : {
				required : true,
				minlength : 10,
				maxlength : 250
			}
		},
		first_name : {
			 
				required : 'Please enter the name',
				minlength : 'Minimun 3 characters is required',
				maxlength : 'Maximum 15 characters is allowed'
			},
      last_name : {
  			 
  				required : 'Please enter the name',
  				minlength : 'Minimun 3 characters is required',
  				maxlength : 'Maximum 15 characters is allowed'
  			},
        login_name : {
    			
    				required : 'Please enter the name',
    				minlength : 'Minimun 3 characters is required',
    				maxlength : 'Maximum 15 characters is allowed'
    			},

      encrypt_password : {
				required : 'Password is required',
				minlength : 'Minimun 5 characters is required'

},
email_id : {
  required : 'Email is required',
  minlength : 'Minimun 3 characters is required',
  maxlength : 'Maximum 25 characters is allowed',
  email : 'Please enter valid email'
},
user_role : {
  required : 'Please enter the mobile number'

},


			contact_number: {
				required : 'Please enter the mobile number'

			},

			address : {
				required : 'Please fill the address field',
				minlength : 'Minimun 5 characters is required',
				maxlength : 'Maximum 230 characters is allowed'
			}

		}
      
	});
		
});