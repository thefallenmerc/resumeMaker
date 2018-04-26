<?php include 'db.php'; 
if(!isset($_SESSION[userName]))
	header("Location: index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Resume Maker</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="../theFramework/res/css/theframework.css">
	<script src="../theFramework/res/js/jquery.min.js"></script>
	<script src="../theFramework/res/js/theframework.js"></script>
	<!-- <script src="res/script.js"></script> -->
	<style>
		input,textarea{
			border-color: rgba(0,0,0,0.2) !important;
		}
		img{
			width: 200px;
			height: 275px;
			box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.2);
			transition: all 0.4s;
		}
		img:hover{
			box-shadow: 0px 0px 15px 0px rgba(0,0,0,0.6);
		}

		.imgText{
			filter: opacity(0);
			color: white;
			background-color: rgba(0,0,0,0.4);
			box-sizing: border-box;
			position: absolute;
			padding: 8px;
			bottom: 0px;
			transition: all 0.4s;
			left: 0px;
			width: 100%;
			z-index: +1;
			text-align: center;
		}
		a.card:hover>.imgText{
			filter: opacity(1);
		}
		a.card{
			margin: 16px;
			position: relative;
			display: inline-block;
			width: 200px;
			height: 275px;
		}

		.loginBody,.registerBody{
			display: none;
		}
	</style>
</head>
<body>
<!--
	
	b.             8          .8. `8.`888b           ,8' 8 888888888o          .8.          8 888888888o.
	888o.          8         .888. `8.`888b         ,8'  8 8888    `88.       .888.         8 8888    `88.
	Y88888o.       8        :88888. `8.`888b       ,8'   8 8888     `88      :88888.        8 8888     `88
	.`Y888888o.    8       . `88888. `8.`888b     ,8'    8 8888     ,88     . `88888.       8 8888     ,88
	8o. `Y888888o. 8      .8. `88888. `8.`888b   ,8'     8 8888.   ,88'    .8. `88888.      8 8888.   ,88'
	8`Y8o. `Y88888o8     .8`8. `88888. `8.`888b ,8'      8 8888888888     .8`8. `88888.     8 888888888P'
	8   `Y8o. `Y8888    .8' `8. `88888. `8.`888b8'       8 8888    `88.  .8' `8. `88888.    8 8888`8b
	8      `Y8o. `Y8   .8'   `8. `88888. `8.`888'        8 8888      88 .8'   `8. `88888.   8 8888 `8b.
	8         `Y8o.`  .888888888. `88888. `8.`8'         8 8888    ,88'.888888888. `88888.  8 8888   `8b.
	8            `Yo .8'       `8. `88888. `8.`          8 888888888P .8'       `8. `88888. 8 8888     `88.
 -->

	
<!-- navbar -->
<nav id="navmain" class="navbar" style="display: none;"></nav>
<!-- navbar end -->
	<hr>
<!--
	
	8 8888        8 8 8888888888            .8.          8 888888888o.      8 8888888888   8 888888888o.
	8 8888        8 8 8888                 .888.         8 8888    `^888.   8 8888         8 8888    `88.
	8 8888        8 8 8888                :88888.        8 8888        `88. 8 8888         8 8888     `88
	8 8888        8 8 8888               . `88888.       8 8888         `88 8 8888         8 8888     ,88
	8 8888        8 8 888888888888      .8. `88888.      8 8888          88 8 888888888888 8 8888.   ,88'
	8 8888        8 8 8888             .8`8. `88888.     8 8888          88 8 8888         8 888888888P'
	8 8888888888888 8 8888            .8' `8. `88888.    8 8888         ,88 8 8888         8 8888`8b
	8 8888        8 8 8888           .8'   `8. `88888.   8 8888        ,88' 8 8888         8 8888 `8b.
	8 8888        8 8 8888          .888888888. `88888.  8 8888    ,o88P'   8 8888         8 8888   `8b.
	8 8888        8 8 888888888888 .8'       `8. `88888. 8 888888888P'      8 888888888888 8 8888     `88.
 -->
	<header class="row">
		<h2>RESUME CREATOR</h2>
	</header>
	<hr>
<!--
	
	    ,o888888o.        ,o888888o.     b.             8 8888888 8888888888 8 8888888888   b.             8 8888888 8888888888
	   8888     `88.   . 8888     `88.   888o.          8       8 8888       8 8888         888o.          8       8 8888
	,8 8888       `8. ,8 8888       `8b  Y88888o.       8       8 8888       8 8888         Y88888o.       8       8 8888
	88 8888           88 8888        `8b .`Y888888o.    8       8 8888       8 8888         .`Y888888o.    8       8 8888
	88 8888           88 8888         88 8o. `Y888888o. 8       8 8888       8 888888888888 8o. `Y888888o. 8       8 8888
	88 8888           88 8888         88 8`Y8o. `Y88888o8       8 8888       8 8888         8`Y8o. `Y88888o8       8 8888
	88 8888           88 8888        ,8P 8   `Y8o. `Y8888       8 8888       8 8888         8   `Y8o. `Y8888       8 8888
	`8 8888       .8' `8 8888       ,8P  8      `Y8o. `Y8       8 8888       8 8888         8      `Y8o. `Y8       8 8888
	   8888     ,88'   ` 8888     ,88'   8         `Y8o.`       8 8888       8 8888         8         `Y8o.`       8 8888
	    `8888888P'        `8888888P'     8            `Yo       8 8888       8 888888888888 8            `Yo       8 8888
 -->

	<div class="container row vMargin16">
		<p class="centerAlign">Select any of the resume template.</p>
		<!-- <p class="centerAlign"><button class="openModal buttonDodgerBlue1">Let's Start</button></p> -->
		<div class="row hPadding32 centerAlign">
			<?php 
			$dirName = "resumes/";
			$dir = scandir($dirName);
			foreach ($dir as $key => $value) {
			 	if($value != "." && $value!= ".." && is_dir($dirName.$value) && $value!="thumbnails")
			 	{
			 		echo "<h3>".$value."</h3>";
			 		$subDirName = $dirName.$value."/"; 
			 		$subDir = scandir($subDirName);
			 		// print_r($subDir);
			 		foreach ($subDir as $key => $value2) {
			 			if(is_file($subDirName.$value2)&&pathinfo(($subDirName.$value2),PATHINFO_EXTENSION)=="php")
				 		{
				 			$name = substr($value2, 0,strrpos($value2, "."));
				 			echo '<a class="card" target="_blank" href="resume.php?class='.$value.'&variant='.$name.'"><img src="'.$subDirName."".$name.'.png"  alt="'.$name.'" ><div class="imgText">'.$name.'</div></a>';
				 		}
			 		}
			 	}
			 } ?>
		</div>
	</div>
	<hr>

	<!--
		
		8 8888888888       ,o888888o.         ,o888888o. 8888888 8888888888 8 8888888888   8 888888888o.
		8 8888          . 8888     `88.    . 8888     `88.     8 8888       8 8888         8 8888    `88.
		8 8888         ,8 8888       `8b  ,8 8888       `8b    8 8888       8 8888         8 8888     `88
		8 8888         88 8888        `8b 88 8888        `8b   8 8888       8 8888         8 8888     ,88
		8 888888888888 88 8888         88 88 8888         88   8 8888       8 888888888888 8 8888.   ,88'
		8 8888         88 8888         88 88 8888         88   8 8888       8 8888         8 888888888P'
		8 8888         88 8888        ,8P 88 8888        ,8P   8 8888       8 8888         8 8888`8b
		8 8888         `8 8888       ,8P  `8 8888       ,8P    8 8888       8 8888         8 8888 `8b.
		8 8888          ` 8888     ,88'    ` 8888     ,88'     8 8888       8 8888         8 8888   `8b.
		8 8888             `8888888P'         `8888888P'       8 8888       8 888888888888 8 8888     `88.
	 -->

	<footer class="row">
		<h4>MAXIMUM EFFORTS</h4>
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