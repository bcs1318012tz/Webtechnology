<?php
session_start();
 if (isset($_POST["apply"])) {
	include 'connection.php';
	$appId=$_POST["appId"];
	$last_school=$_POST["last_school"];
	$last_class=$_POST["last_class"];
	$class=$_POST["current_class"];
	$school_name=$_POST["school_name"];

	$sql ="Select * from school where school_name='$school_name'"; 
          $stmt=$conn->query($sql);
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
          $school_id =$row['SCHOOL_ID'];
    	
	$sql="INSERT INTO application (last_school,last_class,class,school_id) VALUES(:last_school,:last_class,:class,:school_id)";
	$result=$conn->prepare($sql);
	$result->execute(array(":last_school"=>$last_school,":last_class"=>$last_class,":class"=>$class,":school_id"=>$school_id));
	$_SESSION ['Success']="ALREADY YOU MAKE APPLICATION WAIT FOR RESULT";
	header("location:student_profile.php");
}else{
	echo "error";
}


?>
