<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Home - Jakarta Flood Information System</title>
		<link rel = "stylesheet" type = "text/css" href = "css/all.css">
		<link href="themes/5/js-image-slider.css" rel="stylesheet" type="text/css" />
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script type="text/javascript">
		var map;

		function initialize() {
		  var mapOptions = {
			zoom: 15,
			mapTypeId: google.maps.MapTypeId.RoadMap
		  };
		  map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);

		  // Try HTML5 geolocation
		  if(navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			  var pos = new google.maps.LatLng(position.coords.latitude+0.002163,
											   position.coords.longitude-0.00255);
		  
			  setupMarker(position.coords.latitude, position.coords.longitude);

			  map.setCenter(pos);
			}, function() {
			  handleNoGeolocation(true);
			});
			
			google.maps.event.addListener(map, 'click', function (e) {
                var latlng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
                var geocoder = geocoder = new google.maps.Geocoder();
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            //alert("Location: " + results[1].formatted_address + "\r\nLatitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
							document.getElementById("showDetail").innerHTML = "Latitude: " + e.latLng.lat() + "<br>Longitude: " + e.latLng.lng() + "<br><br>Location: <br>" + results[0].formatted_address;
							document.getElementById("showImage").src = "https://maps.googleapis.com/maps/api/streetview?size=250x200&location=" + e.latLng.lat() + "," + e.latLng.lng() + "&heading=151.78&pitch=-0.76";
						}
                    }
                });
            });
			
			            // Setup the address lookup on the button click event
            $('#lookup').click(function() {
                var address = $('#address').val();
                var geocoder = new google.maps.Geocoder();          
                geocoder.geocode({ 'address': address }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        // Show the new position on the map
                        setupMarker(results[0].geometry.location.lat(), results[0].geometry.location.lng())
                    }
                    else alert("Unable to get a result, reason: " + status);
                });
            });
			
			setupMarker = function(latitude, longitude) {
				// Generate the position from the given latitude and longitude values
				var pos = new google.maps.LatLng(latitude, longitude);
				// Define the marker on the map in the specified location
				var marker = new google.maps.Marker({
					position: pos,
					map: map,
					title: name,
					draggable:true,
					animation: google.maps.Animation.DROP
				});
			
				google.maps.event.addListener(marker, 'click', toggleBounce);
				map.setCenter(pos);
				// Add a listener to this marker to display the information window on click
				var info = "This is a marker for the following co-ordinates:<br />latitude: " + latitude + "<br/>longitude: " + longitude;
				google.maps.event.addListener(marker, 'click', function () {
					var infowindow = new google.maps.InfoWindow({
						content: info
					});
					infowindow.open(map, marker);
				});
			}
		  } else {
			// Browser doesn't support Geolocation
			handleNoGeolocation(false);
		  }
		}
		
		function address() {
			var latlng = new google.maps.LatLng(e.latLng.lat(), e.latLng.lng());
			var geocoder = geocoder = new google.maps.Geocoder();
			geocoder.geocode({ 'latLng': latlng }, function (results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					if (results[1]) {
						alert("Location: " + results[1].formatted_address + "\r\nLatitude: " + e.latLng.lat() + "\r\nLongitude: " + e.latLng.lng());
					}
				}
			});
		}
		
		function toggleBounce() {

		  if (marker.getAnimation() != null) {
			marker.setAnimation(null);
		  } else {
			marker.setAnimation(google.maps.Animation.BOUNCE);
		  }
		}

		function handleNoGeolocation(errorFlag) {
		  if (errorFlag) {
			var content = 'Error: The Geolocation service failed.';
		  } else {
			var content = 'Error: Your browser doesn\'t support geolocation.';
		  }

		  var options = {
			map: map,
			position: new google.maps.LatLng(60, 105),
			content: content
		  };

		  var infowindow = new google.maps.InfoWindow(options);
		  map.setCenter(options.position);
		}

		google.maps.event.addDomListener(window, 'load', initialize);
		</script>
			
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&sensor=false"></script>
			
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
						<span style = "font-size:18pt; color:white;">Region</span>
						<span style = "font-size:18pt; color:white; margin-left:300px; position:absolute;">
							<div class = "search">
								<table class = "searchBackground">
									<tr>
										<th><input id = "address" type = "search" placeholder = "Search....." class = "textFieldSearch"/></th>
										<th><input id = "lookup" type = "submit" value = "" class = "searchB"></th>
									</tr>
								</table>
							</div>
						</span>
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
					<div id="map-canvas" style="margin-left:20px; margin-top:20px; width:800px;height:385px;"></div>
					<div id="showDetail" style="font-size:14pt; background-color:white; width:250px;height:200px; margin-top:-385px; float:right; margin-right:15px;"></div>
					<img id="showImage" style="font-size:14pt; background-color:white; width:250px;height:170px; margin-top:-170px; float:right; margin-right:15px;">
				</div>
				
				<?php
				include("footer_and_sidemenu.php");
                ?>
		</div>
	</body>
</html>