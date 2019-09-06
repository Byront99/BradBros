<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>BradBros</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}
		</style>
	</head>
<body style="background-color: 	#353B3B;">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid" style="background-color: #BCDEDF; color: #353B3B;">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" style="color: #353B3B;">BradBros</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="products.php" style="color: #353B3B;"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
				<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown" style="color: #353B3B;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px; border-color: #353B3B; background-color: #353B3B;">
						<div class="panel panel-success" style="border-color: #BCDEDF; background-color: #353B3B; margin-bottom: -20px;">
							<div class="panel-heading" style="background-color: #BCDEDF; color: #353B3B;">
								<div class="row">
									<div class="col-md-3 col-xs-3">Item No.</div>
									<div class="col-md-3 col-xs-3"> </div>
									<div class="col-md-3 col-xs-3">Product Name</div>
									<div class="col-md-3 col-xs-3">Price</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #353B3B;"><span class="glyphicon glyphicon-user"></span><?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu" style="border-color: #BCDEDF; background-color: #353B3B;">
						<li><a href="cart.php" style="text-decoration:none; color: #BCDEDF;"><span class="glyphicon glyphicon-shopping-cart">Cart</a></li>
						<li class="divider" style="color: #BCDEDF;"></li>
						<li><a href="customer_order.php" style="text-decoration:none; color: #BCDEDF;">Orders</a></li>
						<li class="divider" style="color: #BCDEDF;"></li>
						<li><a href="" style="text-decoration:none; color: #BCDEDF;">Change Password</a></li>
						<li class="divider" style="color: #BCDEDF;"></li>
						<li><a href="logout.php" style="text-decoration:none; color: #BCDEDF;">Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<div id="get_brand">
				</div>
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll" style="background-color: 	#353B3B;">
					<div class="panel-heading" style="border-color: #BCDEDF; background-color: #BCDEDF; color: #353B3B;">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































