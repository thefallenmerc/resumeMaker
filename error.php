<?php
$res = $_GET[res];
$code["5uc"] = "Congratulations! You did it!";
$code["f41"] = "You failed, miserably.";
$code["pmm"] = "Password mismatch.";
$code["u4t"] = "Username already taken.";
$code["unf"] = "Username not found.";
$code["r1p"] = "Resume is private.";

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
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
			<h2>May the father of understanding guide us.</h2>
		</header>
		<hr>
		<div class="container vPadding64">
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
	});
</script>
</html>