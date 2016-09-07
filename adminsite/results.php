<!Doctype>

<?php 

include("functions/functions.php");

?>
<html>
	<head>
			<title>Online shopping</title> 
			
			<link rel="stylesheet" href="styles/style.css" media="all" />
			
	</head>
	
<body>
<!--main wrapper starts from here-->
<div class="main_wrapper">

<!--header starts from here-->
<div class="header_wrapper">
		<a href="index.php"><img id="logo" src="images/images-logo.png"/></a>
		<img id="banner" src="images/banner1.jpg"/>
</div>	
<!--header ends here-->


<!--menu bar starts from here-->	
<div class="menubar">
	<ul id="menu">
		<li><a href="index.php">Home</a></li>
		<li><a href="all_products.php">All Products</a></li>
		<li><a href="customer/my_account.php">My Account</a></li>
		<li><a href="#">Sign UP</a></li>
		<li><a href="#">Shopping Cart</a></li>	
		<li><a href="#">CONTACT US</a></li>
		
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
		
				<div id="sidebar_title">Categories</div>
		
						<ul id="cats">
							
							<?php getCats();  ?>
							
		
		</ul>
		<div id="sidebar_title">Brands</div>
			
						<ul id="cats">
		
							<?php getBrands(); ?>
				
		
		</ul>
		
		</div>
		
		
	<div id="content_area">
	<div id="shopping_cart">
			<span style="float:right; font-size:18px; padding:5px; line-height:40px;">
			Welcome Guest!<b style="color:#ff9900">Shopping Cart- </b>Total No Items: Total Amount:  <a href="cart.php"style="color:#ffff1a;">My Cart</a>
			
			</span>
	
	</div>
	
	
	<div id="products_box">
	<?php
	
	
	if(isset($_GET['search']))
	{
			$search_query=$_GET['user_query'];
			
		
	$get_pro= "select * from products_test where product_keywords like '%$search_query%'";
	
	$run_pro=mysqli_query($con,$get_pro);
	
	while($row_pro=mysqli_fetch_array($run_pro)){
		$pro_id=$row_pro['product_id'];
		$pro_cat=$row_pro['product_cat'];
		$pro_brand=$row_pro['product_brand'];
		$pro_title=$row_pro['product_title'];
		$pro_price=$row_pro['product_price'];
		$pro_image=$row_pro['product_image'];	
		
		
		echo "
				<div id='single_product'>
				
					
					<h3>$pro_title</h3>
					<img src='admin_area/product_images/$pro_image' width='185' height='125' />
					
					<p><b>Rs. $pro_price</b></p>
					<a href='details.php?pro_id=$pro_id' style='float:Left;color:#ffff1a';>Read More</a>
					<a href='index.php?pro_id=$pro_id'><button style='float:right; color:black;'>Add to Cart</button></a>
				</div>
		
		";
		
	}
	}
	?>
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

 