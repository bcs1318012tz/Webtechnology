<?php
include("connection.php");
session_start();
if(isset($_POST['edit'])){
    $school_name=$_POST['school_name'];
     $email=$_POST['email'];
      $address=$_POST['address'];
       $phone_no=$_POST['phone_no'];
        $school_id=$_POST['school_id'];

   $sql = "UPDATE school SET school_name=:school_name,email=:email,address=:address,phone_no=:phone_no  WHERE school_id=:school_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(
        ':school_name' =>$school_name,
        ':address' => $address,
        ':email' => $email,
        ':phone_no' => $phone_no,
        ':school_id' => $school_id));
    $_SESSION['success'] = 'Record updated';
    header( 'Location:manage_school.php' );
}else{
    echo $error;
}
?>