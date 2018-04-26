<?php 
session_start();
try{
	// $conn = new PDO("mysql:host=localhost;dbname=u362483751_ftw","u362483751_tfm","vpceh25en");
	$conn = new PDO("mysql:host=localhost;dbname=u362483751_ftw","root","password");
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	// echo $e;
	header("Location: error.php?res=db3");
 }
 ?>
