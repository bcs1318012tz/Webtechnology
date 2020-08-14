<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
	<title>Login</title>
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
					<h4>WELCOME</h4>
					<li><a href="home.php">Home</a></li>
					<li><a href="about us.php">About us</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="login.php">Login</a></li>
					
				</ul>
				<br>
			</div>
			
			<div class="col-sm-9">
				<div style="min-height: 300px; width: 100%">
					<center>
						<form method="POST" action="loginhandler.php" style="border:1px solid; width: 50%; margin-top: 50px; border-radius: 5px; padding: 10px 24px 2px 50px; border-color: #3CB371">
							<?php
							if(isset($_SESSION['Fail'])){
								echo $_SESSION['Fail'];
							}
							?>
							<?php
							if (isset($_SESSION['Success'])) {
								echo $_SESSION['Success'];
							}
							?>
							<h2 style="font-style: oblique;"> Login here...<img src="picture/show.gif"></h2>
							<div class="form-group">
								<input style="width: 90%" type="text" class="form-control" 
								name="username"id="" placeholder="Username" required="">
							</div>
							<div class="form-group">
								<input style="width: 90%" type="password" class="form-control"  
								name="password" id="" placeholder="Password" required="">
							</div>
							<input type="submit" class="btn btn-success" name="submit" value="Login">
							<input  style="margin-left:50px;" type="reset" class="btn btn-info" value="Reset">
							<p style="margin-top: 10px">New user?<a style="color:#191970 " href="student_form.php"> Sign up</a><img src="picture/new.gif"></p>
						</form>
				
						<?php
							  // $_SESSION['SUCCESS'];
						?>
					</center>
				</div>
			</div>
		</div>
	</div>
	<?php
	unset($_SESSION['Success']);
	unset($_SESSION['Fail']);
	include("footer.php");
	?>
</body>
</html>
