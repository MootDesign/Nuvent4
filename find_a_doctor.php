		<?php require 'header.php'; ?>
			<style type="text/css">
				.slick-arrow {
					display: none !important;
				}
				.footer-inpage-nav {
					display: none;
				}

				.hospital-name-list {
					margin-top: 40px;
					background: lightgrey;
					padding: 15px;
				}

				.toggle-wrap {
				 	position: relative;
				 	width:100%; }

				.tab-header {
				 	width:100%;
				 	height:50px;
					margin-bottom:20px;
				 	font-size:14px;
					border-bottom:1px solid #b1b0b2; }

				.map-key {
				 	float:right;
					margin-top:10px;
				 	max-width:345px;
				 	width:100%;
				 	opacity:0;
				 	transition: opacity 1s ease-in-out; }
				.map-key.active {
				 	opacity:1;
					transition: opacity 1s ease-in-out; }
					.map-key div {
					 	float:left;
					 	width:50%; }
						.map-key div img {
						 	margin-right:15px; }

				.map-view, .list-view {
				 	cursor: pointer;
				 	float:left;
					padding:5px 0 0 12px;
					height:50px;
					width:120px;
				 	border:1px solid #004b87; }
					.map-view.active, .list-view.active {
					 	color:#FFFFFF;
					 	background:#004b87; }
				.map-view {
				 	border-bottom:none; }
				.list-view {
				 	border-bottom:none;
				 	border-left:none; }

				.map-view-wrap, .list-view-wrap {
				 	width:100%;
					display:block;
					position: relative;
				 	opacity:1;
				 	transition: opacity 1s ease-in-out; }
				.map-view-wrap.off, .list-view-wrap.off {
				 	opacity: 0;
					z-index: -10;
				 	transition: opacity 1s ease-in-out; }
				.list-view-wrap {
					position: absolute;/*Temp fix for list view .. needs refining */
				 	top:0em;
				 	height: 100%;
				 	/*position: absolute;
				 	top:0px;*/
				 	left:0px; }

				.map {
				 	width:100%;
				 	height:600px; }

				 .off {
				 	height: 122em; }

				 @media screen and (max-width: 800px) {	
					.map {
						width: 100%;
						height: 300px;
					}
				}
			</style>
			<div class="static-slider slider-all pad-bott-50">
  				<div>
  					<img class="main-image" src="/img/banner/banner-v2 doctor.jpg" width="100%" class="">
  					<img class="main-image-scaled" src="/img/banner/banner-v2doctor-scaled.jpg" width="100%" class="">
  					<img class="nuvent-logo" src="img/banner/nuVentLogo.png">
  					<p class="first-slide-1"><span>finding your way</span></p><br><p class="first-slide-2"><span style="color: #FEBC11; font-family: medtronic_bold;">to sinus relief</span></p>
					<span class="medtronic-border"></span>
  				</div>
			</div>

			<div class="container override-container paragraph">
			<p class="paragraph-reveal" style="font-size: 28px; color: #0f82c5; margin-bottom: 25px;">Find a doctor using Navigation for your sinusitis needs</p>
			<div class="tab-header">
				<div class="map-view active">
					<div class="livicon-evo icon" style="float:left; margin-right:5px;" data-options="name:map.svg; style: lines; size: 30px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
						Map View</div>
					<div class="list-view">
					<div class="livicon-evo icon" style="float:left; margin-right:5px;" data-options="name:list.svg; style: lines; size: 30px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
						List View</div>
					<div class="map-key active">
						<div class="orange-marker"><img src="/img/orange-marker.png">NuVent Doctor</div>
						<!--<div class="blue-marker"><img src="/img/blue-marker.png">General Practitioner</div>-->
					</div>
			</div>
<script type="text/javascript">
				$(function() {
					$(".map-view").click(function() {
						$(".map-view-wrap").removeClass('off');
						$(".list-view-wrap").addClass('off');
						$(".map-view").addClass('active');
						$(".list-view").removeClass('active');
						$(".map-key").addClass('active');
						$(".list-view-wrap").css("display", "none");
					});
					$(".list-view").click(function() {
						$(".map-view-wrap").addClass('off');
						$(".list-view-wrap").removeClass('off');
						$(".map-view").removeClass('active');
						$(".list-view").addClass('active');
						$(".map-key").removeClass('active');
						$(".list-view-wrap").css("display", "block");
					});
				});
			</script>
			<div class="toggle-wrap">
				<div class="container override-container map-view-wrap">
					<div class="col-md-12" style="padding:0;">
						<!--<input type="button" id="reset-state" value="reset" />-->
						<div id="map" class="map"></div>
						<script type="text/javascript">
				      		var map;
							var gmarkers1 = [];
							var hospitals1 = [];
							var infowindow = new google.maps.InfoWindow({ content: '' });
							var iconSrc = {};

							hospitals1 = [
								['0', 'Great Ormond Street Hospital', 51.5225023, -0.1229721, 'north'],
								['1', 'Leicester Royal Infirmary', 52.6274712, -1.1387857, 'north'],
								['2', 'Manchester Royal Infirmary', 53.4626882, -2.2289121, 'north'],
								['3', 'Birmingham City Hospital', 52.4893936, -1.9337576, 'north'],
								['4', 'Leeds General Infirmary', 53.8028354, -1.5539993, 'north'],
								['5', 'Sunderland Royal Hospital', 54.9025716, -1.4110243, 'north']	];

							iconSrc['south'] = 'http://nuvent2.mootdigital.com/img/blue-marker.png';
							iconSrc['north'] = 'http://nuvent2.mootdigital.com/img/orange-marker.png';

					      function initialize() {
									var center = new google.maps.LatLng(53.4171668, -2.8075969);
							    var mapOptions = {
							        zoom: 6,
							        center: center,
											mapTypeControl: false,
											styles: [
											  {
											    "featureType": "road",
											    "elementType": "geometry",
											    "stylers": [
											      { "color": "#b9d9eb" }
											    ]
											  },{
											    "elementType": "labels.text.fill",
											    "stylers": [
											      { "color": "#004b87" }
											    ]
											  },{
											    "featureType": "landscape",
											    "stylers": [
											      { "color": "#e7eff4" }
											    ]
											  },{
											    "featureType": "poi",
											    "elementType": "geometry",
											    "stylers": [
											      { "color": "#c2c5c5" }
											    ]
											  },{
											    "elementType": "labels.text.stroke",
											    "stylers": [
											      { "color": "#FFFFFF" }
											    ]
											  },{
											    "elementType": "labels.icon",
											    "stylers": [
											      { "visibility": "off" }
											    ]
											  },{
											    "featureType": "transit.line",
											    "stylers": [
											      { "color": "#ececec" }
											    ]
											  },{
											    "elementType": "labels.text.fill",
											    "stylers": [
											      { "color": "#888B8D" }
											    ]
											  },{
											  },{
											    "featureType": "water",
											    "stylers": [
											      { "color": "#adc5d8" }
											    ]
											  }
											]
					        };

									map = new google.maps.Map(document.getElementById('map'), mapOptions);
									    for (i = 0; i < hospitals1.length; i++) {
									        addMarker(hospitals1[i]); }

										}

								function addMarker(marker) {
											var revert = new google.maps.LatLng(53.4171668, -2.8075969);
										    var category = marker[4];
										    var title = marker[1];
										    var pos = new google.maps.LatLng(marker[2], marker[3]);
										    var content = marker[1];

										    marker1 = new google.maps.Marker({
										        title: title,
										        position: pos,
										        category: category,
										        map: map,
														icon: iconSrc[hospitals1[i][4]]
										    });

										    gmarkers1.push(marker1);

										    // Marker click listener
										    google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
										        return function () {
										            console.log('Gmarker 1 gets pushed');
										            infowindow.setContent(content);
										            infowindow.open(map, marker1);
										            map.panTo(this.getPosition());
										            map.setZoom(15);
										        }
										    })(marker1, content));

										    google.maps.event.addListener(infowindow,'closeclick',function(){
   											console.log('Gmarker 1 gets closed');
   											map.panTo(revert);
   											map.setZoom(6);
   											// then, remove the infowindows name from the array
											});
										}

									filterMarkers = function (category) {
								    for (i = 0; i < hospitals1.length; i++) {
								        marker = gmarkers1[i];
								        // If is same category or category not picked
								        if (marker.category == category || category.length === 0) {
								            marker.setVisible(true);
								        }
								        // Categories don't match
								        else {
								            marker.setVisible(false);
								        }
								    }
								}
								// Init map
								initialize();
				    </script>
					</div>
				</div>
				<div class="list-view-wrap off" style="display: none;">
				<div class="container override-container" style="border-bottom: 1px solid #b1b0b2; padding-bottom: 60px; margin-bottom: 50px;">

					<div class="com-md-12 hospital-name-list">St Michaels Hospital</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. C. Langton-Hewer</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Southwell Street, Bristol</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">CM7 2QU</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 117 342 6713</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:test@example.com"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.uhbristol.nhs.uk/patients-and-visitors/your-hospitals/st-michaels-hospital/what-we-do/ear-nose-and-throat/"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>
					<div class="com-md-12 hospital-name-list">Solihull Hospital</div>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. M. Trotter</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Lode Ln, Solihull</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">B91 2JL</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 121 424 4468</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:test@example.com"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.heartofengland.nhs.uk/solihull-hospital/"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">Heartlands Hospital</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. D. Howe</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Bordesley Green East, Birmingham</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">B9 5SS</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 1214 243342</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:david.howe@heartofengland.nhs.uk"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.heartofengland.nhs.uk/heartlands-hospital/"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. S. Anari</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Lode Ln, Solihull</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">B91 2JL</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 1214 242351</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:test@example.com"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.heartofengland.nhs.uk/heartlands-hospital/"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">Derriford Hospital</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. H. Khalil</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Derriford Road, Plymouth</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">PL6 8DH</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 175 276 1822</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:test@example.com"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://entplymouth.co.uk/"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">John Radcliffe Hospital</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. P. Martinez-Devesa</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">West Wing, Headington, Oxford</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">OX3 9DU</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 186 523 1064</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:kris.dowdeswell@ouh.nhs.uk"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.ouh.nhs.uk/services/departments/specialist-surgery/ent/default.aspx"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. C. Pau</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Headley Way, Oxford</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">OX3 9DU</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 186 523 1064</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:kris.dowdeswell@ouh.nhs.uk"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.ouh.nhs.uk/services/departments/specialist-surgery/ent/default.aspx"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">Queen Elizabeth Hospital Birmingham</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. S. Ahmed</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Mindelsohn Way, Edgbaston, Birmingham</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">B15 2GW</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 121 371 4699</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:shahz.ahmed@nhs.net"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.ouh.nhs.uk/services/departments/specialist-surgery/ent/default.aspx"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. M. Isles</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Newcastle Road, Stoke-On-Trent</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">ST4 6QG</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 121 371 4683</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:text@example.com"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.uhb.nhs.uk/ent.htm"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">Royal Hampshire County Hospital</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. A. Rokade</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Romsey Road, Winchester</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">SO22 5DG</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 196 282 8397</span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:test@example.com"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.uhb.nhs.uk/ent.htm"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">BMI The Alexandra Hospital</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. R. Bhalla</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Ear Nose and Throat Department</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Mill Lane, Cheadle, Manchester </span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">SK8 2PX</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 161 495 7774 </span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="MailTO:info@manchestersinuscentre.co.uk"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="http://www.manchestersinuscentre.co.uk/"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>

					<div class="com-md-12 hospital-name-list">Royal Stoke University Hospital</div>
					<hr>

					<div class="row">
						<div class="col-md-6">
							<span class="bold-heading">Dr. M. Isles</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">c/o ENT Secretaries</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">Old Board Room, 'A' Block, Newcastle Rd, Stoke-on-Trent </span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">ST4 6QG</span>
							<span class="normal-heading" style="font-size: 21px; line-height:20px; width:100%; float:left; margin-bottom:5px;">+44 161 495 7774 </span>
						</div>
						<div class="col-md-6 contact-details" style="font-size: 17px; color: #b1b0b2;">
							<div class="col-xs-2 call">
							<div class="call-1"><div class="livicon-evo icon" style="" data-options="name: phone-alt.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Call</div>
							</div>
							<div class="col-xs-2 email">
							<a href="#"><div class="livicon-evo icon" style="" data-options="name: morph-envelope.svg; 	style: lines; size: 60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Email</a>
							</div>
							<div class="col-xs-2 web-link">
							<a href="#"><div class="livicon-evo icon" style="" data-options="name:globe.svg; style: lines; size: 60px; 	strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Website</a>
							</div>
							<div class="col-xs-2 directions">
							<div class="directions-1"><div class="livicon-evo icon" style="" data-options="name:map.svg; style: lines; size: 	60px; strokeColorAlt: #ffffff; fillColor: #07cdff; drawOnViewport: true"></div>
								Directions</div>
							</div>
							<div class="col-md-12 extra-info" style="margin-top: 50px; display: none;"></div>
						</div>
					</div>
				</div>
			</div>
			</div>
			</div>
		</div>



		<?php require 'footer.php'; ?>
		<script type="text/javascript">
			$(".menu4 a").addClass("current-page");
		</script>
		<script type="text/javascript">
			$(function() {
      			$(".call-1").click( function()
           			{
           				$(".extra-info").fadeOut();
           					setTimeout(function(){
             					$(".extra-info").html("(720) 401-2139");
           						$(".extra-info").fadeIn();
           					 }, 200);
          		 	}
      			);
      			$(".directions-1").click( function()
           			{
           				$(".extra-info").fadeOut();
           				setTimeout(function(){
             				$(".extra-info").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98046.12985275955!2d-105.24101151230008!3d39.83072797203333!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b8c8e418a2da1%3A0x50e87882f78614ba!2sPeak+ENT+and+Voice+Center!5e0!3m2!1sen!2suk!4v1467643613485" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>');
           					$(".extra-info").fadeIn();
           				}, 200);
          		 	}
      			);
			});
				$(function() {
      			$(".call-2").click( function()
           			{
           				$(".extra-info2").fadeOut();
           					setTimeout(function(){
             					$(".extra-info2").html("(303) 832-0860");
           						$(".extra-info2").fadeIn();
           					 }, 200);
          		 	}
      			);
      			$(".directions-2").click( function()
           			{
           				$(".extra-info2").fadeOut();
           				setTimeout(function(){
             				$(".extra-info2").html('<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3067.6911118716534!2d-104.97006223429071!3d39.74658885404528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876c79369f5b8127%3A0x4d9619edccf82387!2sPremier+Ent+Head+%26+Neck+Surgery!5e0!3m2!1sen!2suk!4v1467643470160" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>');
           					$(".extra-info2").fadeIn();
           				}, 200);
          		 	}
      			);
			});
		</script>
	</body>
</html>
