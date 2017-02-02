	<!DOCTYPE html>
	<head>
		<title>MDT Nuvent</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link rel="stylesheet" type="text/css" href="css/responsiveslides.css"/>
		<link rel="stylesheet" href="css/LivIconsEvo.css">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDovnhsefsgMcKLLFD5rb9PC4bPWOSaGbI&callback=initMap" async defer></script>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/scrollreveal.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		<script type="text/javascript">
			window.sr = ScrollReveal({ reset: true });
		</script>
		<script type="text/javascript">
			  function navToggle() {
			  	var height = $("#myNav").height();
			  	if (height == "0") {
			  		$(".navbar-nav li a").css("display", "none");
			  		$("body").css("overflow", "hidden");
			  		$(".navbar-default").css("background-color", "#000e46");
			  		$(".navbar-collapse").css("box-shadow", "none");
			  		$("#nav-icon3").toggleClass('open');
			  		$("#nav-icon3 span").css("background", "#ffffff");
			  		$(".shownormal").css("display", "none");
			  		$(".showalt").css("display", "block");
			  		$('body').bind('touchmove', function(e){e.preventDefault()});
			   		document.getElementById("myNav").style.height = "100%";
			   	}
			   	else if (height > "0") {
			   		document.getElementById("myNav").style.height = "0%";
			  		$("body").css("overflow", "auto");
			  		$(".navbar-default").css("background-color", "#ffffff");
			  		$("#nav-icon3").toggleClass('open');
			  		$("#nav-icon3 span").css("background", "#004b87");
			  		$(".navbar-nav li a").css("display", "block");
			  		$('body').unbind('touchmove');
			  		$(".showalt").css("display", "none");
					$(".shownormal").css("display", "block");
			   	}
			}
		</script>
		<script type="text/javascript">
			  function updateToggle() {
			  	var height = $("#getUpdates").height();
			  	if (height == "0") {
			  		$(".navbar-nav li a").css("display", "none");
			  		$(".navbar-default").css("background-color", "#000e46");
			  		$(".navbar-collapse").css("box-shadow", "none");
			  		$("#nav-icon3").toggleClass('open');
			  		$("#nav-icon3 span").css("background", "#ffffff");
			  		$(".hidemobile").css("display", "none");
			  		$(".showalt").css("display", "block");
			  		$(".showalt").css("margin-top", "5px");
			  		$(".showalt").css("position", "fixed");
			  		$('body').bind('touchmove', function(e){e.preventDefault()});
			   		document.getElementById("getUpdates").style.height = "100%";
			   	}
			   	else if (height > "0") {
			   		document.getElementById("getUpdates").style.height = "0%";
			  		$("body").css("overflow", "auto");
			  		$(".navbar-default").css("background-color", "#ffffff");
			  		$("#nav-icon3").toggleClass('open');
			  		$("#nav-icon3 span").css("background", "#004b87");
			  		$(".navbar-nav li a").css("display", "block");
			  		$('body').unbind('touchmove');
			  		$(".showalt").css("display", "none");
			  		$(".hidemobile").css("display", "initial");
					$(".shownormal").css("display", "block");
			   	}
			}
		</script>
	</head>
		<body style="background: #ffffff;">
	 	<div class="navbar navbar-default navbar-static-top" style="z-index: 10;">
			<div class="container override-container">
			<div style="display: inline-block">
				<a href="/">
					<img src="img/logo_rgb_png.png" class="showmobile shownormal" style="width: 220px; z-index: 2;">
					<img src="img/logo_rgb_png_alt.png" class="showalt" style="width: 220px; display: none;z-index: 2;">
				</a>
			</div>
					<div style="display: inline-block; float: right;">
				<button class="navbar-toggle" onclick="navToggle()">
					<div id="nav-icon3">
					  <span></span>
					  <span></span>
					  <span></span>
					  <span></span>
					</div>
				</button></div>
				<div class="collapse navbar-collapse navHeaderCollapse navbar-top-style">
					<a href="/"><img src="img/logo_rgb_png.png" id="logo" class="hidemobile" style="width: 220px; z-index: 2;"></a>
					<script type="text/javascript">
						$(function() {
							$('#logo').addClass('fade-in');
							$('.upper-top-links').addClass('fade-in');
						});
					</script>
					<ul class="nav navbar-nav navbar-right upper-top-links" style="text-transform: uppercase; color: #8b8b8b !important;">
						<li><br></li>
						<li style="cursor: pointer"><a onclick="updateToggle()">get updates</a></li>
						<li style=""><a href="contact_us.php#faqs">FAQ'S</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="navbar navbar-inverse navbar-static-top">
			<div class="container">
				<div class="collapse navbar-collapse navHeaderCollapse top-nav-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="menu1"><a class="last-in-fade" href="sinusitis.php">What is sinusitis</a></li>

						<li class="menu2"><a href="treatment_options.php">Treatment options</a></li>

						<li class="menu3"><a href="what_to_expect.php">What to expect</a></li>

						<li class="menu4"><a href="find_a_doctor.php">Find a doctor</a></li>

						<li class="menu5"><a href="contact_us.php">Contact us</a></li>
					</ul>
				</div>
			</div>
		</div>
		<script type="text/javascript">
		$(window).scroll(function() {
				if ($(this).scrollTop() > 85) {
						 $('.navbar-inverse').addClass('fix');
						 $('.slick-slider').addClass('spacer');
				} else {
						 $('.navbar-inverse').removeClass('fix');
						 $('.slick-slider').removeClass('spacer');
				}
			});
		</script>
			<!-- The overlay -->
			<div id="myNav" class="overlay">
			  <!-- Overlay content -->
			  <div class="overlay-content container">
			    <a href="sinusitis.php">What Is Sinusitis</a>
			    <a href="treatment_options.php">Treatment Options</a>
			    <a href="what_to_expect.php">What To Expect</a>
			    <a href="contact_us.php">Contact Us</a>
			    <div class="col-xs-6" style="background: #71c5e9; margin-top: 5%;">
					<p onclick="updateToggle()" style="padding: 10px; color: #000e46; font-size: 16px; text-transform: uppercase;">Get Updates</p>
			    </div>
			    <div class="col-xs-6" style="background: #0085ca; margin-top: 5%;">
					<p style="padding: 12px; color: #000e46; text-transform: uppercase;"><a href="find_a_doctor.php">Find a doctor</a></p>
			    </div>
			  </div>

			</div>

			<!-- The overlay -->
			<div id="getUpdates" class="overlay2">
			  <!-- Overlay content -->
			  <div class="overlay-content2 container">
			  	<div class="container override-container">
			  		<div class="col-xs-9" style="padding-left: 0px;">
			  			<p class="upper" style="font-size: 34px;">
			    		<span class="uppertitle">get</span><br>
			    		<span class="uppertitle">updates</span>
			    		</p>
			    		<p class="grid-text-body" style="margin-left: 0;">Please enter your email address<br> to receive future updates and information.</p>
			    		<br>
			    		<form style="color: #000">
			    		<input type="email" name="email" placeholder="    Email" required="required" style="background: transparent; color: #fff !important; font-size: 18px;"><br><br>
			    		<input type="checkbox" value="1" required="required">
			    		<p style="color: #fff">

			    		By checking this box and providing information, I confirm that I have read & accept Terms & Conditions *

			    		This may include sending me information about the sinus surgery,
						product updates that are relevant to me and contacting me for feed
						back concerning product support satisfaction<br><br>
						
						The processing activities may also be carried out by other affiliates of
						Medtronic and their sub-processors, inside and outside the European
						Economic Area, in accordance with Medtronic's Privacy Statement<br><br>
						
						More information on how Medtronic treats personal data, as well as
						on data subjects' rights with regard to their personal data, can be
						found in Medtronic's Privacy Statement<br><br>
						
						I can withdraw or update my consent at any time by writing to
						Medtronic or via the website.<br>
						</p>
			    		<button type="submit" class="btn btn-button btn-account" style="background: transparent; max-width: 120px; color: #ffffff">Submit</button>
			    		</form>
			    	</div>
			    	<div class="col-xs-3">
			    		<a href="javascript:void(0)" class="closebtn" onclick="updateToggle()">Close <span style="font-size: 30px;">&times;</span></a>
			    	</div>
			    </div>
			  </div>

			</div>
			<div class="uselessclass"></div>
			<div class="width_1680"></div>
			<!--<div class="uselessclass"></div>-->
