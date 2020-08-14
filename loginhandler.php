
<?php
session_start();
include 'connection.php';
if (isset($_POST["submit"])){
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="SELECT * FROM student WHERE USERNAME= :username AND PASSWORD= :password";
	 
	$stmt=$conn->prepare($sql);
	$stmt->execute(array("username"=>$username,"password"=>$password));
	if ($stmt->rowCount()>0) {
		$_SESSION['user']=$username;
		$_SESSION['pass']=$password;
		header("location:student_profile.php");
	}else{
	$sql="SELECT * FROM admin WHERE USERNAME=:username AND PASSWORD= :password";
	$stmt=$conn->prepare($sql);
	$result=$stmt->execute(array("username"=>$username,"password"=>$password));
	if ($stmt->rowCount()>0) {
	$_SESSION['user']=$username;
	$_SESSION['pass']=$password;
	
	header("location:admin_profile.php");
}else{
	$_SESSION['Fail']="Invalid username or password";
header("location:login.php");
 }
}
}
  ?>
  
