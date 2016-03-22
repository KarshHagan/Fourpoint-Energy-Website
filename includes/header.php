 <!DOCTYPE html>
<!--[if lt IE 9 ]>    <html lang="en" class="no-js ie ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class='no-js' lang='en' prefix='og: http://ogp.me/ns#'>
  <!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title><?php echo $pageTitle; ?></title>
	<meta name="description" content="<?php echo $pageDescription; ?>">
	<meta name="author" content="Karsh Hagan">
	<meta property="og:title" content="<?php echo $pageTitle; ?>" />
	<meta property="og:type" content="website" />
  	<meta property="og:description" content="<?php echo $pageDescription; ?>" />
  	<meta property="og:site_name" content="" />
  	<meta property="og:image" content="<?php echo $fbShareImg; ?>" />
  	
  	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/assets/css/style.css" />
	<link rel="stylesheet" href="/assets/css/stroll.css" />

	<!-- if on the gallery page, load fancybox css files -->
	<?php
		$currentpage = $_SERVER['REQUEST_URI'];
		if($currentpage === "/gallery/") {
			echo '<link rel="stylesheet" href="/assets/fancybox/source/jquery.fancybox.css" />';

			echo '<link rel="stylesheet" href="/assets/fancybox/source/helpers/jquery.fancybox-thumbs.css" />'; 
		}
	?>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
	<!-- <script>window.jQuery || document.write('<script src="/assets/js/libs/jquery-1.7.1.min.js"><\/script>')</script> -->
	<script type="text/javascript" src="/assets/js/libs/modernizr.js"></script>
	
	<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
	<link rel="shortcut icon" href="/favicon.ico">

	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="/apple-touch-icon-precomposed.png">
	

	</head>
	<body>
		<nav>
			<section>
				<a class="logo" href="/">
					<img src="/assets/img/FourPoint_Logo.svg" alt="FourPoint Energy Logo">
				</a>
				<div class="nav_wrap">
					<div class="utility">
						<div class="search_wrap">
							<form class="search-container" action="">
							  <input id="search-box" type="text" class="search-box" name="q" />
							  <label for="search-box"><i class="fa fa-search search-icon"></i></label>
							  <input type="submit" id="search-submit" />
							</form>
						</div>
						<a href="/contact">Contact</a>
						<a href="#">Leasing/Selling</a>
						<a href="#" class="lease-sell">
							<div class="qmark">
								<img src="/assets/img/icons/icon-qmark.svg" />
							</div>
							<p class="tooltip">
								typewriter vice venmo austin. +1 cornhole four loko truffaut, listicle swag street art gochujang disrupt chambray man bun. Master cleanse asymmetrical kale chips meditation sustainable. Shoreditch yr iPhone irony tote bag, forage post-ironic aesthetic
							</p>	
						</a>
						<a class="btn" href="/login">Login</a>
					</div>
					<div id="mobile_menu" class="mobile_nav_icon">MENU&nbsp;&nbsp;<i class="fa fa-bars fa-2"></i></div>
					<div class="main_nav_wrap">
						<ul id="main_nav">
					    	<li class="more"><a href="#">about</a>
					    		<ul class="submenu">
					    			<li><a href="/our-history">Our History</a></li>
					    			<li><a href="/general-content-page">Who We Are</a></li>
					    			<li><a href="/areas-of-operation">Areas of Operation</a></li>
					    			<li><a href="#">Business Opportunities</a></li>
					    			<li><a href="/management-team">Management Team</a></li>
					    		</ul>
					    	</li>
					    	<li class="more"><a href="#">Business & Community</a>
					    		<ul class="submenu">
					    			<li><a href="#">Business Strategy</a></li>
					    			<li><a href="#">Community Promise</a></li>
					    			<li><a href="#">Health, Safety &amp; Environment</a></li>
					    			<li><a href="/industry-affiliations">Industry Affiliations</a></li>
					    		</ul>
					    	</li>
					    	<li class="more wide"><a href="#">Interest Owners</a>
					    		<ul class="submenu">
					    			<li><a href="#">Owner Login</a></li>
					    			<li><a href="#">Owner Info</a></li>
					    			<li><a href="#">Check Stubs</a></li>
					    			<li><a href="#">JIM Statements</a></li>
					    			<li><a href="#">Change of Ownership</a></li>
					    			<li><a href="#">FAQ</a></li>
					    			<li><a href="#">Contact Info</a></li>
					    		</ul>
					    	</li>
					    	<li><a href="#" id="investors-link">Investors</a></li>
					    	<li class="more"><a href="#">News</a>
					    		<ul class="submenu">
					    			<li><a href="#">Features</a></li>
					    			<li><a href="/press-releases">Press Releases</a></li>
					    			<li><a href="/frequently-asked-questions">Presentations &amp; Fact Sheet</a></li>
					    			<li><a href="#">The Natural Gas Story</a></li>
					    			<li><a href="/gallery">Events &amp; Media Gallery</a></li>
					    		</ul>
					    	</li>
					    	<li><a href="/join-our-team">Careers</a></li>
							<li class="mobile_utility"><a href="/contact">Contact</a></li>
							<li class="mobile_utility"><a href="#">Leasing/Selling</a></li>
							<li class="mobile_utility">
						    	<div class="search_wrap">
									<form class="search-container" action="">
									  <input id="search-box" type="text" class="search-box" name="q" />
									  <label for="search-box"><i class="fa fa-search search-icon"></i></label>
									  <input type="submit" id="search-submit" />
									</form>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</nav>
		
