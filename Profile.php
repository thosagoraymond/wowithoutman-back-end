<?php
session_start();
ini_set('mysql.connect_timeout',500);
ini_set('default_socket_timeout',500);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png">
	<!-- Favorite Icon -->
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- Title -->
	<title>Profile</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!-- Fonts and icons -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>
<body class="">
	<!-- SideBar -->
	<div class="sidebar" data-color="orange">
		<div class="logo"><center/>
			<a href="" class="simple-text logo-normal"><b><?php echo $_SERVER["SERVER_NAME"]; ?></b></a>
		</div>
		<div class="sidebar-wrapper">
			<ul class="nav">
				<li>
					<a href="index.php">
						<i class="now-ui-icons design_app"></i><p>Dashboard</p>
					</a>
				</li>
				<li class="active ">
					<a href="#about">
						<i class="now-ui-icons location_map-big"></i><p>Profile</p>
					</a>
				</li>
				<li>
					<a href="contact-info.php">
						<i class="now-ui-icons education_atom"></i><p>Contact Info</p>
					</a>
				</li>
				<li>
					<a href="events.php">
						<i class="now-ui-icons users_single-02"></i><p>Event Information</p>
					</a>
				</li>					
				<li>
					<a href="Calender.php">
						<i class="ni ni-calendar-grid-58"></i><p>Calendar</p>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div class="main-panel">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute bg-primary fixed-top">
			<div class="container-fluid">
				<div class="navbar-wrapper">
					<!-- Button when resized -->
					<div class="navbar-toggle">
						<button type="button" class="navbar-toggler">
							<span class="navbar-toggler-bar bar1"></span>
							<span class="navbar-toggler-bar bar2"></span>
							<span class="navbar-toggler-bar bar3"></span>
						</button>
					</div>
					<p>Profile</p>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
				</button>
			</div>
		</nav>
		<!-- End Navbar -->
		<div class="panel-header panel-header-sm" id="about"></div>
		<div class="content">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header"><h5 class="title">About Us</h5></div>
						<div class="card-body">
							<p>Wo Without Men is a Non-Profit Organization that once became an idea but 
							never rested only in thoughts. It was formulated to help young ladies deal 
							with everyday life issues and challenges in a very wise manner so as to abet 
							them perceive life in a positive way regardless of trials and tribulations 
							they have once came across or they are likely to encounter. Wo Without Men 
							gives birth to young ladies who are full of life, intelligence, ambition, 
							confidence and all the good things that one may think of in a phenomenal lady.
							<br/><br/>
							The organization has seen from different societies and backgrounds of how much 
							ladies are committing plenty of mistakes that are likely to lead them to a 
							place of interment at a juvenile stage of life, it has seen plenty of towels 
							that are thrown by ladies because of previously committed mistake, so the 
							organization aims to positively influence and revive the minds of ladies, 
							including those who are still growing. The reason for the existence of Wo 
							Without Men is providing guidance and help in addressing and dealing with 
							issues that are holding our ladies happiness, success and blessings hostage, 
							issues such as sexual abuse, emotional abuse, teenage pregnancy, peer pressure, 
							coming from disadvantaged backgrounds, for instance in a home where poverty 
							is dominant.
							<br/><br/>
							We aim to help ladies see the importance of life, especially when led by God. 
							Members of Wo Without Men aim to support ladies, especially young ladies 
							willing to stand against all forms of abuse, they are as well enthusiastic 
							to experience a moment where, from a far distance they observe ladies walking 
							away from anything or any person not recognizing their worth. We mostly 
							encourage ladies tear off tags that people use to label them and urging them 
							to step down from society’s standards and expectations.
							</p>
							<a href="#" class="edit-btn"><b>Edit</b></a>
							<a href="#" class="save-btn"><b>Save</b></a>
						</div>
					</div>
				</div>					
				<div class="col-md-4">
					<div class="card">
						<div class="card-header"><h5 class="title">Our Vision</h5></div>
						<div class="card-body">
							<p>Our vision is to see a world of females who are conquers and succeed by 
							empowering one another. To see ladies who are energetic, strong and courageous 
							lifting societies in greater heights with their skills and God given talents 
							and leaving an unforgettable mark for an upcoming generation.
							</p>
							<a href="#" class="edit-btn"><b>Edit</b></a>
							<a href="#" class="save-btn"><b>Save</b></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header"><h5 class="title">Our Mission</h5></div>
						<div class="card-body">
							<p>Empowering young females by using educational opportunities, avoidance 
							of life derailing distractions and standing for what is right and seeing 
							through their dreams to bring prosperity not only in their lives but in 
							others as well.
							</p>
							<a href="#" class="edit-btn"><b>Edit</b></a>
							<a href="#" class="save-btn"><b>Save</b></a>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header"><h5 class="title">Our Goals</h5></div>
						<div class="card-body">
							<p>We aim to build up educational facilities where females can 
							learn new things they never got a chance to learn and providing 
							creative opportunities to unemployed females so that they can 
							exercise their skills and hidden talents in order to depend upon 
							themselves and not government for provision of jobs.
							</p>
							<a href="#" class="edit-btn"><b>Edit</b></a>
							<a href="#" class="save-btn"><b>Save</b></a>
						</div>
					</div>
				</div>					
				<div class="col-md-12">
					<div class="card">
						<div class="card-header"><h5 class="title">Our Objectives</h5></div>
						<div class="card-body">
							<p>Our objectives are to help overcome the daily life challenges 
							they encounter or once encountered resulting from their past 
							mistakes, to revive the goodness of each female especially young 
							females in this generation, to help young ladies prevent mistakes 
							that might hinder them from fulfilling the purpose and assignments 
							that God created them to do. We seek to help stimulate the powers 
							and greatness that God instilled in each lady, mostly to ensure 
							that God and education takes high precedence over every lady’s life. 
							Our main objective is to transform the lives of the beneficiaries.
							</p>
							<a href="#" class="edit-btn"><b>Edit</b></a>
							<a href="#" class="save-btn"><b>Save</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<footer class="footer">
			<center/>
			<p id="copyright">&copy;<script>document.write(new Date().getFullYear())</script>Copyright. All Rights Reserved</p>
		</footer>
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
	<!--  Google Maps Plugin    -->
	<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
	<!-- Chart JS -->
	<script src="assets/js/plugins/chartjs.min.js"></script>
	<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
	<script src="assets/js/now-ui-dashboard.min.js?v=1.1.0" type="text/javascript"></script>
	<script>
		$(document).ready(function() {
		// Javascript method's body can be found in assets/js/demos.js
		demo.initDashboardPageCharts();
		});
	</script>
</body>
</html>
