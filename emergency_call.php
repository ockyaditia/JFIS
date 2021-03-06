<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Emergency Call - Jakarta Flood Information System</title>
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
						<span style = "font-size:18pt; color:white;">Emergency Call</span>
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
					<h1 align = "center">Emergency Call Contacts</h1>
					<div style = "margin-top:100px; margin-left:50px;"><img src = "images/telpon.png" width = "110" height = "110"></div>
					<div style = "margin-top:-180px; margin-left:280px;">
						<table>
							<tr>
								<td><h2>SAR JAKARTA</h2></td>
								<td><h2>021 - 550 1512 / 021 - 550 7976</h2></td>
							</tr>
							<tr>
								<td><h2>PMI DKI</h2></td>
								<td><h2>021 - 390 6666</h2></td>
							</tr>
							<tr>
								<td><h2>BNPB</h2></td>
								<td><h2>021 - 345 8400</h2></td>
							</tr>
							<tr>
								<td><h2>POLDA METRO JAYA</h2></td>
								<td><h2>021 - 5234 111</h2></td>
							</tr>
						</table>
					</div>
				</div>
				
				<?php
				include("footer_and_sidemenu.php");
                ?>
		</div>
	</body>
</html>