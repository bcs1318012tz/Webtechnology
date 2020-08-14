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
			include("header.php");
			include("nav.php");
			?>
			<div class="col-sm-9">
				<h3 style="color: #6DD687">Manage School</h3>
				<?php
				if (isset($_SESSION['Success'])) {
					echo $_SESSION['Success'];
				}
				?>
				<hr>
				<table class="table">
					<thead>
						<tr>
							<th>School Name</th>
							<th>Address</th>
							<th>Contact</th>
							<th>Email</th>
							<th>Edit</th>
							<th>Delete</th>

						</tr>
					</thead>				
					<?php
					include("connection.php");
					$sql ="Select * from school"; 
					$stmt=$conn->query($sql);
					while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
						?>
						<tbody>
							<tr>
								<td>
									<?php
									echo $row['SCHOOL_NAME'];
									?>
								</td>
								<td>
									<?php
									echo $row['ADDRESS'];
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
									<a href="edit.php?ID=<?php echo $row['SCHOOL_ID']?>">Edit</a>
								</td>
								<td>
									<a href="deleteschool.php?ID=<?php echo $row['SCHOOL_ID']?>">Delete</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
</div>
</div>
<?php
unset($_SESSION['Success']);
include("footer.php");
?>
</body>
</html>

