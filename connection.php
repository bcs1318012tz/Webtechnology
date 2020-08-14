<?php
$servername="localhost";
$username="root";
$password=""; 
try{
	$conn =new PDO("mysql:host=$servername; dbname=zap", $username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOexception $e){
	echo "Connection failed".$e->getMessage();
}


// $pdo= new PDO("mysql:host=localhost; dbname=zap",'root', " " );
// $pdo->setAttribute(PDO::ATTR_ERRMODE_EXCEPTION);
?>