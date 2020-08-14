<?php
session_start();
if (isset($_POST["add"])) {
	include 'connection.php';
	$school_name=$_POST["school_name"];
	$address=$_POST["address"];
	$phone_no=$_POST["phone_no"];
	$email=$_POST["email"];
	
	$sql="INSERT INTO school (SCHOOL_NAME,ADDRESS,PHONE_NO,EMAIL) VALUES(:school_name,:address,:phone_no,:email)";
	$result=$conn->prepare($sql);
	$stmt=$result->execute(array(":school_name"=>$school_name,":address"=>$address,":phone_no"=>$phone_no,":email"=>$email));
	$_SESSION ['Success']="SUCCESSFULL SCHOOL ADDED";
	header("location:manage_school.php");
}


?>
