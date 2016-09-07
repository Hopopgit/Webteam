$(document).ready(function(){
  
  // On page load: datatable
 
  var table_companies = $('#table_companies').dataTable({
    "ajax": "data.php?job=get_companies",
    "columns": [
	
      { "data": "name"},
      { "data": "email_id","sClass": "email_id"},
      {"data": "contact_number"},
      
      { "data": "location","sClass": "location" },
      { "data": "mode_of_transport","sClass": "mode_of_transport" },
		  {"data":"created_on"},
			  {"data":"updated_on"},
				  {"data":"created_by"},
				  { "data": "coupon_code","sClass": "coupon_code" },
      { "data": "functions",      "sClass": "functions" }
    ],
    "aoColumnDefs": [
      { "bSortable": false, "aTargets": [-1] }
    ],
    "lengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
    "oLanguage": {
      "oPaginate": {
        "sFirst":       " ",
        "sPrevious":    " ",
        "sNext":        " ",
        "sLast":        " ",
      },
      "sLengthMenu":    "Records per page: _MENU_",
      "sInfo":          "Total of _TOTAL_ records (showing _START_ to _END_)",
      "sInfoFiltered":  "(filtered from _MAX_ total records)"
    }
  });
  
  // On page load: form validation
  jQuery.validator.setDefaults({
    success: 'valid',
    rules: {
      /*dob: {
        required: true,
        
      }*/
    },
    errorPlacement: function(error, element){
      error.insertBefore(element);
    },
    highlight: function(element){
      $(element).parent('.field_container').removeClass('valid').addClass('error');
    },
    unhighlight: function(element){
      $(element).parent('.field_container').addClass('valid').removeClass('error');
    }
  });
  var form_company = $('#form_company');
  form_company.validate();
  

  // Show message
  function show_message(message_text, message_type){
    $('#message').html('<p>' + message_text + '</p>').attr('class', message_type);
    $('#message_container').show();
    if (typeof timeout_message !== 'undefined'){
      window.clearTimeout(timeout_message);
    }
    timeout_message = setTimeout(function(){
      hide_message();
    }, 8000);
  }
  // Hide message
  function hide_message(){
    $('#message').html('').attr('class', '');
    $('#message_container').hide();
  }

  // Show loading message
  function show_loading_message(){
    $('#loading_container').show();
  }
  // Hide loading message
  function hide_loading_message(){
    $('#loading_container').hide();
  }

  // Show lightbox
  function show_lightbox(){
    $('.lightbox_bg').show();
    $('.lightbox_container').show();
  }
  // Hide lightbox
  function hide_lightbox(){
    $('.lightbox_bg').hide();
    $('.lightbox_container').hide();
  }
  // Lightbox background
  $(document).on('click', '.lightbox_bg', function(){
    hide_lightbox();
  });
  // Lightbox close button
  $(document).on('click', '.lightbox_close', function(){
    hide_lightbox();
  });
  // Escape keyboard key
  $(document).keyup(function(e){
    if (e.keyCode == 27){
      hide_lightbox();
    }
  });

  // Show smsbox
  function show_smsbox(){
    $('.smsbox_bg').show();
    $('.smsbox_container').show();
  }
  // Hide smsbox
  function hide_smsbox(){
    $('.smsbox_bg').hide();
    $('.smsbox_container').hide();
  }
  //smsbox background
  $(document).on('click', '.smsbox_bg', function(){
    hide_smsbox();
  });
  // smsbox close button
  $(document).on('click', '.smsbox_close', function(){
    hide_smsbox();
  });
  // Escape keyboard key
  $(document).keyup(function(e){
    if (e.keyCode == 27){
      hide_smsbox();
    }
  });
  
  
  // Hide iPad keyboard
  function hide_ipad_keyboard(){
    document.activeElement.blur();
    $('input').blur();
  }


  // Add company button
  $(document).on('click','#add_company', function(e){
    e.preventDefault();
    $('.lightbox_content h2').text('Add user');
    $('#form_company button').text('Add user');
    $('#form_company').attr('class', 'form add');
    $('#form_company').attr('data-id', '');
    $('#form_company .field_container label.error').hide();
    $('#form_company .field_container').removeClass('valid').removeClass('error');
	
    $('#form_company #name').val('');
    $('#form_company #email_id').val('');
    $('#form_company #contact_number').val('');
   
    $('#form_company #location').val('');
    $('#form_company #mode_of_transport').val('');
	$('#form_company #created_on').val('');
	$('#form_company #updated_on').val('');
	$('#form_company #updated_by').val('');
	 $('#form_company #coupon_code').val('');
    
    show_lightbox();
  });

  // Add company submit form
  $(document).on('submit', '#form_company.add', function(e){
    e.preventDefault();
    // Validate form
    if (form_company.valid() == true){
      // Send company information to database
      hide_ipad_keyboard();
      hide_lightbox();
      show_loading_message();
      var form_data = $('#form_company').serialize();
      var request   = $.ajax({
        url:          'data.php?job=add_company',
        cache:        false,
        data:         form_data,
        dataType:     'json',
        contentType:  'application/json; charset=utf-8',
        type:         'get'
      });
      request.done(function(output){
        if (output.result == 'success'){
          // Reload datable
          table_companies.api().ajax.reload(function(){
            hide_loading_message();
            var name = $('#name').val();
            show_message("User '" + name + "' added successfully.", 'success');
          }, true);
        } else {
          hide_loading_message();
          show_message('Add request failed', 'error');
        }
      });
      request.fail(function(jqXHR, textStatus){
        hide_loading_message();
        show_message('Add request failed: ' + textStatus, 'error');
      });
    }
  });

  // Edit company button
  $(document).on('click', '.function_edit a', function(e){
    e.preventDefault();
	
    // Get company information from database
    show_loading_message();
    var id = $(this).data('id');
    var request = $.ajax({
		
      url:          'data.php?job=get_company',
      cache:        false,
      data:         'id=' +id,
      dataType:     'json',
      contentType:  'application/json; charset=utf-8',
      type:         'get'
    });
    request.done(function(output){
      if (output.result == 'success'){
        $('.lightbox_content h2').text('Edit User');
        $('#form_company button').text('Edit User');
        $('#form_company').attr('class', 'form edit');
        $('#form_company').attr('data-id',id);
        $('#form_company .field_container label.error').hide();
        $('#form_company .field_container').removeClass('valid').removeClass('error');
		 
        $('#form_company #name').val(output.data[0].name);
        $('#form_company #email_id').val(output.data[0].email_id);
        $('#form_company #contact_number').val(output.data[0].contact_number);
        
        $('#form_company #location').val(output.data[0].location);
        $('#form_company #mode_of_transport').val(output.data[0].mode_of_transport);
		$('#form_company #created_on').val(output.data[0].created_on);
		$('#form_company #updated_on').val(output.data[0].updated_on);
		$('#from_company #created_by').val(output.data[0].created_by);
		$('#form_company #coupon_code').val(output.data[0].coupon_code);
        
        hide_loading_message();
        show_lightbox();
      } else {
        hide_loading_message();
        show_message('Information request failed', 'error');
      }
    });
    request.fail(function(jqXHR, textStatus){
      hide_loading_message();
      show_message('Information request failed: ' + textStatus, 'error');
    });
  });
  
  // Edit company submit form
  $(document).on('submit', '#form_company.edit', function(e){
    e.preventDefault();
    // Validate form
    if (form_company.valid() == true){
      // Send company information to database
      hide_ipad_keyboard();
      hide_lightbox();
      show_loading_message();
	  
      var id        = $('#form_company').attr('data-id');
      var form_data = $('#form_company').serialize();
	  
      var request   = $.ajax({
        url:          'data.php?job=edit_company&id=' + id,
        cache:        false,
        data:         form_data,
        dataType:     'json',
        contentType:  'application/json; charset=utf-8',
        type:         'get'
		
      });
	  
      request.done(function(output){
        if (output.result == 'success'){
          // Reload datable
          table_companies.api().ajax.reload(function(){
            hide_loading_message();
            var company_name = $('#company_name').val();
            show_message("User '" + name + "' edited successfully.", 'success');
          }, true);
        } else {
          hide_loading_message();
          show_message('Edit request failed', 'error');
        }
      });
      request.fail(function(jqXHR, textStatus){
        hide_loading_message();
        show_message('Edit request failed: ' + textStatus, 'error');
      });
    }
  });
  
  // Delete company
  $(document).on('click', '.function_delete a', function(e){
    e.preventDefault();
    var company_name = $(this).data('name');
    if (confirm("Are you sure you want to delete '" + company_name + "'?")){
      show_loading_message();
      var id      = $(this).data('id');
      var request = $.ajax({
        url:          'data.php?job=delete_company&id=' + id,
        cache:        false,
        dataType:     'json',
        contentType:  'application/json; charset=utf-8',
        type:         'get'
      });
      request.done(function(output){
        if (output.result == 'success'){
          // Reload datable
          table_companies.api().ajax.reload(function(){
            hide_loading_message();
            show_message("User '" + name + "' deleted successfully.", 'success');
          }, true);
        } else {
          hide_loading_message();
          show_message('Delete request failed', 'error');
        }
      });
      request.fail(function(jqXHR, textStatus){
        hide_loading_message();
        show_message('Delete request failed: ' + textStatus, 'error');
      });
    }
  });
// Send sms button
var name="";
var email="";
  $(document).on('click', '.function_envelope a', function(e){
    e.preventDefault();
  
    // Get company information from database
    show_loading_message();
    var id = $(this).data('id');
    var request = $.ajax({
   
      url:          'data.php?job=get_email',
      cache:        false,
      data:         'id='+id,
      dataType:     'json',
      contentType:  'application/json; charset=utf-8',
      type:         'get'
    });
    request.done(function(output){
      if (output.result == 'success'){
        $('.lightsms_content h2').text('Send Message');
        $('#form_sms button').text('Send');
        $('#form_sms').attr('class', 'form send');
        $('#form_sms').attr('data-id',id);
        $('#form_sms .field_container label.error').hide();
        $('#form_sms .field_container').removeClass('valid').removeClass('error');


       name+=output.data[0].name;
       email+=output.data[0].email_id;


       $('#form_sms #name').val(name);
    $('#form_sms #email_id').val(email);

       alert(name);
       alert(email);
        hide_loading_message();
        show_smsbox();
      } else {
        hide_loading_message();
        show_message('Information request failed', 'error');
      }
    });
    request.fail(function(jqXHR, textStatus){
      hide_loading_message();
      show_message('Information request failed: ' + textStatus, 'error');
    });
  });
  
  // SMS  submit form
   $(document).on('submit', '#form_sms.send', function(e){
    e.preventDefault();
   
    // Validate form
    if (form_company.valid() == true){
      // Send company information to database
      hide_ipad_keyboard();
      hide_smsbox();
      show_loading_message();
     
    
       //var id        = $('#form_sms').attr('data-id');
       //var form_sms = JSON.stringify(jQuery('#form_sms').serializeArray());
      //var form_sms = $('#form_sms').serialize();

//        var name = $("#name").val();
//  var email = $("#email_id").val();
var message = $("#message").val();
//var dataString = 'name1='+ name + '&email1='+ email + '&message1='+ message;

     // console.log(name);
     // console.log(email);
     // console.log(message);
    
      var request   = $.ajax({
        url:          'mail.php',
        type:         'POST',
        cache:        false,
        data:         '{"name":"'+name+'","email":"'+email+'","message":"'+message+'"}',
                 dataType:     'json',
        contentType:  'application/json; charset=utf-8'
        
    
      });
    
      request.done(function(output){
        if (output.result == 'success'){
          // Reload datable
          table_companies.api().ajax.reload(function(){
            hide_loading_message();
            var name = $('#form_sms #name').val();
            show_message("User '" + name + "' message Send successfully.", 'success');
          }, true);
        } else {
          hide_loading_message();
          show_message('Message failed', 'error');
        }
      });
      request.fail(function(jqXHR, textStatus){
        hide_loading_message();
        show_message('message send failed: ' + textStatus, 'error');
      });
    }
  
  });
  
  
 
});