<!DOCTYPE html>
<html lang="en">
<head>
        
       <title>SpeedrunRaces</title>
	<meta charset="UTF-8">
	<meta name="description" content="SpeedrunRaces Homepage">
	<meta name="keywords" content="Speedrun, Races, Speedrunraces">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Favicon -->   
	<link href="riddle/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,600,600i,700" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="/css/magnific-popup.css"/>
	<link rel="stylesheet" href="/css/style.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
<!-- Page Preloder -->
	<!-- </-><div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- header section start -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-3">
					<div class="logo">
                        <img class="logo" src="/images/logo.png" alt="logo">
						<h2  class="site-logo"> &nbsp; SpeedrunRaces</h2>
					</div>
				</div>
				<div class="col-lg-8 col-md-9">
					<a href="" class="site-btn header-btn">Connect</a>
					<nav class="main-menu">
						<ul>
							<li><a href="/">Home</a></li>
							<li><a href="/games">Games</a></li>
							<li><a href="/runs">Runs</a></li>
							<li><a href="/contact">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
	</header>
	<!-- header section end -->




@yield('content')


<!-- footer section start -->
   
	<footer class="footer-section text-center">
		<div class="container">
             <hr class="new4">
			<h3 class="section-title mb-5">SpeedrunRaces</h3>
			<a href="" class="site-btn">Connect</a>
			<div class="social-links">
				<a href="///storage/app/public/disc.png"><span class="fa fa-facebook"></span></a>
				<a href=""><span class="fa fa-twitter"></span></a>
                <a href=""><span class="fa fa-discord"></span></a>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>  | by <a>Corentin et Robin</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- footer section end -->



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>