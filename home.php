<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
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
					<h1 style="font-style:oblique; color: #6DD687 ">Home</h1>
					<fieldset style="border: 0px; padding: 15px 20px 0px 0px;" ><img src="picture/feza1.jpg" class="thumbnail"> Zanzibar Association Private Schools is association concerned with organization of private schools of Zanzibar. The private school of Zanzibar join in this association is Laurent Internation high school(LIHS), SOS, Al-ihsaan girls Secondary school(AGSS),Highview school(HS), Glorious academy,Trifonia and Anour Academic school. This association of private schools was established by Ally headmaster of Glorious Academy on 15 July of 2005.
						<p>Once established this association start with three school Al-ihsaan girls secondary school, Laurent international high school and Highview school, as day going on other private schools join in this association currently ZAPS consist about seven schools in the association. Currently ZAPS consist of ten schools that have quality at eqully beautifully but different locations wihin the Zanzibar. The headquator of ZAPS are found at Chukwani. In this Association students share exam in Mock exam for all schools. All schools have a good,clean and condusive environment for studying.</p></fieldset>
						
					</div>
				</div>
			</div>
		</div>
		<?php
		include("footer.php")
		?>
	</body>
	</html>
