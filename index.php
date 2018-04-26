<?php include 'db.php'; ?>
<?php if(isset($_GET["v"]))
// echo $_GET["v"];
header("Location: viewProfile.php?v=".$_GET[v]); 
// print_r($_SESSION);
?>
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
	
	<?php 
	if(isset($_SESSION[userName]))
	{
	?>
	<p class="centerAlign"> Logged in as <?php echo $_SESSION[fullName] ?>. Click <a target="_blank" href="viewProfile.php?v=<?php echo $_SESSION["userName"]; ?>">here</a> to view your profile or <a target="_blank" href="profileEdit.php">here</a> to edit it.</p>
	<p class="centerAlign">Or <a target="_blank" href="preferences.php">here</a> to set preferences.</p>
	<p>or see your values here: <a target="_blank" href="values.php">this</a></p>
	<?php
	}
	else
	{
	?> 
	<p class="centerAlign">
		<a href="#" onclick="letLogin()" class="button">Login</a> or <a href="#" onclick="letRegister()" class="button">Register</a>
	</p>
	<div class="row loginBody">
				<form action="login.php" method="post" class="columnOffset-2 col-8">
			<div class="row">
				<label class="row">User Name
				<input type="text" name="userName"></label>
				<label class="row">Password
				<input type="password" name="password"></label>
			</div>
<div class="row">
				<input type="submit" class=" buttonBlock buttonDodgerBlue1" value="Go">
				</div>
			</form>
			</div>
			<div class="row registerBody">
				<form action="registration.php" method="post" class="columnOffset-2 col-8">
			<div class="row">
				<label class="row">Full Name
				<input type="text" name="fullName" required></label>
				<label class="row">User Name
				<input type="text" name="userName" required></label>
				<label class="row">Address Line
				<textarea name="address" required></textarea></label>
				<label class="row">Email
				<input type="text" name="email" required></label>
				<label class="row">Password
				<input type="password" name="password" required></label>
				<label class="row">Phone Number
				<input type="number" name="phoneNo" required></label>
				<label class="row">About you
				<textarea name="about" required></textarea></label>
				<label class="row">Date of Birth
				<input type="date" name="dob" min="1950-01-01" required></label>
				<label class="row">Place of Birth
				<input type="text" name="pob" required></label>
				<label class="row">Father's Name
				<input type="text" name="fName" required></label>				
			</div>
<div class="row">
				<input type="submit" class=" buttonBlock buttonDodgerBlue1" value="Go">
				</div>
			</form>
			</div>
	<?php
	} ?>
		<p class="centerAlign">Fill in the details and create instant web resumes.
		<br><b>P.S.</b> Use comma to seperate multiple entries in textareas. <br></p>
		<!-- <p class="centerAlign"><button class="openModal buttonDodgerBlue1">Let's Start</button></p> -->
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
		<p>MAXIMUM EFFORTS</p>
	</footer>
	
	<div class="modalBG">
		<div class="modal">
			<div class="modalHead">Head</div>
			<div class="modalBody">
			
			</div>
			<div class="modalFoot clearFix"><a href="JavaScript:void(0)" class="button pullRight" onclick="closeModal()">close</a></div>
		</div>
	</div>
</body>
<script>
	$(document).ready(function(){
		$("#navmain").load("navbar.php",function(){
			$("#navmain").slideDown();
		});
	});

	function letLogin(){
	$(".registerBody").hide();
	$(".loginBody").show();
//	$(".modalBG").fadeIn();
}

	function letRegister(){
	$(".registerBody").show();
	$(".loginBody").hide();
//	$(".modalBG").fadeIn();
}
</script>
</html>