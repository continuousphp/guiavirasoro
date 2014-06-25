<html>
<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Guia VIrasoro</title>
		<meta name="keywords" content="Virasoro Gdor Ing. Valentin Corrientes Las Marias Esteros Turismo Vuelta Ombu Taragui Primicia Pomera Tapebicua Forestal Ganaderia" />
		<meta name="description" content="Guia de informacion de Gdor. Virasoro Corrientes">
		<meta name="author" content="virasorovirtual.com">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Web Fonts  -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Herr+Von+Muellerhoff">

		<!-- Libs CSS -->
		<link href="/css/bootstrap.css" rel="stylesheet">
		<link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="/css/animate.css" rel="stylesheet">
		<link href="/css/prettyPhoto.css" rel="stylesheet">
		<link href="/style.css" rel="stylesheet">

</head>

<body>
		<!-- scroll down navigation bar -->
		<nav class="navbar navbar-fixed-top" role="navigation">
				<div class="container">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="fa fa-bars"></span>
								</button>

						</div>

						<!-- navigation links -->
						<div class="collapse navbar-collapse">
								<ul class="nav navbar-nav navbar-right">
										<li><a href="/">Home</a></li>
										<li><a href="/telefonos/create">Sugerir</a></li>

										@if (Sentry::check())
										<li {{ (Request::is('users/show/' . Session::get('userId')) ? 'class="active"' : '') }}><a href="{{ URL::to('users') }}/{{ Session::get('userId') }}">{{ Session::get('email') }}</a></li>
										<li><a href="{{ URL::to('logout') }}">{{trans('pages.logout')}}</a></li>
										@else
										<li {{ (Request::is('login') ? 'class="active"' : '') }}><a href="{{ URL::to('login') }}">{{trans('pages.login')}}</a></li>
										@endif




										@if (Auth::user())
										<li>
											<a href="/perfil">
												<i class="entypo-user right"></i> {{ Auth::user()->username }}
											</a>
										</li>
										@endif


								</ul>
						</div> <!-- end navigation links -->
				</div>
		</nav> <!-- end scroll down navigation bar -->

		<!-- header - homepage -->
		<header id="homepage" class="nav-link">

				<!-- background overlay -->
				<span class="mask-overlay"></span>

				<div class="container">
						<div class="row">

								<!-- homepage intro -->
								<section class="intro col-lg-12">

												<!-- homepage logo - write your site name -->
												<h1 class="intro-brand animate" data-animate="bounceInDown"><a href="/">Guia Virasoro</a></h1>

								</section> <!-- end homepage intro -->
						</div>
				</div>
		</header> <!-- end header - homepage -->

		<section class="wrapper">
				<div class="container">

						<section id="features" class="features row nav-link">

										<!-- heading - write some descriptional text -->
										<div class="heading col-lg-12">


									@yield('content')

						</div>

						</section> <!-- end features section -->


				</div> <!-- end container -->
		</section> <!-- end wrapper section -->

		<!-- footer section -->
		<footer>
				<div class="container">
						<div class="row">
								<div class="col-lg-12">

										<!-- footer website logo -->
										<h1 class="logo"><a href="http://www.virasorovirtual.com">VirasoroVirtual.com</a></h1>

										<!-- footer social icons -->
										<ul class="list-unstyled list-inline footer-social">
												<li><a class="fa fa-facebook" href="http://www.facebook.com/virasorovirtual"></a></li>
												<li><a class="fa fa-twitter" href="http://www.twitter.com/virasorovirtual"></a></li>
										</ul>

										<!-- footer copyright -->
										<p>copyright © 2014 <a href="http://www.codexcontrol.com">CodexControl</a> - Software Factory.</p>
								</div>
						</div>
				</div>
		</footer> <!-- end footer section -->

		<!-- Libs -->
		<script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.10.2.js"><\/script>')</script>

		<script src="js/bootstrap.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.scrollTo.min.js"></script>
		<script src="js/jquery.localScroll.min.js"></script>
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.prettyPhoto.js"></script>
		<script src="js/jquery.touchSwipe.min.js"></script>
		<script src="js/jquery.fitvids.js"></script>

		<!-- Custom JS -->
		<script src="js/custom.js"></script>


</body>
</html>
