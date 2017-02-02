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
