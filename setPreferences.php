<?php include 'db.php';
if(!isset($_SESSION["userName"]))
	header("Location: index.php");
if(isset($_POST["resumePref"]))
{
	$request = $_POST;
	if($request["class"]==-30||$request["variant"]==-30)
		header("Location: error.php?res=1p5");
	else
	try {
		$sql = "update userPref set class='".$request["class"]."', variant='".$request["variant"]."' where userName='".$_SESSION["userName"]."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		// echo $sql;
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		// if($stmt->rowCount()>0)
			header("Location: error.php?res=5uc");
		// else
			// echo "lol";
		// echo $sql;
			// header("Location: error.php?res=f41");
	} catch (PDOException $e) {
		echo $e;
			// header("Location: error.php?res=f41");
	}
 }
 else if(isset($_POST["privacyPref"]))
 {
	$request = $_POST;
	if($request["privacy"]==-30)
		header("Location: error.php?res=1p5");
	else try {
		$sql = "update userPref set privacy='".$request["privacy"]."' where userName='".$_SESSION["userName"]."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		if($stmt->rowCount()>0)
			header("Location: error.php?res=5uc");
		else
			header("Location: error.php?res=f41");
	} catch (PDOException $e) {
		header("Location: error.php?res=f41");
	}

 }
 ?>
