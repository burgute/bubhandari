<!doctype html>
<html class="no-js" lang="">
	<head>
			<meta charset="utf-8">
			<meta http-equiv="x-ua-compatible" content="ie=edge">
			<title>EMI Calculator | B.U.Bhandari</title>
			<meta name="description" content="">
			<meta name="viewport" content="width=device-width, initial-scale=1">

			<?php include "route.php"; ?>
	</head>
	<body>
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<header class="row headContent">
	<?php include "quickContact.php"; ?>
	<section class="container clearfix">
		<div>
			<div class="logo">
				<a href="index.php"><h1></h1></a>
			</div>
			<nav>
				<div class="navbar navbar-static-top">
					<div class="navigation">
						<nav>
						<ul class="nav topnav bold">
							<li class="dropdown">
								<a href="index.php">Home <i class="icon-angle-down"></i></a>
							</li>
							<li class="dropdown">
								<a href="javascript:void(0)">Project <i class="icon-angle-down"></i></a>
								<ul style="display: none;" class="dropdown-menu bold">
									<li class="dropdown"><a href="javascript:void(0)">Pune</a>
										<ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
											<li><a href="CasaRegalo.php">CASA REGALO - KHARADI</a></li>
											<li><a href="belleza.php">BELLEZA - TALEGAON, KANHE</a></li>
											<li><a href="projectAlacrity.php">ALACRITY - BANER</a></li>
											<li><a href="vaastuviva.php">VAASTU VIVA - WAKAD</a></li>
											<li><a href="terranova.php">TERRA NOVA, PARGAON KHANDALA, SHIRWAL</a></li>
											<li><a href="cresendo.php">CRESENDO - SOPAN BAUG</a></li>
											<li><a href="scalade.php">SCALADE - KHARADI</a></li>
											<li><a href="unitypark.php">UNITY PARK - KONDHWA</a></li>
										</ul>
<!--
										<ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
											<li class="dropdown"><a href="javascript:void()">Residential</a>
												<ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
													<li><a href="javascript:void()">Ongoing</a></li>
													<li><a href="javascript:void()">Upcoming</a></li>
													<li><a href="javascript:void()">Completed</a></li>
												</ul>
											</li>
											<li><a href="javascript:void()">Commercial</a></li>
										</ul>
-->
									</li>
									<li class="dropdown"><a href="javascript:void(0)">Ahmedabad</a>
										<ul style="display: none;" class="dropdown-menu sub-menu-level1 bold">
											<li><a href="godsgift.php">God’s Gift</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li class="dropdown active">
								<a href="customersCorner.php">CUSTOMER'S CORNER <i class="icon-angle-down"></i></a>
							</li>
							<li class="dropdown">
								<a href="careers.php">CAREERS <i class="icon-angle-down"></i></a>
							</li>
							<li class="dropdown">
								<a href="about.php">About Us <i class="icon-angle-down"></i></a>
							</li>
							<li class="dropdown">
							<a href="contact.php">Contact </a>
							</li>
						</ul>
						</nav>
					</div>
					<!-- end navigation -->
				</div>
			</div>
			</div>
		</div>
			</nav>
		</div>
	</section>
</header>
		
		<section class="row innerBanner customersContact">
		</section>
		
		<div class="row">
			<div class="container">
				<section class="customersCorner">
					<h2>
						EMI Calculator
						<i></i>
					</h2>
				
					<section>
						<aside>
							<h3>Customer's Corner</h3>
							<ul class="ccNavi">
								<li class="ccNavActive"><a href="emiCalculator.php">EMI Calculator</a></li>
								<li><a href="customersCorner.php">Testimonials</a></li>
								<li><a href="nricorner.php">NRI Corner</a></li>
							</ul>
							<?php include "getintouch.php" ;?>
						</aside>
						<article class="milestone">
							<?php include "emicalc.php" ?>
						</article>
					</section>
							<div class="clearfix"></div>
				</section>
			</div>
		</div>
		
		<?php include "footer.php"; ?>