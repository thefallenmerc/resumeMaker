<?php include 'db.php'; 
if(!isset($_SESSION[userName]))
	header("Location: index.php");
else
	$userName = $_SESSION[userName];
include "resumes/".$_GET["class"]."/".$_GET["variant"].".php";

?>