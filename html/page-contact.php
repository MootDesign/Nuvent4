<?php 
	
/*
	Template Name: Contact Template
*/
	
get_header(); ?>
	<style type="text/css">
	label {
    	position: relative;
    	top: -28px;
    	padding: 0px 9px 9px;
    	float: left;
    	color: #000;
    	font-weight: 500;
 	}
 	input:focus + label { 
    	top: -36px;
    	font-size: 10px;
    	position: relative;
    	-moz-transition:all 0.2s ease-in-out;
    	transition:all 0.2s ease-in-out;
  	}
  	.form-group {
    margin-bottom: 0px;
  }
  .form-control {
    border: 1px solid #3FA8BC;
    border-radius: 0;
    background-color: transparent;
  }
  .contact-form input[type="text"]:valid + label {
    top: -36px;
    font-size: 10px;
	}
  .contact-form {
    margin-bottom: 50px;
  }
	</style>
	<div class="container-full-width" style="background: #f5f7f7;">
		<div class="container" style="padding-top: 20px;">
			<div class="col-sm-6">
				<p style="font-size: 19px;">
					<h1 style="color: #3FA8BC;">The National Ophthalmology Group</h1><br>
					000 Address<br>
					London  AAA AAA<br>
					000 0000 0000<br>
					info@nationalophthalmologygroup.co.uk
				</p>
				<p style="margin-top: 80px; font-size: 19px; line-height: 30px;">
					Referral form <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_right_contact.png"><br>
					Contact form <img src="<?php echo get_template_directory_uri(); ?>/img/arrow_right_contact.png">
				</p>
			</div>
			<div class="col-sm-6">
				<form action="#" class="contact-form">
 					<div class="form-group">
 					  <input type="text" class="form-control sc-fm" id="firstname" required="required">
 					  <label for="firstname">First Name</label>
 					</div>

  					<div class="form-group">
  					  <input type="text" class="form-control sc-fm" id="surname" required="required">
  					  <label for="surname">Surname</label>
  					</div>
  
  					<div class="form-group">
  					  	<input type="text" class="form-control sc-fm" id="contactnum" required="required">
  					  	<label for="contactnum">Contact Number</label>
  					</div>

    				<div class="form-group">
   						<input  type="text" class="form-control sc-fm" id="emailaddress" required="required">
    					<label for="emailaddress">Email Address</label>
  					</div> 
  
      				<div class="form-group">
      				<textarea id="message" class="form-control" rows="3" placeholder="Your Message"></textarea>
    				</div>  

					<div class="" style="margin-top: 30px;">
 					<input type="button" class="btn cfm-btn" style="background-color: #A7A9AB; border-radius: 0; color: #ffffff; width: 100%; text-align: left;" name="s" value="SUBMIT"/>
    				</div> 
    			</form>
			</div>
		</div>
	</div>
	<div class="container-full-width">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDovnhsefsgMcKLLFD5rb9PC4bPWOSaGbI&callback=initMap" async defer></script>
    	<div id="map" class="map"></div>
							<script>
							  var map;
							  function initMap() {
								map = new google.maps.Map(document.getElementById('map'), {
								  center: {lat: -51.5667906, lng: 0.1416809},
								  zoom: 8
								});
							  }
							</script>
	</div>
  <div class="contact">
      <h5 style="font-size: 30px; color: #ffffff;">Contact Details</h5> 
  </div>

<?php get_footer(); ?>