<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Udema a modern educational site template">
    <meta name="author" content="Ansonika">
    <title>Java8s | Boostup you'r Career with us.</title>

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
	<style>
		#top_menu {
			position:relative;
		}
		#collapseProfile {
			position: absolute;
			left: -100px;
			top: 59px;
			width: 200px;
		}
		#sidebar h6 {
			font-size:.8125rem;
		}
		.box_list_silan {
			background-color: #fff;
			display: block;
			position: relative;
			margin-bottom: 30px;
			min-height: 310px;
		}
	</style>

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_2">
		<div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
		<div id="logo">
			<a href="<?=base_url()?>">
				<h2>JAVA8S</h2>
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="login.html" class="login-two">
				<span class="badge bg-warning">0</span>
				<i class="fa fa-2x fa-cart-plus"></i>
			</a></li>
			<?php if(!empty($_SESSION['logged_in'])): ?>
			<li><a class="login-two">
				<i class="fa fa-2x fa-user" data-toggle="collapse" href="#collapseProfile" role="button" aria-expanded="false" aria-controls="collapseProfile"></i>
			</a>
			</li>
			<div class="collapse" id="collapseProfile">
				<div class="card 	">
					<table class="table">
						<tr>
							<td>
								<a href="#">Profile</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="#">Enrolled</a>
							</td>
						</tr>
						<tr>
							<td>
								<a href="<?=base_url('auth/logout')?>">logout</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<?php else: ?>
			<li><a href="<?=base_url('auth/login')?>" class="login-two" >
				<i class="fa fa-2x fa-lock"></i>
			</a></li>
			<?php endif; ?>
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu float-left">
			<ul>
				<li><span><a href="#0">Courses</a></span>
					<ul>
						<?php if(!empty($courses)):foreach($courses as $course): ?>
						<li><a href="<?=base_url('course-detail/'.$course['url'])?>"><?=$course['title']?></a></li>
						<?php endforeach;endif; ?>
					</ul>
				</li>
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