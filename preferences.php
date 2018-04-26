<?php include 'db.php';
if(!isset($_SESSION[userName]))
	header("Location: index.php");
try{
	$stmt = $conn->prepare("select * from userPref where userName=".$_SESSION[userName]);
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result->$stmt->fetchAll();
}
catch(PDOException $e)
{
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Preferences</title>
	<link rel="stylesheet" href="../theFramework/res/css/theframework.css">
	<script src="../theFramework/res/js/jquery.min.js"></script>
	<script src="../theFramework/res/js/theframework.js"></script>
</head>
<body>
<!-- <body class="inverseBody"> -->
<!-- <div class="bodyBG"></div> -->
		
<!-- navbar -->
<nav id="navmain" class="navbar" style="display: none;"></nav>
<!-- navbar end -->
	<hr>
		<header class="row">
			<h2>Resume Maker</h2>
		</header>
		<hr>
		<div class="container">
		<div class="row">
			<form action="setPreferences.php" method="post" class="col-6 columnOffset-3  vPadding32 clearFix">
				<label>
					Select Class:
					<select name="class" id="">
					<option value="-30">Select a class...</option>
						<?php 
							$dir = "resumes/";
							$dirContent = scandir($dir);
							foreach ($dirContent as $key => $value) {
								if(is_dir($dir.$value)&&$value!="."&&$value!="..")
									echo '<option value="'.$value.'">'.$value.'</option>';
							}

						 ?>
					</select>
					<?php //print_r($dirContent); ?>
				</label>
				<label>
					Select Variant:
					<select name="variant" id=""><option value="-30">Please select a class...</option></select>
				</label>
				<button name="resumePref" class="buttonBlock buttonDodgerBlue1">SET</button>
			</form>
		</div>
		<hr>
		<div class="row">
			<form action="setPreferences.php" method="post" class="col-6 columnOffset-3  vPadding32">
				<label>
					Privacy:
					<select name="privacy" id="">
						<option value="-30">Select privacy policy</option>
						<option value="public">public</option>
						<option value="private">private</option>
					</select>
				</label>
				<button class="buttonBlock buttonRed1" name="privacyPref">SET</button>
			</form>
		</div>
			<h1 class="centerAlign"> <?php echo $code[$res]; ?><h1>
		</div>
		<hr>
		<footer class="row">
		<h4>maximum efforts</h4>
		</footer>
</body>
<script>
	$(document).ready(function(){
		$("#navmain").load("navbar.php",function(){
			$("#navmain").slideDown();
		});
		$("select[name='class']").change(function(){
			$.get("getVariant.php",{"class":this.value},function(data, status){
				$("select[name='variant']").html(data);	
			});
		});
	});
</script>
</html>