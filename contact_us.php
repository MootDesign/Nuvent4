			<!DOCTYPE html>
	<head>
		<title>MDT Nuvent</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/slick.css"/>
		<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
		<link rel="stylesheet" href="css/LivIconsEvo.css">
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDovnhsefsgMcKLLFD5rb9PC4bPWOSaGbI&callback=initMap" async defer></script>
		<script src="js/jquery-1.12.4.min.js"></script>
		<script src="js/scrollreveal.min.js"></script>
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
			    		<p style="color: #fff">*By checking this box and providing information, I understand and agree that my personal information is being collected by Medtronic and entered into a database for the purpose of communicating offers and specials related to Medtronic products, services and technological advancements.<br>
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
			<style type="text/css">
				.slick-arrow {
					display: none !important;
				}
				.normal-heading {
					cursor: pointer;
				 	color:#FFF;
					width:100%;
				 	background:#000e46;
				 	height:50px;
					font-size:20px;
					font-weight:400;
				 	margin:0 0 1px 0;
				 	padding:14px 30px 0 30px; }

				.ui-accordion-content {
				 	background:#FFF;
				 	padding:25px 30px; }
					.ui-accordion-content p {
					 	margin:0px;
					 	font-size:18px;
					 	line-height:22px; }

				.ui-icon-plus::before {
				 	content: url('/img/plus-white.png'); }
				.ui-icon-minus::before {
				 	content: url('/img/minus-white.png'); }

				.ui-icon-plus, .ui-icon-minus {
				 	float: right; }

				.accordion-expand-collapse a {
				 	float:right;
				 	font-size:14px;
					cursor:pointer;
					color:#001c3d; }

				.footer-inpage-nav {
					display: none;
				}
			</style>
			<script type="text/javascript">
				  $( function() {
    				$( "#accordion" ).accordion({
    						active: false,
      					collapsible: true,
      					heightStyle: "content",
								icons: { "header": "ui-icon-plus", "activeHeader": "ui-icon-minus" }
    					});
  					} );
			</script>
			<div class="static-slider slider-all pad-bott-50">
  				<div>
  					<img class="main-image" src="/img/banner/banner-v2girl.jpg" width="100%" class="">
  					<img class="main-image-scaled" src="/img/banner/banner-v2girl-scaled.jpg" width="100%" class="">
  					<img class="nuvent-logo" src="img/banner/nuVentLogo.png">
  					<p class="first-slide-1"><span>finding your way</span></p><br><p class="first-slide-2"><span style="color: #FEBC11; font-family: medtronic_bold;">to sinus relief</span></p>
					<span class="medtronic-border"></span>
  				</div>
			</div>

			<div class="container-full-width hide-desktop-grid medtronic-mid-bg">
				<div class="container override-container paragraph" style="color: #ffffff; margin-bottom: 0px;">
					<a href="#faqs"><div class="col-md-6 button-div box-left-reveal" style="width: 470px; height: 235px; background-color: #0085CA; padding-top: 20px; color: #ffffff;">
						Frequently asked questions
						<p class="grid-text-body"><p><button class="btn btn-button btn-account" style="max-width: 140px; text-transform: uppercase;">Find out more</button></p></p>
					</div></a>
					<a href="#contact_us"><div class="col-md-6 button-div3 box-right-reveal" style="width: 470px; height: 235px; background-color: #001E46; padding-top: 20px; color: #ffffff">
						Contact Us
						<p class="grid-text-body"><button class="btn btn-button btn-product" style="max-width: 140px; text-transform: uppercase;">click here</button></p>
					</div></a>
				</div>
			</div>
			<p id="faqs" style="background:#FFF; float:left; padding-bottom:50px; margin:0; width:100%;"></p>
			<div class="container-full-width">
			<div class="container override-container paragraph paragraph-reveal" style="margin-bottom:0px; ">
				<a class="inpage-links"><p><span class="bold-heading bold-heading-light">Frequently asked questions</span></p></a>
			</div>
				<div class="container override-container pad-bott-50 paragraph no-bottom-margin mob-no-padd">
					<div class="col-sm-12 paragraph-reveal" style="padding-left:0px; padding-right:0px;">
						<div class="accordion-expand-collapse"><a></a></div>
						<div style="clear:both;"></div>
						<div id="accordion">
							<h3 class="normal-heading">What are the Advantages of Image-Guided Surgery ?</h3>
								<div>
									<p>
										<span class="normal-text">A Navigation system, by providing image guidance to surgeons, helps them to precisely place the balloon in your blocked sinuses. They have access to maximum amount of information about your unique anatomy for safer, more thorough procedures.</span>
									</p>
								</div>
							<h3 class="normal-heading">Will Balloon sinus surgery hurt</h3>
								<div>
									<p>
										<span class="normal-text">Most people find it tolerable and experience little to mild pain.(1) During the procedure, you may feel pressure associated with no pain or some brief pain. (2)</span>
									</p>
								</div>
							<h3 class="normal-heading">Can Balloon sinus surgery be done in a doctor's office ?</h3>
								<div>
									<p>
										<span class="normal-text">Yes</span>
									</p>
								</div>
							<h3 class="normal-heading">How long does balloon sinus surgery typically take to perform?</h3>
								<div>
									<p>
										<span class="normal-text">The duration of the procedure is usually short, as is the in-office recovery time.(2) Talk with your doctor's office for more details as they may need more time for pre-surgery preparation and post-surgery recovery.</span>
									</p>
								</div>
							<h3 class="normal-heading">How quickly will I recover from surgery?</h3>
								<div>
									<p>
										<span class="normal-text">Balloon Sinus Surgery has be shown to have a faster recovery time (averaging 1.7 days) compared with other types of sinus surgery.(3)</span>
									</p>
								</div>
							<h3 class="normal-heading">Where can I find an ENT surgeon using Navigation system for sinus surgeries?</h3>
								<div>
									<p>
										<span class="normal-text">Use the Find a Doctor search tool to locate a specialist who uses Navigation system in your area</span>
									</p>
								</div>
					</div>
					<div class="container override-container references pad-top-50" style="line-height: 1;">
						<div class="col-sm-9 paragraph-reveal">
							<p><span style="margin-bottom:0px;" class="bold-heading">References</span><br>
							<span class="normal-text sources-ref"><sup>1</sup>Sikand A. Introduction to an office-based sinus surgery<br> technique.Operative Techniques Otolaryngol. 2011;22:249-252.
							</span>
							<span class="normal-text sources-ref"><sup>2</sup>Silvers SL. Practical techniques in office-based balloon sinus<br> dilation.Operative Techniques Otolaryngol. 2014;25:206-212.
							</span>
							<span class="normal-text sources-ref"><sup>3</sup>Chandra RK, Kern RC, Cutler JL, et al. REMODEL larger cohort<br> with long-term outcomes and meta-analysis of standalone balloon<br>
							 dilation studies. Laryngoscope. 2016;126(1):44-50.
							</span>
							</p>
						</div>
					</div>
					</div>
					<p style="background:#FFF;"><a id="contact_us"></a></p>
				</div>
			</div>
			<style type="text/css">

				label {
    				position: relative;
    				top: -35px;
    				padding: 0px 9px 9px;
    				float: left;
    				font-weight: 500;
    				margin-bottom: -20px;
 				}
 				input:focus + label {
    				top: -45px;
    				font-size: 10px;
    				position: relative;
    				-moz-transition:all 0.2s ease-in-out;
    				transition:all 0.2s ease-in-out;
  				}
 				.form-group {
 				  margin-bottom: 0px;
 				  max-width: 410px;
 				}
  				.form-control {
  				  border: 1px solid #002554;
  				  border-radius: 0;
  				  background-color: transparent;
  				}
  				.contact-form input[type="text"]:valid + label {
  				  top: -45px;
  				  font-size: 10px;
				}
				.form-submit-button:hover {
					background: #B1B3B3 !important;
					color: #ffffff !important;
				}
			</style>

			<div class="container override-container paragraph mar-bott-68" style="font-size: 18px;">
				<div class="col-sm-9">
					<p><span class="bold-heading bold-heading-light paragraph-reveal">Contact us</span></p>
					<form action="#" class="contact-form paragraph-reveal">
					<div class="form-group">
 					  <input type="text" class="form-control sc-fm" id="title" required="required">
 					  <label for="title">Title</label>
 					</div>

 					<div class="form-group">
 					  <input type="text" class="form-control sc-fm" id="firstname" required="required">
 					  <label for="firstname">First Name</label>
 					</div>

  					<div class="form-group">
  					  <input type="text" class="form-control sc-fm" id="lastname" required="required">
  					  <label for="lastname">Last Name</label>
  					</div>

    				<div class="form-group">
   						<input  type="text" class="form-control sc-fm" id="emailaddress" required="required">
    					<label for="emailaddress">Email Address</label>
  					</div>

      				<div class="form-group">
      				<textarea id="message" class="form-control" rows="3" placeholder="Your Message"></textarea>
    				</div>

					<div>
 					<input type="button" class="btn cfm-btn form-submit-button" style="background: transparent; border-radius: 0; color: #002554; border: 1px solid #002554; max-width: 110px; text-align: left;" name="s" value="SEND"/>
    				</div>
    			</form>

    				<div class="container override-container references pad-top-50 no-bottom-padding paragraph-reveal disclaimer" style="line-height: 1;">
						<p><span class="bold-heading no-bottom-margin">Disclaimer</span><br>
						<span class="normal-text">By clicking 'Send' I confirm that I have read & accept Terms & Conditions *</span>
						</p>
						<p>
							<span class="normal-text">
								This may include sending me information about the sinus surgery,<br>
								product updates that are relevant to me and contacting me for feed<br>
								back concerning product support satisfaction
   							</span>
						</p>
						<p>
							<span class="normal-text">
								The processing activities may also be carried out by other affiliates of<br>
								Medtronic and their sub-processors, inside and outside the European<br>
								Economic Area, in accordance with Medtronic's Privacy Statement
   							</span>
						</p>
						<p>
							<span class="normal-text">
								More information on how Medtronic treats personal data, as well as<br>
								on data subjects' rights with regard to their personal data, can be<br>
								found in Medtronic's Privacy Statement
   							</span>
						</p>
						<p>
							<span class="normal-text">
								 I can withdraw or update my consent at any time by writing to<br>
   								 Medtronic or via the website
   							</span>
						</p>
					</div>
				</div>
			</div>

				<style type="text/css">
			@media screen and (-webkit-min-device-pixel-ratio:0) {
				.webkit-fix {
					position: relative;
					top:3px; }
			}
		</style>
		<div class="container-full-width medtronic-light-bg footer-inpage-nav">
			<div class="container override-container mob-no-padd" style="color: #ffffff;">
				<a href="<?=$heading5link?>"><div class="col-sm-3 box-left-reveal" style="height: 100px;background: #001E46; line-height: 21px; text-transform: uppercase;">
					<p style="padding: 20px; font-family: medtronic_bold;"><?=$heading5?></p>
				</div></a>
				<a href="<?=$heading6link?>"><div class="col-sm-3 box-center-reveal" style="height: 100px;background: #0085CA; line-height: 21px; text-transform: uppercase;">
					<p style="padding: 20px; font-family: medtronic_bold;"><?=$heading6?></p>
				</div></a>
				<a href="<?=$heading7link?>"><div class="col-sm-3 box-center-reveal" style="height: 100px;background: #001E46; line-height: 21px; text-transform: uppercase;">
					<p style="padding: 20px; font-family: medtronic_bold;"><?=$heading7?></p>
				</div></a>
				<a href="<?=$heading8link?>"><div class="col-sm-3 box-right-reveal mob-false" style="height: 100px;background: #0085CA; line-height: 21px; text-transform: uppercase;">
					<p style="padding: 20px; font-family: medtronic_bold;"><?=$heading8?></p>
				</div></a>
				<a href="<?=$heading8link?>"><div class="col-sm-3 mob-true box-center-reveal" style="height: 100px;background: #0085CA; line-height: 21px; text-transform: uppercase;">
					<p style="padding: 20px; font-family: medtronic_bold;"><?=$heading8?></p>
				</div></a>
			</div>
		</div>
		<div class="navbar navbar-default navbar-static-bottom navbar-style-bottom">
			<div class="container-full-width footer-part1">
					<a href="find_a_doctor.php"><p class="doctor-message foo" align="center" style="">Find a Doctor for your sinusitis needs <span class="webkit-fix" style="font-size: 25px; display:inline-block; vertical-align: center;">&rarr;</span></p></a>
			</div>
			<div class="container override-container" style="color: #ffffff; min-height: 140px; padding-top: 50px;">
				<div class="row">
					<div class="col-md-5 footer-left-side">
						<p>&copy;2016 Medtronic</p>
					</div>
					<div class="col-md-7 pull-right footer-links footer-right-side" align="right">
					<ul><li>Terms of use</li> </ul>
					<!--<ul><li>Title</li> </ul>
					<ul><li>Contact</li></ul>-->
					<ul><li class="secondlast">Privacy Statement</li> </ul>
					<ul style="padding-left:0px; margin-right:50px;"><li style="margin-right: 40px;"><img src="img/facebook-logo.png" style="width: 35px; padding-right: 10px; display: none;">
					<img src="img/twitter-logo.png" style="width: 35px; padding-right: 10px;display: none;">
					</li> </ul>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
				$(document).ready(function(){
					$('.static-slider').slick({
  						slidesToShow: 1,
  						slidesToScroll: 0,
  						autoplay: false,
  						pauseOnFocus: false,
  						pauseOnHover: false,
						fade: false,
						mobileFirst: true,
  						cssEase: 'linear'
	  				});
	  			});
		</script>
		<script src="js/jquery.lazyload.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/moot-lazy.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/slick.min.js"></script>
		<script src="js/index.js"></script>
		<script src="js/tools/snap.svg-min.js"></script>
        <script src="js/tools/TweenMax.min.js"></script>
        <script src="js/tools/DrawSVGPlugin.min.js"></script>
        <script src="js/tools/MorphSVGPlugin.min.js"></script>
        <script src="js/tools/verge.min.js"></script>
        <script src="js/LivIconsEvo.defaults.js"></script>
        <script src="js/LivIconsEvo.min.js"></script>
				<script type="text/javascript">
						sr.reveal('.bar');
						sr.reveal('.foo', { origin: 'left', distance: '100px', duration: 800, reset:false });
						sr.reveal('.box-left-reveal', {origin: 'left', distance: '100px', delay: 900, duration: 800, reset:false});
						sr.reveal('.box-right-reveal', {origin: 'right', distance: '100px', delay:900, duration: 800, reset:false});
						sr.reveal('.box-center-reveal', {origin: 'bottom', distance: '100px', delay:300, duration: 800, reset:false});
						sr.reveal('.paragraph-reveal', {origin: 'bottom', distance:'100px', duration: 1000, scale:1, viewFactor:0.4, reset:false});
						sr.reveal('.four-arrow-reveal', {origin: 'left', distance: '100px', duration:800, scale:1, reset:false, afterReveal: function (domEl) {
								$(".flow-grid-1").css({ 'width': '0px'});
		        		$(".flow-grid-2").css({ 'width': '0px'});
		        		$(".flow-grid-3").css({ 'width': '0px'});
		        		$(".flow-grid-4").css({ 'width': '0px'});
								setTimeout(function () { $(".flow-grid-1").animate({ opacity: "1" }, 1500); }, 50);
								setTimeout(function () { $(".flow-grid-2").animate({ opacity: "1" }, 1500); }, 50);
								setTimeout(function () { $(".flow-grid-3").animate({ opacity: "1" }, 1500); }, 50);
								setTimeout(function () { $(".flow-grid-4").animate({ opacity: "1" }, 1500); }, 50);
		        		setTimeout(function () { $(".flow-grid-1").animate({ width: "100%" }, 1500); }, 100);
		        		setTimeout(function () { $(".flow-grid-2").animate({ width: "100%" }, 1500); }, 350);
		        		setTimeout(function () { $(".flow-grid-3").animate({ width: "100%" }, 1500); }, 600);
		        		setTimeout(function () { $(".flow-grid-4").animate({ width: "100%" }, 1500); }, 850);} });
						sr.reveal('.two-arrow-reveal', {origin: 'left', distance: '100px', delay:300, duration:800, scale:1, reset:false, afterReveal: function (domEl) {
								$(".arrow1").css({ 'width': '0px' });
								$(".arrow2").css({ 'width': '0px' });
								setTimeout(function () { $(".arrow1").animate({ width: "100%" }, 1000); }, 50);
								setTimeout(function () { $(".arrow2").animate({ width: "100%" }, 1500); }, 50);
								setTimeout(function() { $('.text-1').css("opacity", 1).css("left", "0%").css("transition", "all 1s linear"); }, 400);
								setTimeout(function() { $('.text-2').css("opacity", 1).css("left", "0%").css("transition", "all 1s linear"); }, 800);
								setTimeout(function() { $('.text-3').css("opacity", 1).css("left", "0%").css("transition", "all 1s linear"); }, 1200);
								setTimeout(function() { $('.text-4').css("opacity", 1).css("left", "0%").css("transition", "all 1s linear"); }, 1600);} });
				</script>
	</body>
</html>

		<script>
			/*$(document).on('click','.normal-heading', function( event ){
				$(".contact-answers").slideUp(500, "linear");
				$( event.target ).next().slideDown(500, "linear");
			});*/
		</script>
		<script type="text/javascript">
			$(".menu5 a").addClass("current-page");
		</script>
