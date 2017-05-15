<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Traffic - Jakarta Flood Information System</title>
		<link rel = "stylesheet" type = "text/css" href = "css/all.css">
		<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="themes/5/js-image-slider.js" type="text/javascript"></script>
		<script type="text/javascript">
			imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='images/thumb" + (thumbIndex + 1) + ".jpg' style='width:70px;height:44px;' />"; });
		</script>
		<script src="jquery/jquery-1.11.0.js"></script>
		<script src="jquery/jquery.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="jquery/jquery.malihu.PageScroll2id.js"></script>
		<link href='jquery/fly_sidemenu.css' rel='stylesheet' type='text/css'>
		<script type="text/javascript" src="jquery/jquery.fly_sidemenu.js"></script>
		<script>
			$(document).ready( function() {
			$(".sidemenu").fly_sidemenu();
			});

		</script>
		<script>
			(function($){
				$(window).load(function(){
					
					/* Page Scroll to id fn call */
					$("#navigation-menu a,a[href='#top'],a[rel='m_PageScroll2id']").mPageScroll2id({
						highlightSelector:"#navigation-menu a"
					});
					
					/* demo functions */
					$("a[rel='next']").click(function(e){
						e.preventDefault();
						var to=$(this).parent().parent("section").next().attr("id");
						$.mPageScroll2id("scrollTo",to);
					});
					
				});
			})(jQuery);
		</script>
			
		<style type="text/css">

		a.test {
		  font:bold 30px Tahoma, Geneva, sans-serif; margin-bottom:20px; display:block;
		  color:#AAA;
		  -moz-transition-property: color;  /* FF4+ */
		  -moz-transition-duration: 1s;
		  -webkit-transition-property: color;  /* Saf3.2+, Chrome */
		  -webkit-transition-duration: 1s;
		  -o-transition-property: color;  /* Opera 10.5+ */
		  -o-transition-duration: 1s;
		  -ms-transition-property: color;  /* IE10? */
		  -ms-transition-duration: 1s;
		  transition-property: color;  /* Standard */
		  transition-duration: 1s;
		  }
		a.test:hover {
		  color:#F00;
		  }

		.box {
		  font-family: arcena;
		  font-size: 16pt;
		  height:50px; width:200px; background:#e74c3c; text-align:center; color:black; padding:8px; margin:0 auto; 
		  margin-left:50px;
		  -moz-border-radius:4px; -webkit-border-radius:4px; border-radius:4px;
		  -moz-transition: background  1s, width 1s;
		  -webkit-transition: background 1s, width 1s;
		  -o-transition: background  1s, width 1s;
		  -ms-transition: background 1s, width 1s;
		  transition: background 1s, width 1s;
		  cursor: pointer;
		}
		.box:hover {
			font-size: 16pt;
			font-family: arcena;
			background:#2ecc71;
		}

		a.more {
		padding:10px 20px; color:#ABABAB; font:bold 30px Tahoma, Geneva, sans-serif; text-decoration:none; border:2px dotted #ABABAB; margin-bottom:20px;
			 -moz-transition: all 1s ease;  /* FF4+ */
			   -o-transition: all 1s ease;  /* Opera 10.5+ */
		  -webkit-transition: all 1s ease;/* Saf3.2+, Chrome */
			  -ms-transition: all 1s ease;  /* IE10? */
				  transition: all 1s ease;  
		}

		a.more:hover {border:2px dotted #000; color:#3853a4}

		</style>

		<script type="text/javascript" src="jquery.js" ></script>
		<script type="text/javascript" src="jquery-ui.js" ></script>
		<script type="text/javascript" src="modernizr.js" ></script>

		<script type="text/javascript">

		if (!Modernizr.csstransitions) {
			$(document).ready(function(){
				$(".test").hover(function () {
					$(this).stop().animate({ color: "#F00" },700)
				 }, function() {
					 $(this).stop().animate({ color: "#AAA" },700)}	 
				 );
				$(".more").hover(function () {
					$(this).stop().animate({ borderColor: "#000", color: "#3853a4"  },700)
				 }, function() {
					 $(this).stop().animate({ borderColor: "#ABABAB", color: "#ABABAB"  },700)}	 
				 );
				$(".box").hover(function () {
					$(this).stop().animate({ backgroundColor: "#3853a4", width: "270px" },700)
				 }, function() {
					 $(this).stop().animate({ backgroundColor: "#ed1b24", width: "200px" },700)}	 
				 );

			});
		}

		</script>
	</head>
	
	<body>
		
		<div class = "divKonten">	
		
			<div class = "JFAS">
				<h1>JFIS (Jakarta Flood Information System)</h1>
			</div>
			
			<div class = "divTextBerjalan">
				<p class = "align textBerjalan">
					<marquee>
						
					<?php
						include("info_terkini.php");
					?>
						
					</marquee>
				</p>
			</div>
			
			<div class = "divSize">
			
			</div>
			
			<div style = "float:left">
				<div class = "centerContent">
				
				<br>
				<br>
				<br>
				
				<div>
					<div id='cssmenu' style = "padding-top:5px; padding-bottom:5px;">
						<span style = "font-size:18pt; color:white;">Traffic</span>
					</div>
				</div>
				
				<div style = "margin-left:20px">
				
				</div>
				
				<div class = "divMenuHome">
					<ul class="menu cf">
						<li><a href="index.php">Home</a></li>
						<li>
							<a href="#">Information<img class = "arrow" src = "images/symbol.png" alt = "images/symbol.png"></a>
							<ul class="submenu">
								<li><a href="dam.php">Dam</a></li>
								<li><a href="traffic.php">Traffic</a></li>
								<li><a href="weather.php">Weather</a></li>
								<li><a href="emergency_call.php">Emergency Call</a></li>
								<li><a href="donation.php">Donation</a></li>
							</ul>         
						</li>
						<li><a href="contact.php">About</a></li>
					</ul>
				</div>
				
				<div class="divTengah">
					<div style = "text-align:center; margin-top:10px;">
						<a style = "cursor:pointer;" onclick="getLocation()">
							<img src = "images/current.png" width = "60" height = "90" onmouseover="hover(this);" onmouseout="unhover(this);">
							<script>
								function hover(element) {
									element.setAttribute('src', 'images/current3.png');
								}
								function unhover(element) {
									element.setAttribute('src', 'images/current.png');
								}
							</script>
						</a>
					</div>
					<div style = "border:5px solid #f39c12; margin-left:20px; width:1050px; height:300px;">
						<div style = "margin-left:20px;">
							<div id = "geolocation" style = "font-size:16pt; position:absolute; margin-top:20px; width: 720px;"></div>
							<img id="showImage" style="font-size:14pt; width:250px;height:170px; margin-top:20px; float:right; margin-right:15px;">
							<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
							<script>
								var x = document.getElementById("geolocation");
								var y = document.getElementById("showImage");
								function getLocation() {
									if (navigator.geolocation) {
										navigator.geolocation.getCurrentPosition(showPosition);
									} else {
										x.innerHTML = "Geolocation is not supported by this browser.";
									}
								}
								function showPosition(position) {
									var geocoder = new google.maps.Geocoder();
									var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

									geocoder.geocode( { 'latLng': latlng}, function(results, status) {

									  if (status == google.maps.GeocoderStatus.OK) {	
										x.innerHTML = "Latitude: " + results[0].geometry.location.lat() + "<br>Longitude: " + results[0].geometry.location.lng() + "<br><br>Location: <br>" + results[0].formatted_address;
									    y.src = "https://maps.googleapis.com/maps/api/streetview?size=250x200&location=" + results[0].geometry.location.lat() + "," + results[0].geometry.location.lng() + "&heading=151.78&pitch=-0.76";
										document.getElementById("showContext").innerHTML = "<input type = 'submit' value = 'Lancar' class='box'><input type = 'submit' value = 'Tersendat' class='box'><input type = 'submit' value = 'Macet' class='box'>";
									  } 
									}); 
								}
							</script>

							<div id = "showContext" style = "position:absolute; margin-top:220px; margin-left:100px;">
								
							</div>

						</div>
					</div>
				</div>
				
				<?php
				include("footer_and_sidemenu.php");
                ?>
		</div>
	</body>
</html>