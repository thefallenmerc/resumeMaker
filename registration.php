<?php 
include "db.php";
function sane($value){
	return htmlspecialchars(stripslashes(trim($value)));
} ?>


<?php 
$request = $_POST;
$first = true;
$columns = "";
$values = "";
$hash = hash('ripemd160', rand()%1000);
foreach ($request as $key => $value) {
	
	$request[$key] = sane($value);
	if($first)
	{
		$columns = $key;
		$values = "'".$request[$key]."'";
		$first = false;
	} 
	else
	{
		$columns = $columns.",".$key;
		$values = $values.",'".$request[$key]."'";
	} 
}
// echo $columns."<br>";
// echo $values."<br>";
// echo $hash;
$sql0 = "select * from userList where userName='".$request["userName"]."'";
try{
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result = $stmt->fetchAll();
	if(count($result)>0)
		header("Location: error.php?res=u4t");

}
catch(PDOException $e)
{
	echo $e->getMessage();
	header("Location: error.php?res=f41");
}
$sql = "insert into userList ($columns,hash) values($values,'$hash')";
$sql2 = "insert into userData (userName) values('$request[userName]')";
$sql3 = "insert into userPref (userName) values('$request[userName]')";
// echo "<br>".$sql;
try{
	$conn->exec($sql);
	$conn->exec($sql2);
	$conn->exec($sql3);
	header("Location: error.php?res=5uc");

}
catch(PDOException $e)
{
	echo $e->getMessage();
	header("Location: error.php?res=f41");
}
?>