<!DOCTYPE html>
<html>
	<head>
		<meta charset = "utf-8">
		<title>Contacts - Jakarta Flood Information System</title>
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
						<a href = "?contact=feedback"><span style = "font-size:18pt; color:white;">Feedback</span></a>
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
					if (!empty($_GET['contact'])) {
						if ($_GET['contact'] == "rizal") {
				?>
					
				<div class="divTengah">
					<div style = "margin-left:40px; margin-top:0px;">
						<form action="action" align="middle" id="action"> 
						  <table bgcolor="white" width="95%" height="400pt">
						  <tr>
							 <td align="center" valign="middle">
							 <h2><font color="black">
								   <b>
								   <u><marquee>Ahmad Fahrizal</marquee></u>
								   </b></font>
							 </h2>
								   <br> 
							 <table width="75%" style = "border:4px solid #f39c12" align="left" cellpadding="5" cellspacing="0" height="80pt"> 
								<tr>
								   <td rowspan="12"></td>
								   <img src="images/rizal.jpg" width="174" height="200">
								   
								</tr>
								<tr>
									<td style = "width:250px;">Nama</td>
									<td>:</td>
									<td><a href="mailto:">Ahmad Fahrizal</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td></td>
								</tr>
								<tr>
									<td>Tempat, Tanggal, Lahir</td>
									<td>:</td>
									<td></td>
								</tr>
								<tr>
									<td colspan="4"><b>Pendidikan</b></td>
								</tr>
								<tr>
									<td>2000-2006</td>
									<td>:</td>
									<td></td>
								</tr>
								<tr>
									<td>2006-2009</td>
									<td>:</td>
									<td></td>
								</tr>
								<tr>
									<td>2009-2012</td>
									<td>:</td>
									<td></td>
								</tr>    
								<tr>
									<td>2012-Sekarang</td>
									<td>:</td>
									<td>Universitas YARSI Jurusan Informatika</td>
								</tr>
								<tr>
									<td colspan="4"><b>Kegiatan</b></td>
								</tr>
								<tr>
									<td>2012-Sekarang</td>
									<td>:</td>
									<td>Mahasiswa Universitas YARSI</td>
								</tr>
					</table>
					</td>
					</tr>
					</table>
					</form> 
					</div>
				</div>
						
				<?php
						} elseif ($_GET['contact'] == "ocky") {
				?>
			
				<div class="divTengah">
					<div style = "margin-left:40px; margin-top:0px;">
						<form action="action" align="middle" id="action"> 
						  <table bgcolor="white" width="95%" height="400pt">
						  <tr>
							 <td align="center" valign="middle">
							 <h2><font color="black">
								   <b>
								   <u><marquee>Ocky Aditia Saputra</marquee></u>
								   </b></font>
							 </h2>
								   <br> 
							 <table width="75%" style = "border:4px solid #f39c12" align="left" cellpadding="5" cellspacing="0" height="80pt"> 
								<tr>
								   <td rowspan="12"></td>
								   <img src="images/ocky.jpg" width="174" height="200">
								   
								</tr>
								<tr>
									<td style = "width:250px;">Nama</td>
									<td>:</td>
									<td><a href="mailto:ocky.aditia@gmail.com">Ocky Aditia Saputra</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td>Jl. H. Suit No.12 Rt.003/006 Semper Barat. Cilincing. Jakarta Utara</td>
								</tr>
								<tr>
									<td>Tempat, Tanggal, Lahir</td>
									<td>:</td>
									<td>Bogor, 29 Oktober 1994</td>
								</tr>
								<tr>
									<td colspan="4"><b>Pendidikan</b></td>
								</tr>
								<tr>
									<td>2000-2006</td>
									<td>:</td>
									<td>SDN 11 Pagi</td>
								</tr>
								<tr>
									<td>2006-2009</td>
									<td>:</td>
									<td>SMPN 231 Jakarta</td>
								</tr>
								<tr>
									<td>2009-2012</td>
									<td>:</td>
									<td>SMAN 52 Jakarta</td>
								</tr>    
								<tr>
									<td>2012-Sekarang</td>
									<td>:</td>
									<td>Universitas YARSI Jurusan Informatika</td>
								</tr>
								<tr>
									<td colspan="4"><b>Kegiatan</b></td>
								</tr>
								<tr>
									<td>2012-Sekarang</td>
									<td>:</td>
									<td>Mahasiswa Universitas YARSI</td>
								</tr>
					</table>
					</td>
					</tr>
					</table>
					</form> 
					</div>
				</div>
				
				<?php
						} elseif ($_GET['contact'] == "taufik") {
				?>
			
				<div class="divTengah">
					<div style = "margin-left:40px; margin-top:0px;">
						<form action="action" align="middle" id="action"> 
						  <table "bgcolor="white" width="95%" height="400pt">
						  <tr>
							 <td align="center" valign="middle">
							 <h2><font color="black">
								   <b>
								   <u><marquee>Taufik Hidayat Raharjo</marquee></u>
								   </b></font>
							 </h2>
								   <br> 
							 <table width="75%" style = "border:4px solid #f39c12" align="left" cellpadding="5" cellspacing="0" height="80pt"> 
								<tr>
								   <td rowspan="12"></td>
								   <img src="images/taufik.jpg" width="174" height="178">
								</tr>
								<tr>
									<td style = "width:250px;">Nama</td>
									<td>:</td>
									<td><a href="mailto:taufik.hidayat.raharjo@gmail.com">Taufik Hidayat Raharjo</td>
								</tr>
								<tr>
									<td>Alamat</td>
									<td>:</td>
									<td></td>
								</tr>
								<tr>
									<td>Tempat, Tanggal, Lahir</td>
									<td>:</td>
									<td>Jakarta, 26 Agustus 1994</td>
								</tr>
								<tr>
									<td colspan="4"><b>Pendidikan</b></td>
								</tr>
								<tr>
						<td>2000-2006</td>
						<td>:</td>
						<td>SDN Sunter Agung 3</td>
					</tr>
					<tr>
						<td>2006-2009</td>
						<td>:</td>
						<td>SMPN 140 Jakarta</td>
					</tr>
					<tr>
						<td>2009-2012</td>
						<td>:</td>
						<td>YAPPENDA Jakarta</td>
					</tr>    
					<tr>
						<td>2012-Sekarang</td>
						<td>:</td>
						<td>Universitas YARSI Jurusan Informatika</td>
					</tr>
					<tr>
						<td colspan="4"><b>Kegiatan</b></td>
					</tr>
					<tr>
						<td>2012-Sekarang</td>
						<td>:</td>
						<td>Mahasiswa Universitas YARSI</td>
					</tr>
					</table>
					</td>
					</tr>
					</table>
					</form> 
					</div>
				</div>
				
				<?php
						} elseif ($_GET['contact'] == "feedback") {
				?>
			
				<div class="divTengah">
					<div style = "margin-left:50px; margin-top:-15px;">
						<form method = "post" autocomplete = "on" action = "insert_feedback.php">
							<table class = "fontFeedback">
								<tr>
									<td style = "width:200px;">
										<script type = "text/javascript">
											
											var current = new Date();
											var date = current.getUTCDate();
											var month = current.getUTCMonth()+1;
											var year = current.getUTCFullYear();
											
											document.write("<p> Date : " + date + "-" + month + "-" + year + "</p>");
										</script>
									</td>
									<td style = "width:20px;"></td>
									<td> </td>
								</tr>
								<tr>
									<td style = "width:200px;">Name </td>
									<td style = "width:20px;">:</td>
									<td>
										<input type = "text" name = "firstname" placeholder = "First Name" class = "textFieldNama" required/>&nbsp;
										<input type = "text" name = "lastname" placeholder = "Last Name" class = "textFieldNama" />
									</td>
								</tr>
								<tr>
									<td style = "width:200px;">Email </td>
									<td style = "width:20px;">:</td>
									<td>
										<input type = "email" name = "email" placeholder = "name@domain.com atau name@domain.co.id" class = "textFieldEmail" required />
									</td>
								</tr>
								<tr>
									<td style = "width:200px;">Comments </td>
									<td style = "width:20px;">:</td>
									<td>
										<textarea name = "tanggapan" placeholder = "comments" required class = "textFieldTanggapan" cols = "70" rows = "12" ></textarea>
									</td>
								</tr>
								<tr>
									<td> </td>
									<td> </td>
									<td>
										<input style = "width:150px; height:50px; font-size:14pt; font-family: arcena;" type = "submit" value = "Submit"/>
										<input style = "width:150px; height:50px; font-size:14pt; font-family: arcena;" type = "reset" value = "Clear"/>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
					
				<?php
					} 
				} else {
                ?>
				
				<div class="divTengah">
					<table style = "margin-left:200px; margin-top:30px; text-align:center;">
						<tr>
							<td style = "padding-right:80px"><a href = "?contact=rizal"><h2>Ahmad Fahrizal</h2></a></td>
							<td style = "padding-right:80px"><a href = "?contact=ocky"><h2>Ocky Aditia Saputra</h2></a></td>
							<td style = "padding-right:80px"><a href = "?contact=taufik"><h2>Taufik Hidayat Raharjo</h2></a></td>
						</tr>
						<tr>
							<td style = "padding-right:80px"><a href = "?contact=rizal"><img src = "images/rizal.jpg" width = "160" height = "200"></a></td>
							<td style = "padding-right:80px"><a href = "?contact=ocky"><img src = "images/ocky.jpg" width = "160" height = "200"></a></td>
							<td style = "padding-right:80px"><a href = "?contact=taufik"><img src = "images/taufik.jpg" width = "160" height = "200"></a></td>
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