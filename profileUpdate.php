<?php 
include "db.php";
function sane($value){
	return htmlspecialchars(stripslashes(trim($value)));
} ?>


<?php 
if(!isset($_SESSION[userName]))
	header("Location: index.php");
$request = $_POST;
$result = false;
$userData = array();
$userList = array();
$size = 9;
// count = 0;

foreach (array_slice($request, 0,9) as $key => $value) {
	array_push($userList, $key."='".sane($value)."'");
}
foreach (array_slice($request, 9) as $key => $value) {
	array_push($userData, $key."='".sane($value)."'");
}
// echo $columns."<br>";
// echo $values."<br>";
// echo $hash;
$sql = "update userList set ".implode(",", $userList)." where userName='".$_SESSION[userName]."'";
$sql2 = "update userData set ".implode(",", $userData)." where userName='".$_SESSION[userName]."'";
echo "<br>".$sql."<br>".$sql2;
try{
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$result = true;
}
catch(PDOException $e)
{
	echo $e->getMessage()."1";
	// header("Location: error.php?res=f41");
}
try{
if($result)
{
	echo "here";
	$stmt2 = $conn->prepare($sql2);
	$stmt2->execute();
	$result = true;
}
else
	$result = false;
}
catch(PDOException $e)
{
	echo $e->getMessage()."2";
}
if($result)
	header("Location: error.php?res=5uc");
else
	header("Location: error.php?res=f41");
?>