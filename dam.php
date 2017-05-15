<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Dam - Jakarta Flood Information System</title>
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
						<span style = "font-size:18pt; color:white;">Dam</span>
						<span style = "font-size:18pt; color:white; margin-left:300px; position:absolute;">
							<div class = "search">
								<table class = "searchBackground">
									<tr>
										<form method = "get" autocomplete = "on" action = "search.php">
											<th><input type = "search" placeholder = "Search....." class = "textFieldSearch"/></th>
											<th><input type = "submit" value = "" class = "searchB"></th>
										</form>
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
				
				<?php
					//kode php ini kita gunakan untuk menampilkan pesan eror
					if (!empty($_GET['dam'])) {
						if ($_GET['dam'] == "katulampa") {
				?>
					
				<div class="divTengah">
					<div style = "margin-left:40px; margin-top:35px;">
						<div style = "background-color:red; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 1</h2></div>
						<div style = "background-color:yellow; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 2</h2></div>
						<div style = "background-color:blue; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 3</h2></div>
						<div style = "background-color:green; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 4</h2></div>
					</div>
					
					<div style = "margin-left:140px; margin-top:-99px;">
						<img src = "images/air.png" width = "850" height = "100">
					</div>
					<div style = "margin-left:1000px; margin-top:-405px;">
						<img src = "images/garis.png" height = "399">
					</div>
				</div>
						
				<?php
						} elseif ($_GET['dam'] == "manggarai") {
				?>
			
				<div class="divTengah">
					<div style = "margin-left:40px; margin-top:35px;">
						<div style = "background-color:red; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 1</h2></div>
						<div style = "background-color:yellow; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 2</h2></div>
						<div style = "background-color:blue; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 3</h2></div>
						<div style = "background-color:green; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 4</h2></div>
					</div>
					
					<div style = "margin-left:140px; margin-top:-99px;">
						<img src = "images/air.png" width = "850" height = "100">
					</div>
					<div style = "margin-left:1000px; margin-top:-405px;">
						<img src = "images/garis.png" height = "399">
					</div>
				</div>
				
				<?php
						} elseif ($_GET['dam'] == "pesanggrahan") {
				?>
			
				<div class="divTengah">
					<div style = "margin-left:40px; margin-top:35px;">
						<div style = "background-color:red; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 1</h2></div>
						<div style = "background-color:yellow; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 2</h2></div>
						<div style = "background-color:blue; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 3</h2></div>
						<div style = "background-color:green; height:100px; width:100px; text-align:center; margin-top:-20px; line-height: 100px;"><h2>State 4</h2></div>
					</div>
					
					<div style = "margin-left:140px; margin-top:-99px;">
						<img src = "images/air.png" width = "850" height = "100">
					</div>
					<div style = "margin-left:1000px; margin-top:-405px;">
						<img src = "images/garis.png" height = "399">
					</div>
				</div>
					
				<?php
					} 
				} else {
                ?>
				
				<div class="divTengah">
					<table style = "margin-left:20px; margin-top:30px; text-align:center;">
						<tr>
							<td><a href = "?dam=katulampa"><h2>Katulampa</h2></a></td>
							<td><a href = "?dam=manggarai"><h2>Manggarai</h2></a></td>
							<td><a href = "?dam=pesanggrahan"><h2>Pesanggrahan</h2></a></td>
						</tr>
						<tr>
							<td><a href = "?dam=katulampa"><img src = "images/katulampa.jpg" width = "350" height = "250"></a></td>
							<td><a href = "?dam=manggarai"><img src = "images/manggarai.jpg" width = "350" height = "250"></a></td>
							<td><a href = "?dam=pesanggrahan"><img src = "images/pesanggrahan.jpg" width = "350" height = "250"></a></td>
						</tr>
					</table>
				</div>
				
				<?php
				}
				
				include("footer_and_sidemenu.php");
                ?>
				
		</div>
	</body>
</html>