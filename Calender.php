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
	<title>Wo Without Men | Admin Panel</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!-- Fonts and icons -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/now-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
</head>
<body class="">
	<div class="wrapper ">
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
					<li>
						<a href="Profile.php">
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
					<li class="active ">
						<a href="#calendar">
							<i class="now-ui-icons users_single-02"></i><p>Calendar</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End of SideBar -->
		
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
						<p>Calendar</p>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
				</div>
			</nav>
			<!-- End Navbar -->
			<div class="panel-header panel-header-lg" id="calendar">
				<center/>
				<iframe src="https://calendar.google.com/calendar/embed?src=mahlobobrian%40gmail.com&ctz=Africa%2FJohannesburg" style="border: 0" id="calendar" width="940" height="500" frameborder="0" scrolling="no"></iframe>
			<br/><br/></div>
			<br/><br/>
			<!-- footer -->
			<footer class="footer">
				<center/>
				<p id="copyright">&copy;<script>document.write(new Date().getFullYear())</script>Copyright. All Rights Reserved</p>
			</footer>
		</div>
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
