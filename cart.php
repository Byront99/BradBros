<?php


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
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
<body style="background-color: 	#353B3B;">
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid" style="background-color: #BCDEDF; color: #353B3B;">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" style="color: #353B3B;">BradBros</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="products.php" style="color: #353B3B;"><span class="glyphicon glyphicon-modal-window"></span>Product</a></li>
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary" style="border-color: #BCDEDF;">
					<div class="panel-heading" style="border-color: #BCDEDF; background-color: #BCDEDF; color: #353B3B;">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Update/Remove</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in R</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>
















		