<?php
    include "connect.php";
    session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome to Blood Bank</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
          <link rel="stylesheet" type="text/css" href="css/s11.css">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="all">
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <style>
            body
            {
                font-family: bold;
            }
                
        </style>
	</head>
	<body>

		<!-- Banner -->
			<section id="banner" >
                <h1><strong>Welcome</strong></h1>
				<h2><strong>Online Blood Bank Management System</strong></h2>
				<p></p>
				<ul class="actions">
					<li><a href="order.php" class="button special">About US</a></li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper special">
				<div class="inner">
					<header class="major">
						<h2>Menu</h2>
					</header>
					<div class="features">
						<div class="feature">
							<i class="fa fa-paper-plane-o"></i>
                            <a href="order.php" role = "button" class="btn btn-dark">Place Order</a>
                            <p>Order here for blood you want.</p>
						</div>
						<div class="feature">
							<i class="fa fa-search"></i>
							<a href="Search_blood.php" role = "button" class="btn btn-dark">Search Blood</a>
							<p>Search where the blood is available.</p>
						</div>
						<div class="feature">
							<i class="fa fa-bed"></i>
							<a href="donor_register.php" role = "button" class="btn btn-dark">Register Donor</a>
							<p>Register new donors.</p>
						</div>
						<div class="feature">
							<i class="fa fa-search"></i>
							<a href="bloodbanks%20locations.php" role = "button" class="btn btn-dark">Blood Bank Locations</a>
							<p>See where the blood banks are located in Peshawar.</p>
						</div>
						<div class="feature">
							<i class="fa fa-search"></i>
							<a href="hospitals.php" role = "button" class="btn btn-dark">Hospital Locations</a>
							<p>Search where the hospitals are located in Peshawar.</p>
						</div>
                        	<div class="feature">
							<i class="fa fa-spinner"></i>
							<a href="show_order.php" role = "button" class="btn btn-dark">Orders</a>
							<p>Orders status.
                                </p>
                                
						</div>
                        </div>
                        	<div class="feature">
							<i class="fa fa-tint"></i>
							<a href="show_donors.php" role = "button" class="btn btn-dark">Donors</a>
							<p>Donors in our Blood Banks.
                                </p>
                                
						</div>
					</div>
				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<div class="copyright">
					&copy; Untitled. Design: <a href="http://templated.co/">TEMPLATED</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>