<!Doctype>
<?php 

include("functions/functions.php");

?>
<html>
	<head>
			<title>Admin Interanl-Site</title> 
			
			<link rel="stylesheet" href="styles/style.css" media="all" />
			
	</head>
	
<body>
<!--main wrapper starts from here-->
<div class="main_wrapper">

<!--header starts from here-->
<div class="header_wrapper">
		<a href="index.php"><img id="logo" src="images/redbeak.png"/></a>
		<!--img id="banner" src="images/banner1.jpg"/-->
</div>	
<!--header ends here-->


<!--menu bar starts from here-->	
<div class="menubar">
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="all_products.php">All Users</a></li>
		<li><a href="customer/my_account.php">My Account</a></li>
		<li><a href="#">Log Out</a></li>
		<!--li><a href="#">Shopping Cart</a></li>		
		<li><a href="#">CONTACT US</a></li-->
		
	</ul>
<div id="form" >
		<form method="get" action="results.php" enctype="multipart/form-data">
			<input type="text" name="user_query" placeholder="Search a Product"/>
			<input type="submit" name="search" value="search"/>
		</form>
</div>
</div>


<!--menu bar ends here-->

<!--content wrapper starts from here-->
<div class="content_wrapper">
		<div id="sidebar">
		
				<div id="sidebar_title">Admin Panel</div>
		
						<ul id="cats">
							
							<?php getCats();  ?>
							
		
						</ul>
		<!--div id="sidebar_title">Brands</div>
			
						<ul id="cats">
		
							<?php getBrands ; ?>
				
		
						</ul>
		
		</div>
		
		
	<div id="content_area">
	
	<?php
	
	cart();
	
	?>
	<div id="shopping_cart">
			<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
			Welcome Guest!<b style="color:#ff9900">Shopping Cart- </b>Total No Items: <?php total_items();?> Total Amount:<?php total_price(); ?>  <a href="cart.php"style="color:#ffff1a;">My Cart</a>
			
			</span>
	
	</div>
	
	
	<div id="products_box">
	
	<?php getPro(); ?>
	<?php getCatPro(); ?>
	<?php getBrandPro(); ?>
	
	
	</div>
	
	
	</div>	
	
	
	
	
</div>
<!--content wrapper ends here-->

<!--footer starts from here-->
<div id="footer">

<h2 style="text-align:center; padding-top:15px; color:white;">&copy; 2016 by HopOp</h2>

</div>
<!--Footer ends here-->

</div>
<!--main wrapper ends here-->


</body>
</html>

 