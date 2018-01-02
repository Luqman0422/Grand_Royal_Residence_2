<?php
require 'connectdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Grand Royal Residence 2</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body style="background: #eee url(http://subtlepatterns.com/patterns/sativa.png);">

	<section class="hero">
		<header class="navbar-fixed-top" >
			<div class="wrapper">
				<a href="#"><img src="img/logo2.png" width="200" class="logo" alt="" title="" style="margin-left: 0px; margin-top: 15px;" /></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="?page=Home">Home</a></li>
						<li class="drop"><a href="#">Rumah</a>
							<ul style="vertical-align: center;">
								<li style="margin-top: 20px; height: 30px;"><a href="?page=Rumah&cluster=CLASSIC">Cluster Classic</a></li>
								<li style="margin-top: 10px; height: 30px;"><a href="?page=Rumah&cluster=MINIMALIS">Cluster Minimalis</a></li>
							</ul>
						</li>
						<li><a href="?page=Fasilitas">Fasilitas</a></li>
						<li><a href="?page=About">About</a></li>
					</ul>
					<a href="indexUser.php?page=" class="login_btn">Booking</a>
				</nav>
			</div>
		</header><!--  end header section  -->

		<section class="caption">
			<h2 class="caption">Find Your Dream Home</h2>
			<h3 class="properties">In Grand Royal Residence 2 - Indramayu</h3>
		</section>
	</section><!--  end hero section  -->

	
	<?php
	switch ($_GET['page']) {
		case 'Rumah':
		include 'Product.php';
		break;
		case 'Home':
		include 'Dashboard.php';
		break;
		case 'Fasilitas':
		include 'Fasilitas.php';
		break;
		case 'Detail':
		include 'Detail.php';
		break;
		case 'About':
		include 'About.php';
		break;
		default:
		include 'Dashboard.php';
		break;
	}
	?>

	<footer align="center">
		<div class="about" >
					<p>
						Kantor pemasaran :
					</p>
					<p>
						Komp.Ruko Grand Royal Residence 1 No. 10
						Jl. Raya Pasar Baru (depan Kantor Polres)
					</p>
				
		</div>

		<div class="copyrights wrapper">
			Copyright © 2015 Kelompok 4. All Rights Reserved.
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>