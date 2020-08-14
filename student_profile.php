<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row content">
			<?php
			include("header.php");?>
			<div class="col-sm-3 sidenav" style="background-color: #F0F0F0; min-height: 650px">
              <h4>WELCOME</h4>
				<ul class="nav nav-pills nav-stacked">
					<li><a href="home.php">Home</a></li>
					<li><a href="about us.php">About us</a></li>
					<li><a href="contact.php">Contact us</a></li>
					<li><a href="application.php">Application</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
				<br>
			</div>

			<div class="col-sm-9">
				<h3 style="color: #6DD687">Profile</h3>
				<hr>
				<?php
				if (isset($_SESSION['Success'])) {
					echo $_SESSION['Success'];
				}
				?>
				
				<?php
				include("connection.php");
				$user=$_SESSION['user'];
				$pass=$_SESSION['pass'];
				if(isset($_SESSION["user"])){
					$sql ="Select * from student where username='$user' and password='$pass'"; 
					$stmt=$conn->query($sql);
					$row=$stmt->fetch(PDO::FETCH_ASSOC);
					?>
					<table class="table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Address</th>
								<th>Gender</th>
								<th>Contact</th>
								<th>Email</th>
								<th>Username</th>
							</tr>
						</thead>
						<tbody>
							<td>
								<?php
								echo $row['FNAME']." ".$row['MNAME']." ".$row['LNAME'];
								?>
							</td>
							<td>
								<?php
								echo $row['ADDRESS'];
								?>
							</td>
							<td>
								<?php
								echo $row['GENDER'];
								?>
							</td><td>
								<?php
								echo $row['PHONE_NO'];
								?>
							</td>
							<td>
								<?php
								echo $row['EMAIL'];
								?>
							</td>
							
							<td>
								<?php
								echo $row['USERNAME'];
								?>
							</td>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
unset($_SESSION['Success']);
}
include("footer.php")
?>
</body>
</html>

