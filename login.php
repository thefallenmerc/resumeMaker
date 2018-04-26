<?php 
include "db.php";
if(isset($_SESSION[userName]))
	header("Location: error.php?res=l14");
function sane($value){
	return htmlspecialchars(stripslashes(trim($value)));
} ?>


<?php 
$request = $_POST;
// $first = true;
// $columns = "";
// $values = "";
// $hash = hash('ripemd160', rand()%1000);
foreach ($request as $key => $value) {
	
	$request[$key] = sane($value); 
}
// echo $columns."<br>";
// echo $values."<br>";
// echo $hash;
// echo "<br>".$sql;
try{

// $sql = $conn->prepare("select * from userList");
$sql = $conn->prepare("select * from userList where userName='".$request[userName]."'");
	$sql->execute();
	$sql->setFetchMode(PDO::FETCH_ASSOC);
	$result = $sql->fetchAll();
	if(count($result)>0)
	{
		if($result[0][password] == $request[password])
		{
			// echo "password match";
			$_SESSION[userName] = $result[0][userName];
			$_SESSION[fullName] = $result[0][fullName];
			header("Location: index.php");

		}
		else
			header("Location: error.php?res=pmm");
	}
	else
		header("Location: error.php?res=unf");
	// foreach ($result as $key => $value) {
	// 	# code...
	// 	echo "lol1".$value[address]."<br>";
	// }

	// header("Location: error.php?res=5uc");

}
catch(PDOException $e)
{
	echo $e->getMessage();
	header("Location: error.php?res=f41");
}
?>