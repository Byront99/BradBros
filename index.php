<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
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
		<link rel="stylesheet" type="text/css" href="style.css">
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
				<li><a href="index.php" style="color: #353B3B;"><span class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="products.php" style="color: #353B3B;"><span class="glyphicon glyphicon-modal-window"></span>Products</a></li>
			</ul>
			<form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search" id="search">
		        </div>
		        <button type="submit" class="btn btn-primary" id="search_btn" style="background-color: #353B3B;"><span class="glyphicon glyphicon-search"></span></button>
		     </form>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #353B3B;"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px; border-color: #353B3B; background-color: #353B3B;">
						<div class="panel panel-success" style="border-color: #BCDEDF; background-color: #353B3B; margin-bottom: -20px;">
							<div class="panel-heading" style="background-color: #BCDEDF; color: #353B3B;">
								<div class="row">
									<div class="col-md-3">Item No.</div>
									<div class="col-md-3"> </div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								</div>
							</div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #353B3B;"><span class="glyphicon glyphicon-user"></span>Sign In</a>
					<ul class="dropdown-menu" style="background-color: #353B3B;">
						<div style="width:300px;">
							<div class="panel panel-primary" style="background-color: #353B3B; border-color: #BCDEDF; margin-bottom: -10px;">
								<div class="panel-heading" style="border: 0px; background-color: #BCDEDF; color: #353B3B;">Login</div>
								<div class="panel-heading" style="background-color: #353B3B;">
									<form onsubmit="return false" id="login">
										<label for="email" style="color: #BCDEDF;">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email"style="color: #BCDEDF;">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color: #BCDEDF; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right; border-color: #BCDEDF; background-color: #BCDEDF; color: #353B3B;">
										<br/>
										<a href="customer_registration.php?register=1" style="color: #BCDEDF;">Create a new account?</a>
									</form>
								</div>
							</div>
						</div>
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
			<div class="col-md-2 col-xs-12">
				<div>
					<img src="product_images/profilepicture.jpeg" style="width:257.16px; height:300px; border-radius: 15px 50px;"/>
				</div>
				<div style="width:257.16px; height:350px; border: 2px solid #BCDEDF; border-radius: 15px 50px; margin-top: 20px; color: #BCDEDF;">
					<div style="padding: 5px;">
						<h3>Contact Us</h3> <br />
						<p>Cell Number: 055 899 7745 </p>
						<p>Office Number: 021 428 8891 </p>
						<p>Email: admin@bradbros.com </p>
						<p>Address: 7 Athena Street, Brackenfell, Cape Town, 7560</p><br />
						<p>Office Hours: </p>
						<p>Mon - Friday: 8am till 5:30pm <br />
							Weekends: closed <br />
							Public Holidays: closed</p>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" style="background-color: 	#353B3B;">
					<div class="panel-heading" style=" background-color: #BCDEDF; color: #353B3B;">Home Page</div>
					<div class="panel-body">
						<div style="color: #BCDEDF;">
							<p><h3>BradBros History</h3></p>
							<br />
							<p>
								We were estblished early in the year of 2005. Our founder Mark Bradshore has started the company with only a vision and a ambision to become the one of the biggest online shop competitors rivaling Take Alot and Amazon. Marc was born in 1992 and is 27 years old, he started this vision with his father and brother hoping to grow the company as a family business. Mac is hoping that the family orientated values and morals of the staff and company would inspire more of the local community to support him and in return support the locals with competitve pricing and excelent service delivery.
							</p>
							<br />
							<br />
							<p>
								Mainly opperating out of the western cape, Marc hopes to grow the business to a multination company. Creating jobs and helping to support and gove back to the local communities. BradBros started with a staff base of 4 employees, meanin ghtat most of the staff owuld be doing more than one persons job in order to assist in the startup of the company.
							</p>
						</div> 
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































