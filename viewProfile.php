<?php 
include 'db.php';

if(isset($_GET[v]))
	$userName = $_GET[v];
else
	$userName = demo;
try{
	$stmt =  $conn->prepare("select * from userList join userData on userList.userName=userData.userName join userPref on userData.userName = userPref.userName where userList.userName='".$userName."'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result = $stmt->fetchAll();
}
catch(PDOException $e)
{
	header("Location: error.php?res=m30");
}

if(count($result) == 0)
	header("Location: error.php?res=rnf");
if($result[0]["privacy"]=="private" && $_SESSION["userName"]!=$userName)
	header("Location: error.php?res=r1p");
 ?>
<?php 

include "resumes/".$result[0]["class"]."/".$result[0]["variant"];

 ?>