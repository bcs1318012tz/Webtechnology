<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
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
				<div class="col-sm-9">
					<div style="min-height: 300px; width: 100%">
						<h2 style="font-style:oblique; color: #6DD687 ">About us</h2>
						<img  style="width: 80%" src="picture/feza2.jpg" class="thumbnail">
						<p><h5><b>Mission</b></h5>
							To offer the better education and quality from primary, ordinary level and advance level.
						</p>
						<p><h5><b>Goal</b></h5>
							To support student to learn all subject especially science subject.
						</p>
						<p><h5><b>Values</b></h5>
							ZAPS values are based on excellence, confidence, integrity, competence, efficiency and quality in the academic and administrative.
						</p>
						<!-- <p style="color: #57ABC5; font-size: 20px"><i>Zanzibar Association Private Schools for Better Education!!!</i></p>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<?php
	include("footer.php")
	?>
</body>
</html>
