<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include 'connection.php';

?>
<!DOCTYPE html>
<html>
<head>

<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<title>Antila Shoppy</title>
<!-- //for bootstrap working -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- header-bot -->
<div class="header-bot">
	<div class="header-bot_inner_wthreeinfo_header_mid">
		<div class="col-md-4 header-middle">
			
		</div>
		<!-- header-bot -->
			<div class="col-md-4 logo_agile">
				<h1><a href="index.php"><span>A</span>ntila Shoppy</a></h1>
			</div>
     
		<div class="clearfix"></div>
	</div>
</div>
<!-- //header-bot -->
<!-- banner -->
<div class="ban-top">
	<div class="container">
		<div class="top_nav_left">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu--shylock col-md-4 header-middle" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav menu__list">
					<li class=""><a href="index.php" style="color: white;">Home <span class="sr-only">(current)</span></a></li>
					
					<div class="dropdown">
						<button class="dropbtn">Men's wear</button>
						<div class="dropdown-content">
						<?php 
						$qry="select * from drop_down where cat_name='Mens'";
						$rs=mysqli_query($conn,$qry);
						while($row=mysqli_fetch_array($rs))
						{
							?>

							<a href="mens wear.php?id=<?php echo $row['cat_id']; ?>" ><?php echo $row['sub_cat']; ?></a>
						<?php
						
						}
					
						?>



							<!-- <a href="mens t-shirt.php">t-shirts</a>
						<a href="mens kurtas.php">kurtas</a>
						<a href="mens jeans.php">jeans</a>
						<a href="mens shuits.php">shuits</a> -->
					</div>
				</div>
				
				<div class="dropdown">
					<button class="dropbtn">Women's wear</button>
					<div class="dropdown-content">
					<?php 
						$qry="select * from drop_down where cat_name='Womens'";
						$rs=mysqli_query($conn,$qry);
						while($row=mysqli_fetch_array($rs))
						{
							?>

							<a href="womens wear.php?id=<?php echo $row['cat_id']; ?>" ><?php echo $row['sub_cat']; ?></a>
						<?php
						
						}
					
						?>
	
					<!-- <a href="womens kurties.php">kurties</a>
						<a href="womens saree.php">saree</a>
						<a href="womens dress.php">dress</a>
						<a href="womens jeans.php">jeans</a> -->
					</div>
				</div>
				
					
				
				
					
				<!-- <li>			
						<div class="dropdown menu__item">
							
							<a href="#" ><div class="dropdown-content" style="color:white;"><span>men's wear</span></div></a>
						</div>
						<div class="col-sm-3 multi-gd-img">
							<select>
								<ul class="multi-column-dropdown">
									<option><li><a href="mens.html">Clothing</a></li></option>
									<option><li><a href="mens.html">Wallets</a></li></option>
									<option><li><a href="mens.html">Footwear</a></li></option>
									<option><li><a href="mens.html">Watches</a></li></option>
									<option><li><a href="mens.html">Accessories</a></li></option>
									<option><li><a href="mens.html">Bags</a></li></option>
											<option><li><a href="mens.html">Caps & Hats</a></li></option>
										</ul>
									</select>
									</div>
				</li> -->

				
					<!-- <li class="dropdown menu__item">
						<a href="#" style="color: white;" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Men's wear <span class="caret"></span></a>
						<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-6 multi-gd-img1 multi-gd-text ">
										<a href="mens.html"><img src="images/top2.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Clothing</a></li>
											<li><a href="mens.html">Wallets</a></li>
											<li><a href="mens.html">Footwear</a></li>
											<li><a href="mens.html">Watches</a></li>
											<li><a href="mens.html">Accessories</a></li>
											<li><a href="mens.html">Bags</a></li>
											<li><a href="mens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="mens.html">Jewellery</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Perfumes</a></li>
											<li><a href="mens.html">Beauty</a></li>
											<li><a href="mens.html">Shirts</a></li>
											<li><a href="mens.html">Sunglasses</a></li>
											<li><a href="mens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
						
						<li class="dropdown menu__item">
							<a href="#" data-toggle="dropdown" style="color: white;" role="button" aria-haspopup="true" aria-expanded="false">Women's wear<span class="caret"></span></a>
							<ul class="dropdown-menu multi-column columns-3">
								<div class="agile_inner_drop_nav_info">
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Clothing</a></li>
											<li><a href="womens.html">Wallets</a></li>
											<li><a href="womens.html">Footwear</a></li>
											<li><a href="womens.html">Watches</a></li>
											<li><a href="womens.html">Accessories</a></li>
											<li><a href="womens.html">Bags</a></li>
											<li><a href="womens.html">Caps & Hats</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-gd-img">
										<ul class="multi-column-dropdown">
											<li><a href="womens.html">Jewellery</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Perfumes</a></li>
											<li><a href="womens.html">Beauty</a></li>
											<li><a href="womens.html">Shirts</a></li>
											<li><a href="womens.html">Sunglasses</a></li>
											<li><a href="womens.html">Swimwear</a></li>
										</ul>
									</div>
									<div class="col-sm-6 multi-gd-img multi-gd-text ">
										<a href="womens.html"><img src="images/top1.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
						</li>
					-->
					<li class=" menu__item"><a href="contact_us.php" style="color: white;">Contact</a></li>
					<li class="menu__item"><a style="color: white;" href="about.php">About</a></li>
					
					<!-- <li class=" menu__item"><a style="color: white;" href="registration.php">registration</a></li> -->
					<!-- <li class=" menu__item"><a style="color: white;" > -->
						<li class='menu__item'>  
							<?php  
					  
					  if(isset($_SESSION['user_email']))
					  {
						  
						if($_SESSION['count']==0)
						{
							echo "<a style='color: white;' href='mycart.php'> My Cart[0] </a>";

						}
						else{
							echo "<a style='color: white;' href='mycart.php'> My Cart[".@$_SESSION['count']."] </a>";

						}
						  
						  // echo "<script language='javascript' >window.location.href='logout.php'</script>";
						}
						else
						{	
							// echo "<script language='javascript'>window.location.href='login.php'</script>";
						}
						
						?> 
					 </li>
					 <li class='menu__item'>  
					<?php  
					  
					  if(isset($_SESSION['user_email']))
					  {
						  
						  echo "<a style='color: white;' href='placedorder.php'> My Order </a>";
						  
						  // echo "<script language='javascript' >window.location.href='logout.php'</script>";
						}
						else
						{	
							// echo "<script language='javascript'>window.location.href='login.php'</script>";
						}
						
						?> 
					 </li> 
					 
					 <li class='menu__item'>  
						 <?php  
					  
					  if(isset($_SESSION['user_email']))
					  {
						  
						  echo "<a style='color: white;' href='profile.php'> Profile </a>";
						  
						  // echo "<script language='javascript' >window.location.href='logout.php'</script>";
						}
						else
						{	
							//SSecho " <a style='color: white;' href='login.php'> login  </a>";
							
							// echo "<script language='javascript'>window.location.href='login.php'</script>";
						}
						
						?> 
					 </li>

						<li class='menu__item'>  
							<?php  
						
						if(isset($_SESSION['user_email']))
						{
							
							echo "<a style='color: white;' href='logout.php'> logout </a>";
							
							// echo "<script language='javascript' >window.location.href='logout.php'</script>";
						}
						else
						{	
							echo " <a style='color: white;' href='login.php'> login  </a>";
							
							// echo "<script language='javascript'>window.location.href='login.php'</script>";
						}
						
						?> 

						</li>
</ul>
</div>
			</div>
		</nav>	
	</div>
	
	<div class="top_nav_right">
		<!-- <div class="wthreecartaits wthreecartaits2 cart cart box_1"> 
			<form action="#" method="post" class="last"> 
				<input type="hidden" name="cmd" value="_cart">
				<input type="hidden" name="display" value="1">
				<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
			</form>  
			
						</div> -->
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- //banner-top -->
		</div>
		</div>

		


		<!-- banner -->
		
		
		<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<script src="js/modernizr.custom.js"></script>
	<!-- Custom-JavaScript-File-Links --> 
	<!-- cart-js -->
	<script src="js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>

	<!-- //cart-js --> 
<!-- script for responsive tabs -->						
<script src="js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
</script>
<!-- //script for responsive tabs -->		
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->


<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
