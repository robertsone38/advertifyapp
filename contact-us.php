<?php

$msg = " ";
if(isset($_POST['contact'])){

	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['senderphone'];
	$message = $_POST['message'];

	if(empty($fullname) AND empty($email) AND empty($phone) AND empty($message)){
		$msg='<p style="color:#ff0000;">all fields are required.</p>';
	}else{
	 $to = "robertsone38@yahoo.com";
	 $from = $email;
	 $subject="Nagdara Web Contact System";
	 $body = "A customer has just contacted you with the following information. Please do well, to
	 contact the person as soon as possible.\n";
	 $body .=" Full Name: $fullname \n";
	 $body .=" Email: $email \n";
	 $body .=" Phone Number: $phone \n";
	 $body .=" Comments: $message \n";
	 if(!mail($to,$subject,$body,'info@nagdararentals.com \r\n')){
	 $msg= "We could not sent your Message at this time.Please try again.";
	}else{
		$msg ='<p style="color:#bad337;">Message successfully sent</p>';
		}
	}

}


?>
<!doctype html>
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope="" itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Contact-Us - Nagdara Rentals</title>
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
	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="bower_components/gumby/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<body>

	<div class="bounce modal" id="reserveModal">
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
		    <a href="http://www.nagdararentals.com">
		      <img src="img/logo_3.png" gumby-retina />
		    </a>
		  </h1>
		  <ul class="eight columns">
		    <li><a href="http://www.nagdararentals.com">Home</a></li>
		    <li><a href="our-cars">Our Cars</a></li>
		    <li><a href="about-us">About Us</a></li>
		    <li class="active"><a href="contact-us">Contact Us</a></li>
		  </ul>
		</div>
	</div>

	<div id="page-header">
	<div class="row" gumby-shuffle="only screen and (max-width: 860px) and (min-width: 768px)|2-1-0,only screen and (max-width: 767px)|1-0-2">
			<section class="twelve columns">
					<img class="img-heading" src="img/top-headerbg.jpg" alt="header" width="195"/>
					<h3 class="page-heading-3">CONTACT US</h3>
				<div class="contact"></div>
			</section>
	</div>
	</div>

	<div class="row">
		<section class="six columns">
			<div class="team-group">
				<p><strong>CONTACT FORM</strong></p>
				<?php echo $msg;?>
				<form id="contact-form" action=" " method="POST">
					<ul>
						<li class="field"><input class="input" type="text" name="name" placeholder="Full Name"></li>
						<li class="field"><input class="input" type="email" name="email" placeholder="Email"></li>
						<li class="field"><input class="input" type="phone" name="senderphone" placeholder="Phone Number" ></li>
						<li class="field"><textarea class="input textarea" name="message" placeholder="Write your message" rows="3"></textarea></li>
						<li><div class="medium primary btn" ><input type="submit" name="contact" value="Get in touch"></div></li>
					</ul>
				</form>
			</div>
		</section>

		<section class="six columns">
			<div class="team-group">
				<p><strong>CONTACT INFORMATION</strong></p>
				<p> Our friendly sales staff can be
							reached Monday through Sunday from 7:00 GMT to 19:00 GMT.
							Send us your enquiry or simple call us.</p>
				<p><strong>POSTAL ADDRESS</strong><p>
				<p style="margin-left:32px;"> Time Management Travel and Tour <br />
						P. O. Box TL 29, <br />
						Tamale - Northern Region.</p>
				<p><strong>PHONE</strong></p>
				<p style="margin-left:32px;"> Office: +233 3720 28170 <br />
						Mobile: +233 2066 66020 <br />
						Mobile: +233 5069 68691</p>
			</div>
		</section>
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


	<!--
	Google's recommended deferred loading of JS
	gumby.min.js contains gumby.js, all UI modules and gumby.init.js

	Note: If you opt to use this method of defered loading,
	ensure that any javascript essential to the initial
	display of the page is included separately in a normal
	script tag.

	<script type="text/javascript">
	function downloadJSAtOnload() {
	var element = document.createElement("script");
	element.src = "js/libs/gumby.min.js";
	document.body.appendChild(element);
	}
	if (window.addEventListener)
	window.addEventListener("load", downloadJSAtOnload, false);
	else if (window.attachEvent)
	window.attachEvent("onload", downloadJSAtOnload);
	else window.onload = downloadJSAtOnload;
	</script>
	<script src="js/jquery-1.10.min.js"></script>-->
	<script src="js/gumby.min.js"></script>
	<script src="bower_components/gumby/js/plugins.js"></script>
	<script src="bower_components/gumby/js/main.js"></script>
	<script src="js/additional-methods.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
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

		$("#contact-form").validate({
			rules: {
				name:{
					required:true,
					minlength:5
				},

				senderphone:{
					required:true,
					digits:true,
					minlength:10,
					maxlength:14
				},
				email:{
					required:true
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
