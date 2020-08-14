<?php
session_start();
if (isset($_POST["register"])) {
	include 'connection.php';
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	$address=$_POST["address"];
	$gender=$_POST["gender"];
	$phone=$_POST["phone"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$sql="INSERT INTO student (fname,lname,address,gender,phone_no,email,username,password) VALUES(:fname,:lname,:address,:gender,:phone,:email,:username,:password )";
	$result=$conn->prepare($sql);
	$stmt=$result->execute(array(":fname"=>$fname,":lname"=>$lname,":address"=>$address,":gender"=>$gender,":phone"=>$phone,":email"=>$email,":username"=>$username,":password"=>$password));
	$_SESSION ['Success']="ALREADY REGISTER LOGIN NOW";
	header("location:login.php");
}


?>
