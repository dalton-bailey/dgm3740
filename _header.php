<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php echo($ptitle); ?></title>
		<script src="https://kit.fontawesome.com/8ad599954f.js" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
			rel="stylesheet" />
		<link rel="stylesheet" href="/styles.css" />
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
	
		<style>
			html,
			body {
				margin: 0;
				padding: 0;
			}
	
			* {
				box-sizing: border-box;
			}
	
			.slider {
				width: 100%;
				/* margin: 100px auto; */
			}
	
			/* .slick-slide {
			  margin: 0px 20px;
			} */
	
			.slick-slide img {
				width: 100%;
			}
	
			.slick-slide {
				transition: all ease-in-out .3s;
				opacity: .2;
			}
	
			.slick-active {
				opacity: .5;
			}
	
			.slick-current {
				opacity: 1;
			}
		</style>
	</head>

<body>

	
<!-- HEADER STARTS HERE -->

	<header class="clearfix">
		<figure class="logo">
			<img src="images/cabot_cruises_logo.png" alt="logo" 
			srcset="images/cabot_cruises_logo1x.png 1x, images/cabot_cruises_logo2x.png 2x, images/cabot_cruises_logo3x.png 3x">
		</figure>
            <a href="tel:1-800-555-1234">1-800-345-6789</a>
	 </header>

	
    
<!-- NAV STARTS HERE -->
<div id="navWrapper">
<nav class="clearfix">
	<div class="search" style="float: right;">
		<input type="search" placeholder="search...">
		<button><i class="fas fa-search"></i></button>
	</div>
	<button id="hamburgerBtn">
		<span class="line top"></span>
		<span class="line middle"></span>
		<span class="line bottom"></span>
	</button>
        
	<ul id="primaryNav">
		<li class="current-menu-item"><a href="index.php">Home</a></li>
		<li><a href="cruises.php">Cruises</a></li>
		<li class="menu-item-has-children"><a href="#">Agents</a>
			<ul>
			<li><a href="agent1.php">Wendi</a></li>
			<li><a href="agent2.php">Billy</a></li>
			</ul>
		</li>
		<li><a href="booking.php">Book</a></li>
	</ul>

	</nav>
</div>