// Add Record

function addRecord() {
    // get values
    var mobile_number = $("#mobile_number").val();
    var first_name = $("#first_name").val();
    var last_name = $("#last_name").val();
	var mail_id = $("#mail_id").val();
    var password = $("#password").val();
    var auth_key = $("#auth_key").val();
    var gender = $("#gender").val();
    var dob = $("#dob").val();
    // Add record
    $.post("ajax/addRecord.php", {
		
        mobile_number: mobile_number,
            first_name: first_name,
            last_name: last_name,
			mail_id: mail_id,
            password: password,
            auth_key: auth_key,
            gender: gender,
            dob: dob
		
    }, function (data, status) {
		console.log('data', data);
        // close the popup
        $("#add_new_record_modal").modal("hide");
 
        // read records again
        readRecords();
 
        // clear fields from the popup
		
        $("#mobile_number").val("");
        $("#first_name").val("");
        $("#last_name").val("");
		$("#mail_id").val("");
        $("#password").val("");
		$("#auth_key").val("");        
        $("#gender").val("");
		$("#dob").val("");
    }).done(function() {
		alert( "second success" );
	})
	  .fail(function(jx, err) {
		alert( "error" , err);
	  })
	  .always(function() {
	  alert( "finished" );});
}
 
// READ records
function readRecords() {
    $.get("ajax/readRecords.php", {}, function (data, status)
	{
        $(".records_content").html(data);
    });
}
 
 
function DeleteUser(id) {
	
    var conf = confirm("Are you sure, r?");
    if (conf == true) {
        $.post("ajax/deleteUser.php", {id: id},
            function (data, status) {
                // reload Users by using readRecords();
                readRecords();
            }
        );
    }
}
 
function GetUserDetails(id) {
	
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(id);
    $.post("ajax/readUserDetails.php", {
            id: id
        },
        function (data, status) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
			console.log(user);
			
            $("#update_mobile_number").val(user.mobile_number);
            $("#update_first_name").val(user.first_name);
            $("#update_last_name").val(user.last_name);
			$("#update_mail_id").val(user.mail_id);
            $("#update_password").val(user.password);
            $("#update_auth_key").val(user.auth_key);			
            $("#update_gender").val(user.gender);
            $("#update_dob").val(user.dob);
			
        }
    ).fail(function(jx, err) {
		console.log(err);
	});
    // Open modal popup
	console.log("Before ");
    $("#update_user_modal").modal("show");
	console.log("after");
}
 
function UpdateUserDetails() {
    // get values
	
    var mobile_number = $("#update_mobile_number").val();
    var first_name = $("#update_first_name").val();
    var last_name = $("#update_last_name").val();
	var mail_id = $("#update_mail_id").val();
    var password = $("#update_password").val();
    var auth_key = $("#update_auth_key").val();	
    var gender = $("#update_gender").val();
    var dob = $("#update_dob").val();
 
    // get hidden field value
    var id = $("#hidden_user_id").val();
	console.log("helo inside updateuserdetails");
 
    // Update the details by requesting to the server using ajax
    $.post("ajax/updateUserDetails.php", {
		
            id: id,
            mobile_number: mobile_number,
            first_name: first_name,
            last_name: last_name,
			mail_id: mail_id,
            password: password,
            auth_key: auth_key,			
            gender: gender,
            dob: dob
        },
        function (data, status) {
            // hide modal popup
            $("#update_user_modal").modal("hide");
            // reload Users by using readRecords();
            readRecords();
        }
    ).fail(function(jx, err) {
    alert( "error" , err);
  });
}
 
$(document).ready(function () {
    // READ recods on page load
    readRecords(); // calling function
});