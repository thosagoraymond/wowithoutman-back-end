<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.png">
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
				<li class="active">
					<a href="#event">
						<i class="now-ui-icons users_single-02"></i><p>Event Information</p>
					</a>
				</li>
				<li>
					<a href="Calender.php">
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
					<p>Events</p>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
					<span class="navbar-toggler-bar navbar-kebab"></span>
				</button>
			</div>
		</nav>
		<div class="panel-header panel-header-sm" id="event"></div>
			<div class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="card">

							<div class="card-body">
								<form>
									<div class="form-group">
										<p><b>What-App:</b>
										<input type="text" class="form-control" placeholder="">
									</div>									
									<div class="form-group">
										<p><b>Phone Number:</b>
										<input type="text" class="form-control" placeholder="">
									</div>									
									<div class="form-group">
										<p><b>Email:</b>
										<input type="text" class="form-control" placeholder="">
									</div>
									<a href="#" class="save-btn"><b>Save</b></a>
								</form>
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
	<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/demo/demo.js"></script>
</body>
</html>