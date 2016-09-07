<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<title>Registration Form using jQuery Ajax and PHP MySQL</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"> 

<script type="text/javascript" src="jquery-1.11.3-jquery.min.js"></script>

<script type="text/javascript" src="validation.min.js"></script>
<link href="style.css" rel="stylesheet" media="screen">

<script type="text/javascript">
$('document').ready(function()
{ 
	window.setTimeout(function(){
									
		window.location.href = "index.html";
										
	}, 4000);
	
	
	$("#back").click(function(){
		window.location.href = "index.html";
	});
});
</script>

</head>

<body>

<!--div class="header-cont">
    <div class="header">
	
	<a href="http://www.hopop.in"><img src="h1.png" alt=""></a>
	</div-->
    
<div class="container">
	<div class="col-md-0"></div>
	<div class="col-md-6">
    <div class="signin-form" >
    <div class='alert alert-success'>
		<button class='close' data-dismiss='alert'>&times;</button>
			<strong>Success!</strong>  Successfully Registered.
    </div>
    
    <button class="btn btn-primary" id="back">
      <span class="glyphicon glyphicon-backward"></span> &nbsp; back to main page
    </button>
    
</div>

</div>
</div>


</body>
</html>