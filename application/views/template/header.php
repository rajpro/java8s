<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>UDEMA | Modern Educational site template</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?=base_url('assets')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('assets')?>/css/style.css" rel="stylesheet">
	<link href="<?=base_url('assets')?>/css/vendors.css" rel="stylesheet">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link href="<?=base_url('assets')?>/css/icon_fonts/css/all_icons.min.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?=base_url('assets')?>/css/custom.css" rel="stylesheet">

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="index.html"><img src="<?=base_url('assets')?>/img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
		</div>
		<ul id="top_menu">
			<li><a href="login.html" class="login">Login</a></li>
			<li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
			<li class="hidden_tablet"><a href="admission.html" class="btn_1 rounded">Admission</a></li>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="#0">Home</a></span>
					<ul>
						<li><a href="index.html">Home version 1</a></li>
						<li><a href="index-2.html">Home version 2</a></li>
						<li><a href="index-6.html">Home version 3</a></li>
                        <li><a href="index-3.html">Home version 4</a></li>
						<li><a href="index-4.html">Home version 5</a></li>
						<li><a href="index-5.html">With Cookie bar (EU law)</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Courses</a></span>
					<ul>
						<li><a href="courses-grid.html">Courses grid</a></li>
						<li><a href="courses-grid-sidebar.html">Courses grid sidebar</a></li>
						<li><a href="courses-list.html">Courses list</a></li>
						<li><a href="courses-list-sidebar.html">Courses list sidebar</a></li>
						<li><a href="course-detail.html">Course detail</a></li>
                        <li><a href="course-detail-2.html">Course detail working form</a></li>
						<li><a href="admission.html">Admission wizard</a></li>
						<li><a href="teacher-detail.html">Teacher detail</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Pages</a></span>
					<ul>
						<li><a href="menu_2/index.html">Menu 2</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="login.html">Login</a></li>
						<li><a href="register.html">Register</a></li>
						<li><a href="contacts.html">Contacts</a></li>
						<li><a href="404.html">404 page</a></li>
						<li><a href="agenda-calendar.html">Agenda Calendar</a></li>
						<li><a href="faq.html">Faq</a></li>
						<li><a href="help.html">Help</a></li>
					</ul>
				</li>
				<li><span><a href="#0">Extra Pages</a></span>
					<ul>
                    	<li><a href="admin_section/index.html" target="_blank">Admin-Dashboard <strong>New!</strong></a></li>
						<li><a href="media-gallery.html">Media gallery</a></li>
						<li><a href="cart-1.html">Cart page 1</a></li>
						<li><a href="cart-2.html">Cart page 2</a></li>
						<li><a href="cart-3.html">Cart page 3</a></li>
						<li><a href="pricing-tables.html">Responsive pricing tables</a></li>
						<li><a href="coming_soon/index.html">Coming soon</a></li>
						<li><a href="icon-pack-1.html">Icon pack 1</a></li>
						<li><a href="icon-pack-2.html">Icon pack 2</a></li>
						<li><a href="icon-pack-3.html">Icon pack 3</a></li>
						<li><a href="icon-pack-4.html">Icon pack 4</a></li>
					</ul>
				</li>
				<li><span><a href="https://1.envato.market/Gk0PV" target="_parent">Buy template</a></span></li>
			</ul>
		</nav>
		<!-- Search Menu -->
		<div class="search-overlay-menu">
			<span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
			<form role="search" id="searchform" method="get">
				<input value="" name="q" type="search" placeholder="Search..." />
				<button type="submit"><i class="icon_search"></i>
				</button>
			</form>
		</div><!-- End Search Menu -->
	</header>
	<!-- /header -->