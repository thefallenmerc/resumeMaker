<?php 
include "db.php";
if(!isset($_SESSION[userName]))
	header("Location: error.php?res=l04");
function sane($value){
	return htmlspecialchars(stripslashes(trim($value)));
} ?>

<?php 
if(isset($_SESSION[userName]))
{
	session_unset();
	session_destroy();
	header("Location: error.php?res=l05");
}
else
	header("Location: error.php?res=4l0");

 ?>