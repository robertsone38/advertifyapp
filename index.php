<!DOCTYPE html>
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope="" itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Nagdara Rentals</title>
	<meta name="description" content="">
	<meta name="keywords" content="Car Rentals in Tamale, Travel and Tour in Tamale, Car Rentals, Travel and Tour">
	<meta name="author" content="ETC Solutions">

	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="">
	<meta property="og:image" content="">
	<meta property="og:description" content="">
	<meta property="og:title" content="">

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
		 However, there is a blank style.css in the css directory should you prefer -->
	<link rel="stylesheet" href="css/gumby.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<script src="bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>

	<div class="modal" id="reserveModal">
	  <div class="content">
	    <a class="close switch" gumby-trigger="|#reserveModal"><i class="icon-cancel" /></i></a>
	    <div class="row">
	      <div class="twelve columns">
	        <h3 style="color:#fff;">Make a Ticket Reservation!</h3>

	        <p>
	        	<form id="ticket-request" action="formprocess.php" method="POST">
	        		<ul>
						<li class="field"><input class="input" type="text" name="fullName" placeholder="Full Name" required></li>
						<li class="field"><input class="input" name="email" type="email" placeholder="Email" required></li>
						<li class="field"><input class="input" name="phone" placeholder="Phone Number" id="phone" required></li>
						<li class="field"><textarea class="input textarea" name="message" placeholder="Where are you traveling to?" required></textarea></li>
						<li><div class="medium primary btn" ><input type="submit" name="submit" value="Send Request"></div></li>
					</ul>
				</form>
	        </p>
	      </div>
	    </div>
	  </div>
	</div>



	<div class="navbar" id="nav1" gumby-static="top">
		<div class="row">
		  <a class="toggle" gumby-trigger="#nav1 .row > ul" href="#"><i class="icon-menu"></i></a>
		  <h1 class="four columns logo">
		    <a href="index.html">
		      <img src="img/logo_3.png" gumby-retina />
		    </a>
		  </h1>
		  <ul class="eight columns">
		    <li class="active"><a href="http://www.timemanagementtravel.com">Home</a></li>
		    <li><a href="our-cars">Our Cars</a></li>
		    <li><a href="about-us">About Us</a></li>
		    <li><a href="contact-us">Contact Us</a></li>
		  </ul>
		</div>
	</div>


		<div id="sliderWrap" class="row" gumby-shuffle="only screen and (max-width: 860px) and (min-width: 768px)|2-1-0,only screen and (max-width: 767px)|1-0-2">
			<div class="twelve columns">
				<ul class="Caurosel-slides">
				  <li><img src="img/landcruz.png"/></li>
				  <li><img src="img/navara.png"/></li>
				  <li><img src="img/yutong.png"/></li>
				</ul>
			</div>
		</div>


		<div class="row">
			<div class="centered twelve columns" style="text-align:center; margin: 15px 0 -10px 0;"><h3 id="featured-airlines">Featured Cars</h3></div>
		</div>

	<div class="row" gumby-shuffle="only screen and (max-width: 860px) and (min-width: 768px)|2-1-0,only screen and (max-width: 767px)|1-0-2">
				<div class="Top-feature">
			<section class="four columns">
				<div class="airLines">
					<img gumby-default="img/v8.jpg" gumby-media="@media only screen and (min-width: 960px)|/img/antrak-1.png, @media only screen and (max-width: 767px)|img/antrak-1.png, @media only screen and (max-width: 320px)|img/antak-1.jpg"  />
				</div>
			</section>

			<section class="four columns">
				<div class="airLines">
					<img gumby-default="img/lincoln.jpg" gumby-media="@media only screen and (min-width: 960px)|/img/africaworld-1.png, @media only screen and (max-width: 767px)|img/aworld-1.png, @media only screen and (max-width: 320px)|img/africaworld-1.png"  />
				</div>
			</section>

			<section class="four columns">
				<div class="airLines">
					<img gumby-default="img/hulux.jpg" gumby-media="@media only screen and (min-width: 960px)|/img/starbow-1.png, @media only screen and (max-width: 767px)|img/starbow-1.jpg, @media only screen and (max-width: 320px)|img/starbow-1.png"  />
				</div>
			</section>
		</div>
	</div>
	<?php include("includes/footer.inc.php");?>

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<!-- 2.0 for modern browsers, 1.10 for .oldie -->
	<script>
	var oldieCheck = Boolean(document.getElementsByTagName('html')[0].className.match(/\soldie\s/g));
	if(!oldieCheck) {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><\/script>');
	} else {
	document.write('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"><\/script>');
	}
	</script>
	<script>
	if(!window.jQuery) {
	if(!oldieCheck) {
	  document.write('<script src="bower_components/gumby/js/libs/jquery-2.0.2.min.js"><\/script>');
	} else {
	  document.write('<script src="bower_components/gumby/js/libs/jquery-1.10.1.min.js"><\/script>');
	}
	}
	</script>


	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/gumby.min.js"></script>
	<script src="bower_components/gumby/js/plugins.js"></script>
	<script src="bower_components/gumby/js/main.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/snowfall.min.js"></script>
	<script>
	 $(document).ready( function(){

	 	//snowFall.snow(document.body, {image: "img/flake.png", minSize: 18, maxSize:28});

	 	$('.Caurosel-slides').bxSlider({
	 		auto:true,
	 		controls:true,
	 		pager: true
	 	});
	 });
	 </script>
	<script type="text/JavaScript">
		$("#ticket-request").validate({
			rules: {
				fullName: {
					required:true,
					minlength:5
				},

				email: {
					required:true
				},

				phone: {
					required:true,
					digits:true,
					minlength:10
				},

				message: {
					required:true,
					minlength:10
				}
			}
		});
	</script>


	<!-- Change UA-XXXXX-X to be your site's ID -->
	<!--<script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
	</script>-->

	<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
	<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  </body>
</html>
