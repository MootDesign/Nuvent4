			<?php
			require 'header.php';
			$heading1 = "Treatment<br>Options";
			$heading2 = "Non - Medical prescription &<br> OTC treatments";
			$heading3 = "Minimally Invasive bss";
			$heading4 = "Functional Endoscopic<br> Sinus Surgery";
			$heading1toplink = "#treatment_options";
			$heading2toplink = "#non-medical";
			$heading3toplink = "#balloon_surgery";
			$heading4toplink = "#fess";
			$heading5 = "what to expect<br> with bss";
			$heading6 = "ask your docotor <br> about navigated sinus surgery";
			$heading7 = "let us answer<br>your questions";
			$heading8 = "Contact us";
			$heading5link = "what_to_expect.php#balloon_sinusplasty";
			$heading6link = "#";
			$heading7link = "contact_us.php#faqs";
			$heading8link = "contact_us.php#contact_us";
			?>
			<style type="text/css">
				.slick-arrow {
					display: none !important;
				}

				
				/*Quick fix for certain screen sizes needs to be redone */
				.first-slide-1 {
					top: 33% !important; 
				}

				@media screen and (max-width: 1680px) {
					
					.first-slide-1 {
					top: 30% !important;
				}
				.first-slide-2 {
					top: 45% !important;
				}

				}
			</style>

			<div class="static-slider slider-all pad-bott-50">
  				<div>
  					<img class="main-image" src="/img/banner/banner- v2 family2b.jpg" width="100%" class="">
  					<img class="main-image-scaled" src="/img/banner/banner- v2 family2b-scaled.jpg" width="100%" class="">
  					<!--<img class="nuvent-logo" src="img/banner/nuVentLogo.png">-->
  					<p class="first-slide-1"><span>how close<br>are you to</span></p><br><p class="first-slide-2"><span style="color: #FEBC11; font-family: medtronic_bold;">feeling free<br>again?</span></p>
					<span class="medtronic-border"></span>
  				</div>
			</div>
			<div class="container override-container paragraph">
				<div class="col-sm-9">
					<a name="treatment_options" class="inpage-links"><p><span class="bold-heading bold-heading-light">Your journey to freedom</span></p></a>
				</div>
			</div>

			<?php require 'inpagenav.php'; ?>

			<div class="container override-container paragraph paragraph-reveal">
				<div class="col-sm-9">
					<span style="margin-bottom:0px;" class="bold-heading">Treatment Options <span style="font-size: 14px;">(1,2)</span></span>
					<span class="references references-big">You may be trying one or more of these treatments. Other options may provide the relief you're looking for.</span></p>
				</div>
			</div>
				<div class="container-full-width grey-bg pad-top-50 pad-bott-50">
					<div class="container override-container paragraph two-arrow-reveal">
						<style type="text/css">
							.arrow1 {
								background: url('img/arrow_a2.png');
								background-repeat: no-repeat;
								position: relative;
								display: block;
								height: 45px;
								width: 0;
							}
							.arrow2 {
								background: url('img/arrow_b2.png');
								background-repeat: no-repeat;
								height: 45px;
								width: 0;
								margin-bottom:15px;
								position: relative;
								display: block;
							}
							.light {
								font-family: medtronic_light;
							}
							.arrow-grey {
							 	color: #86888a; }
							.text-1 {
								position: relative;
								left: -5%;
								opacity: 0;
								font-size: 17px;
								line-height:24px;
							}
							.text-2 {
								position: relative;
								left: -5%;
								opacity: 0;
								font-size: 17px;
								line-height:24px;
							}
							.text-3 {
								position: relative;
								left: -5%;
								opacity: 0;
								font-size: 17px;
								line-height:24px;
							}
							.text-4 {
								position: relative;
								left: -5%;
								opacity: 0;
								font-size: 17px;
								line-height:24px;
							}
						</style>
						<script type="text/javascript">

						</script>
						<div class="arrow1 no-mob"></div>
						<div class="arrow2 no-mob"></div>
						<div class="col-xs-3 light arrow-grey text-1">
							Rest & Hydration<br>
							Nasal Saline Rinses
						</div>
						<div class="col-xs-3 light arrow-grey text-2">
							Nasal Decongestant<br>
							Intranasal Corticosteroid<br>
							Oral antibiotic<br>
							Pain Reliever
						</div>
						<div class="col-xs-3 light arrow-grey text-3">
							Minimally Invasive<br>
							Balloon Surgery (BSS)<br><br>

							Functional Endoscopic<br>
							Sinus Surgery (FESS)
						</div>
						<div class="col-xs-3 light arrow-grey text-4">
							
						</div>

						<div class="mob-arrow-1-to">
							<img src="/img/arrow-2a-mob.png">
						</div>
						<div class="col-xs-9 light arrow-grey mob-arrow-text">
							Rest & Hydration<br>
							Nasal Saline Rinses
						</div>
						<div class="mob-arrow-2-to">
							<img src="/img/arrow-2b-mob.png">
						</div>
						<div class="col-xs-9 light arrow-grey mob-arrow-text">
							Nasal Decongestant<br>
							Intranasal Corticosteroid<br>
							Oral antibiotic<br>
							Pain Reliever
						</div>
						<div class="mob-arrow-3-to">
							<img src="/img/arrow-2c-mob.png">
						</div>
						<div class="col-xs-9 light arrow-grey mob-arrow-text">
							Minimally Invasive<br>
							Balloon Surgery (BSS)<br>
						</div>
						<div class="mob-arrow-4-to">
							<img src="/img/arrow-2d-mob.png">
						</div>
						<div class="col-xs-9 light arrow-grey mob-arrow-text">
							Functional Endoscopic<br>
							Sinus Surgery (FESS)
						</div>
						<!--<div class="col-md-6">
							<ul class="normal-text">
								<li>Rest & Hydration</li>
								<li>Nasal Saline Rinses</li>
								<li>Prescription & OTC medicine</li>
								<li>Nasal Decongestant</li>
								<li>Intranasal Corticosteroid</li>
							</ul>
						</div>
						<div class="col-md-6">
							<ul class="normal-text">
								<li>Oral antibiotic</li>
								<li>Pain Reliever</li>
								<li>Minimally Invasive Balloon Surgery (BSS)</li>
								<li>Functional Endoscopic Sinus Surgery (FESS)</li>
							</ul>
						</div>-->
					</div>
				</div>

				<div class="container override-container paragraph pad-top-50 pad-bott-50">
				<a name="non-medical" class="inpage-links"></a>
					<div class="col-sm-9">
							<p><span class="bold-heading paragraph-reveal">Non - Medical, prescription & OTC treatments</span></p>
						<span class="normal-text">
							<p><span style="display:block;" class="paragraph-reveal">Acute sinus infections may have the same symptoms as a cold and many cases go away on their own. Your doctor may suggest that you take a common decongestant to ease your symptoms.</span></p>
							<p><span style="display:block;" class="paragraph-reveal">If your sinus infection lingers for longer than a week, it's probably caused by bacteria. In this case, your doctor may prescribe antibiotics. Most cases of acute bacterial sinusitis clear up after a course of antibiotics.</span></p>
							<p><span style="display:block;" class="paragraph-reveal">Chronic sinus infections can also be treated medically. Depending on how severe your condition is, your doctor may prescribe oral antibiotics, antibiotics that are inhaled through your nose, or antibiotics that are injected directly into your bloodstream.</span></p>
						</span>
					</div>
				</div>

				<a name="balloon_surgery" class="inpage-links"><div class="container-full-width medtronic-light-bg"></a>
					<div class="container override-container paragraph pad-top-50 pad-bott-50 no-bottom-margin">
						<div class="col-sm-9">
								<p><span class="bold-heading paragraph-reveal">Balloon Sinus Surgery (BSS)</span>
							<span class="normal-text paragraph-reveal">
								If the medication treatment isn't working, your doctor may suggest balloon sinus dilation. This type of minimally invasive surgery helps open your sinus passages and relieve your symptoms. Your doctor will release your sinus pathways by inflating small balloons in key places in the nose and sinuses, restoring drainage.
							</span></p>
							<span class="references references-big paragraph-reveal">
								When the passageway is open, the balloon is deflated and removed
							</span>
						</div>
						<div class="col-sm-9 pad-top-50">
							<p><span class="bold-heading paragraph-reveal">Balloon sinus surgery has been shown to improve </span></p>
							<ul class="normal-text paragraph-reveal">
								<li>Overall sinusitis symptoms <sup style="font-size: 12px;">(3)</sup></li>
								<li>Headaches <sup style="font-size: 12px;">(4)</sup></li>
								<li>Work/school time missed and frequency of doctor/nurse visits and acute infections <sup style="font-size: 12px;">(3)</sup></span></li>
							</ul>
							<span class="references references-big paragraph-reveal">
								Sinus surgery with balloons may be performed in a hospital, outpatient surgery setting or in the physician's office under local anesthesia. <span style="font-size: 14px;">(5)</span>
							</span>
							<span class="references references-big paragraph-reveal" style="font-weight: 900; font-style: italic;">
								For more safety your doctor can look at a navigation screen to see a map of your sinuses and the location of the balloon in real time. So, like GPS on your car or phone, your doctor can see, guide, and place the balloon at the precise point to inflate and unblock your sinuses. Navigation System provides your surgeon with a maximum amount of information about your unique anatomy for safer, more thorough procedures. <span style="font-size: 14px;">(6,7)</span>
							 </span>
						</div>
					</div>
				</div>

				<div class="container-full-width medtronic-video-bg video-container video-inner paragraph-reveal" align="center">
						<span class="glyphicon glyphicon-play"></span>
						<div class="container video-player-container">
							<video id="video-player" controls style="max-width: 100%;">
						  		<source src="/video/nuvent_patient2.mp4" type="video/mp4">
						  			Your browser does not support HTML5 video.
							</video>
						</div>
				</div>
				<a name="fess" class="inpage-links"></a>
				<div class="container-full-width medtronic-light-bg pad-top-50 pad-bott-50">
					<div class="container override-container paragraph">
						<div class="col-sm-9">
							<p><span class="bold-heading paragraph-reveal">Functional endoscopic sinus surgery (FESS)</span>
								<span class="normal-text pad paragraph-reveal">
									FESS is a common surgical method to treat chronic sinus infections. In a FESS procedure, the surgeon uses a magnifying endoscope (thin tube with a lighted end) inserted through the nostrils to see and remove affected tissue and bone. This is less risky and helps you recover faster than traditional sinus surgery, which cuts through the face or mouth. FESS is a more precise, less invasive way to open your sinuses and help you feel better.
								</span></p>
							<p>
								<span class="references references-big paragraph-reveal">
									In general, the goal of sinus surgery is to flush out infected material, open up blocked passages, and keep enough healthy tissue intact so that your nose and sinuses can function normally.
								 </span>
								 <span class="references references-big paragraph-reveal" style="font-weight: 900; font-style: italic;">
									As for the Balloon Sinus Surgery, your doctor may use a navigation system for a safer procedure. <span style="font-size: 14px;">(6,7)</span>
								 </span>
							</p>
						</div>
					</div>
				</div>

				<div class="container override-container paragraph pad-top-50 no-bottom-margin">
					<div class="col-sm-9 safety-information">
						<p><span class="bold-heading paragraph-reveal no-bottom-margin">Safety Information</span>
								<span class="normal-text paragraph-reveal">
									Information on this site should not be used as a substitute for
									talking with your<br> doctor. Always talk with your doctor about 
									diagnosis and treatment information
								</span></p>
					</div>
				</div>
					<div class="container override-container references pad-bott-50 source-references no-bottom-margin">
						<div class="col-sm-9">
							<p><span style="margin-bottom:0px;" class="bold-heading paragraph-reveal">Source</span>
							<span style="line-height:14px;" class="normal-text paragraph-reveal">
							<sup>1</sup>Rosenfeld RM, Andes D, Bhattacharyva N, et al. Clinical practice<br> guidelines: Adult sinusitis. Otolaryngol Head Neck Surg.<br> 2007;137:S1-S31.
   							<br>
							<sup>2</sup>American Rhinologic Society. Sinusitis Q&A. http://care.americ<br>an-rhinologic.org/sinusitis_q_a? Accessed October 16, 2015.
  							<br>
							<sup>3</sup>Chandra RK, Kern RC, Cutler JL, et al. REMODEL larger cohort with<br> long-term outcomes and meta-analysis of standalone balloon<br> dilation studies. Laryngoscope. 2016;126(1):44-50.
  							<br>
  						<sup>4</sup>Marzetti A, Tedaldi M, Passali FM. The role of balloon sinuplasty in<br> the treatment of sinus headache. Otolaryngol Polska.<br>
  							2014;68:15-19.

  							<br>
  						<sup>5</sup>Sikand A. Introduction to an office-based sinus surgery technique.<br> Operative Techniques Otolaryngol.<br>
  							2011;22:249-252

  							<br>
  						<sup>6</sup>American Rhinologic Society. Image-guided surgery.<br> <a href="http://care.american-rhinologic.org/igs">http://care.american-rhinologic.org/igs</a><br>
  							Accessed September 16, 2015.

  							<br>
  						<sup>7</sup>Silvers SL. Practical techniques in office-based balloon sinus dilation.<br> Operative Techniques Otolaryngol.<br>
  							2014; 25:206-212.


							</span></p>
						</div>
					</div>


		<?php require 'footer.php'; ?>
		<script>
		var leftPosition;
		if( $(".uselessclass").css('display') == 'block') {

		  leftPosition = '20%';
		}

		if( $(".uselessclass").css('display') == 'none') {

		  leftPosition = '17%';
		}

		if( $(".uselessclass").css('display') != 'block' && $(".uselessclass").css('display') != 'none')  {

		  leftPosition = '27%';
		}
		setTimeout(function() {
        $('.nuvent-logo').css('visibility','visible').animate({left: leftPosition, opacity:1}, 'slow', function() {});
        }, 1000);
		</script>
		<script type="text/javascript">
			$(".menu2 a").addClass("current-page");
		</script>
		<script type="text/javascript">

			$( ".video-inner span" ).click(function() {
 				$( ".video-inner span" ).css("opacity", 0)
 				setTimeout(function() {
 					$( ".video-player-container" ).css("transition", "opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-webkit-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-moz-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-o-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-ms-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("visibility", "visible").css("opacity", 1)
 				}, 1000);
 				setTimeout(function() {
 					document.getElementById('video-player').play();
 				}, 1500);

 				 document.getElementById('video-player').addEventListener('ended',function(){
   					$( ".video-player-container" ).css("transition", "opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-webkit-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-moz-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-o-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("transition", "-ms-transition: opacity 1s ease-in-out")
 					$( ".video-player-container" ).css("opacity", 0)
 					setTimeout(function() {
 						$( ".video-inner span" ).css("opacity", 1)
 					}, 1000);
  				}, false);
			});
		</script>
