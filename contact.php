<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	
</head>
<body>
	<div class="container-fluid">
		<div class="row content">
			<?php
			include("header.php");
			?>
			
			<div class="col-sm-3 sidenav" style="background-color: #F0F0F0; min-height: 650px">

				<ul class="nav nav-pills nav-stacked">
					<li><a href="home.php">Home</a></li>
					<li><a href="about us.php">About us</a></li>
					<li><a href="contact.php">Contact us</a></li>		
					<li><a href="logout.php">Logout</a></li>
				</ul>
				<br>
			</div>

			
			<div class="col-sm-9">
				<div style="min-height: 300px; width: 100%">
					
					<fieldset>
					<img  style="width: 30%; height: 150px;margin-top: 20px; float: left; "src="picture/school.jpg" class="thumbnail">
					<img  style="width: 30%; height: 150px;margin-top: 20px; float: left; "src="picture/school5.jpg" class="thumbnail">
					<img  style="width: 30%; height: 150px;margin-top: 20px; float: left; "src="picture/school6.jpg" class="thumbnail">
					<img  style="width: 30%; height: 150px;margin-top: 20px; float: left;" src="picture/feza2.jpg" class="thumbnail">
					<img  style="width: 30%; height: 150px;margin-top: 20px; float: left;" src="picture/feza1.jpg" class="thumbnail">
					<img  style="width: 30%; height: 150px;margin-top: 20px; float: left;" src="picture/feza.jpg" class="thumbnail"></fieldset>
					
					<h3>Zanzibar Association Private Shools</h3>
					<p> P.O Box 2233</p>
					<p> Location: Chukwani</p>
					<p>Zanzibar/Tanzania</p>
					<p>Email: tt@zaps.ac.tz</p>
					
				</div>
			</div>
		</div>
	</div>
	<?php
	include("footer.php")
	?>
</body>
</html>

