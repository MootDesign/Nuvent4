		<?php
			require 'header.php';
		?>
			<style type="text/css">
				.slick-arrow {
					display: none !important;
				}
				.my-slides, .medtronic-border {
					display: none;
				}
				.first-slide p  {
					visibility: hidden;
				}
				.footer-inpage-nav {
					display: none;
				}
				.menu1, .menu2, .menu3, .menu4, .menu5 {
    				position: relative;
    				top: -5em;
    				opacity: 0;
    				transition: all 2s ease-in-out;
        			-webkit-transition: all 2s ease-in-out;
        			-moz-transition: all 2s ease-in-out;
        			-o-transition: all 2s ease-in-out;
        			-ms-transition: all 2s ease-in-out;
				}

				/* SVG STYLES .svg-wrapper {
				  background: transparent;
				  position: relative;
					max-width:940px;
				  width: 100%;
				  height: 412px;
				  top: 16%;
				  left: 11%; }
				  .svg-wrapper svg {
				    position: absolute;
						top:0;
						left:0;
					 	display:block;}

				.outline {
				  width: 100%;
				  height: 100%;
				  stroke-dasharray: 3760;
				  stroke-dashoffset: 3760;
				  stroke-width: 18px;
				  fill: transparent;
				  stroke: #0f4b85;
				  transition: stroke-dashoffset 2s, stroke-dasharray 2s; }

				@keyframes dash {
				  from {
				    stroke-dashoffset: 1500; }
				  to {
				    stroke-dashoffset: 0; } }
				.svg-wrapper:hover .outline {
				  stroke-dashoffset: 0; } */

			</style>
	<style type="text/css">
	.rslides img {
 	 	width: 100%;
	}
	p.caption {
		display: none!important;
	}
	ul.transparent-btns_tabs.transparent-btns1_tabs {
   	 display: none;
	}
	.transparent-btns1_on img {
		transform: scale(1.1);
	}
	</style>
			<script type="text/javascript">
				$(document).ready(function(){
  /*$('.bxslider').bxSlider({
    adaptiveHeight: true,
      mode: 'fade',
      captions: true,
      auto: true,
      pause: 6000
  });*/
  $("#slider4").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        prevText: "",
        nextText: "",
        speed: 1000,
        timeout: 8000,
        width: 100,
        namespace: "transparent-btns",
        before: function () {
          $('.caption').fadeOut("slow");
          $('.main-image').css("transform", "scale(1.0)");
          $('.main-image').css("transition", "all 1s ease-in");
        },
        after: function () {
          $('.caption').fadeIn("slow");
          $('.main-image').css("transition", "all 8s ease-in");
        }
      });
});

</script>

			<div class="callbacks_container" style="margin-bottom: 68px;">
  <ul class="rslides" id="slider4">
    <li onclick="window.location.href='#'">
      <img class="main-image" src="/img/banner/banner-v2girl.jpg" alt="">
      <img class="main-image-scaled" src="/img/banner/banner-v2girl-scaled.jpg" alt="">
      <p class="caption caption-desktop">Slide One</p>
      <div class="medtronic-border"></div>
    </li>
    <li onclick="window.location.href='#'">
      <img class="main-image" src="/img/banner/banner- v2 family2b.jpg" alt="">
      <img class="main-image-scaled" src="/img/banner/banner- v2 family2b-scaled.jpg" alt="">
      <p class="caption caption-desktop">Slide Two</p>
      <div class="medtronic-border"></div>
    </li>
    <li onclick="window.location.href='#'">
      <img class="main-image" src="/img/banner/banner-v2bike.jpg" alt="">
      <img class="main-image-scaled" src="/img/banner/banner-v2bike-scaled.jpg" alt="">
      <p class="caption caption-desktop">Slide Three</p>
      <div class="medtronic-border"></div>
    </li>
    <li onclick="window.location.href='#'">
      <img class="main-image" src="/img/banner/banner-v2woman.jpg" alt="">
      <img class="main-image-scaled" src="/img/banner/banner-v2woman-scaled.jpg" alt="">
      <p class="caption caption-desktop">Slide Four test</p>
      <div class="medtronic-border"></div>
    </li>
  </ul>

</div> 
			<!--<div class="svg-wrapper">
			  <svg viewBox="0 0 940 412" xmlns="http://www.w3.org/2000/svg">
			    <rect class="outline" />
			  </svg>
			</div>-->
			<div class="container override-container paragraph first-container">
				<div class="col-sm-9 paragraph-reveal">
					<p><span class="bold-heading bold-heading-light">Stuck with chronic rhinosinusitis pain and suffering?</span></p>
					<p><span class="normal-text">If you have chronic sinusitis, you know that symptoms like
					headaches, ongoing facial pain and pressure, and breathing
					problems can drag down your daily life.</span></p>
				</div>
			</div>

			<!-- DESKTOP GRID VIDEW -->

			<div class="container-full-width hide-desktop-grid medtronic-light-bg" style="margin-bottom: 60px;">
				<div class="container override-container" style="color: #ffffff">
  					<a href="sinusitis.php#sinusitis_link"><div class="col-md-3 md-override grid-section-1 button-div3 box-left-reveal">
    					<p class="upper"><span class="uppertitle">what is</span><br><span class="lowertitle">sinusitis</span></p>
						<p class="grid-text-body">Learn more about sinusitis and related symptoms</p>
						<p><button class="btn btn-button btn-product"> Learn More</button></p>
  					</div></a>
 					 <a href="treatment_options.php#treatment_options"><div class="col-md-3 md-override grid-section-2 button-div box-center-reveal">
    					<p class="upper"><span class="uppertitle">Treatment</span><br><span class="lowertitle">options</span></p>
						<p class="grid-text-body"> Learn about treatment options you may not have tried yet.</p>
						<p><button class="btn btn-button btn-account"> Learn More</button></p>
  					</div></a>
  					<a href="treatment_options.php#balloon"><div class="col-md-3 md-override grid-section-3 button-div3 box-center-reveal">
						<p class="upper"><span class="uppertitle">Balloon</span><br><span class="lowertitle">sinus surgery</span></p>
						<p class="grid-text-body">Consider the Balloon Sinuplasty.</p>
						<p><button style="margin-top: 45px;" class="btn btn-button btn-product"> Learn More</button></p>
  					</div></a>
  					<a href="find_a_doctor.php"><div class="col-md-3 md-override button-div grid-section-4 box-right-reveal">
    					<p class="upper"><span class="uppertitle">Ask your doctor</span><br><span class="lowertitle" >about navigated sinus surgery</span></p>
						<p class="grid-text-body">Help your doctor precisely <br> unblock sinuses.</p>
						<p><button class="btn btn-button btn-account"> Learn More</button></p>
					</div></a>
				</div>
			</div>

			<!-- MOIBLE GRID VIEW -->

			 <!--Row One-->
			 <div class="show-mobile-grid">
  				<div class="col-sm-12 show-mobile-grid button-div" id="grid-section-1-mobile" align="center">
  				  <div class="row pad-top-50">
  				    <p style="text-transform: uppercase; line-height: 21px;"><span style="">Treatment</span><br><span style="">options</span></p>
					<p style=""> Learn about treatment options you may not have tried yet.</p>
					<p><button class="btn btn-button btn-account"> Learn More</button></p>
  				  </div>
  				</div>
				<!-- Row Two -->
  				<div class="col-sm-12 show-mobile-grid button-div3" id="grid-section-3-mobile" align="center">
  				  <div class="row pad-top-50">
  				    <p style="text-transform: uppercase; line-height: 21px;"><span style="">Balloon</span><br><span style="">sinuplasty</span></p>
					<p style="">Consider the Balloon Sinuplasty.</p>
					<p><button style="" class="btn btn-button btn-product"> Learn More</button></p>
  				  </div>
  				</div>
  				<!-- Row Three -->
  				<div class="col-sm-12 show-mobile-grid button-div" id="grid-section-4-mobile" align="center">
  				  <div class="row pad-top-50">
  				 <p style="text-transform: uppercase;"><span style="">Ask your doctor <br>about nuvent<sup>&reg;</sup></span></p>
							<p style="">a solution designed to help your doctor precisely locate and unblock sinuses.</p>
							<p><button class="btn btn-button btn-account"> Learn More</button></p>
  				  </div>
  				</div>
  			</div>

			<div class="container override-container paragraph">
				<div class="col-sm-9 safety-information paragraph-reveal">
					<p><span class="bold-heading">Safety Information</span>
					<span class="normal-text">Balloon sinus surgery has associated risks, including tissue
					trauma, bleeding,<br> infection, and possible ophthalmic injury. This
					therapy is not for everyone.<br> Information on this site should not be
					used as a substitute for talking with your<br> doctor. Always talk
					with your doctor about diagnosis and treatment information.</span></p>
				</div>
			</div>

			<!--<div class="container override-container references">
				<div class="col-sm-9 paragraph-reveal">
					<p><span class="bold-heading no-bottom-margin">References</span>
					<span class="normal-text sources-ref"><sup>1</sup>American Rhinologic Society. Adult Sinusitis.<br>
					http://care.american-rhinologic.org/adult_sinusitis.<br>
					Accessed September 16, 2015.
					</span>
					</p>
				</div>
			</div>-->
			<script type="text/javascript">
				$(document).ready(function(){
					$('.home-slider').slick({
  						slidesToShow: 1,
  						slidesToScroll: 1,
  						autoplay: true,
  						pauseOnFocus: false,
  						pauseOnHover: false,
  						autoplaySpeed: 6000,
						fade: true,
  						cssEase: 'linear'
	  				});
				setTimeout(function() {
	  				$('.menu1').css("opacity", 1).css("top", "0em").css("transition", "all 1s linear");
	  			}, 50);
	  			setTimeout(function() {
	  				$('.menu2').css("opacity", 1).css("top", "0em").css("transition", "all 1s linear");
	  			}, 300);
	  			setTimeout(function() {
	  				$('.menu3').css("opacity", 1).css("top", "0em").css("transition", "all 1s linear");
	  			}, 550);
	  			setTimeout(function() {
	  				$('.menu4').css("opacity", 1).css("top", "0em").css("transition", "all 1s linear");
	  			}, 800);
	  			setTimeout(function() {
	  				$('.menu5').css("opacity", 1).css("top", "0em").css("transition", "all 1s linear");
	  			}, 1050);
	  			});
			</script>

		<?php require 'footer.php'; ?>
