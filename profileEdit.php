<?php 
include 'db.php';
if(!isset($_SESSION[userName]))
	header("Location: index.php");
function makeList($prefix, $text, $postfix){
	$result = explode(",", $text);
	foreach ($result as $key => $value) {
		echo $prefix.$value.$postfix;
	}
}
try{
	$stmt =  $conn->prepare("select * from userList join userData on userList.userName=userData.userName where userList.userName='".$_SESSION[userName]."'");
	$stmt->execute();
	$stmt->setFetchMode(PDO::FETCH_ASSOC);
	$result = $stmt->fetchAll();
}
catch(PDOException $e)
{
	header("Location: error.php?res=m30");
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Profile</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="../theFramework/res/css/theframework.css">
	<script src="../theFramework/res/js/jquery.min.js"></script>
	<script src="../theFramework/res/js/theframework.js"></script>
	<style>
		input,textarea{
			border-color: rgba(0,0,0,0.2) !important;
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

	<nav class="navbar">
		<div class="navHead">
			<a href="JavaScript:void(0)" class="noDeco linkActive"><b>RESUME MAKER</b></a>
		</div>
		<div class="navBody">
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="resume.html">RESUME</a></li>
				<li><a href="about.html">ABOUT US</a></li>
			</ul>
		</div>
	</nav>
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

		<p class="centerAlign">Update your details here.
		<br><b>P.S.</b> Use comma to seperate multiple entries in textareas.</p>
		<!-- <p class="centerAlign"><button class="openModal buttonDodgerBlue1">Let's Start</button></p> -->
		<div class="row hPadding32">
			<form action="profileUpdate.php" method="post" class="columnOffset-2 col-8">
			<div class="row">
				<label class="row">Full Name
				<input type="text" name="fullName" value="<?php echo $result[0][fullName] ?>"></label>
				<label class="row">Address Line
				<textarea name="address"><?php echo $result[0][address] ?></textarea></label>
				<label class="row">Email
				<input type="email" name="email" value="<?php echo $result[0][email] ?>"></label>
				<label class="row">Password
				<input type="text" name="password" value="<?php echo $result[0][password] ?>"></label>
				<label class="row">Phone Number
				<input type="number" name="phoneNo" value="<?php echo $result[0][phoneNo] ?>"></label>
				<label class="row">About you
				<textarea name="about"><?php echo $result[0][about] ?></textarea></label>
				<label class="row">Date of Birth
				<input type="date" name="dob" value="<?php echo $result[0][dob] ?>"></label>
				<label class="row">Place of Birth
				<input type="text" name="pob" value="<?php echo $result[0][pob] ?>"></label>
				<label class="row">Father's Name
				<input type="text" name="fName" value="<?php echo $result[0][fName] ?>"></label>
				<label class="row">Projects you worked on
				<textarea name="projects"><?php echo $result[0][projects] ?></textarea></label>
				<label class="row">Something motivating
				<textarea name="motivating"><?php echo $result[0][motivating] ?></textarea></label>
				<label class="row">Graduation
				<input type="text" name="graduation" value="<?php echo $result[0][graduation] ?>"></label>
				<label class="row">Senior Secondary
				<input type="text" name="sSecondary" value="<?php echo $result[0][sSecondary] ?>"></label>
				<label class="row">Secondary
				<input type="text" name="secondary" value="<?php echo $result[0][secondary] ?>"></label>
				<label class="row">Languages
				<textarea name="languages"><?php echo $result[0][languages] ?></textarea></label>
				<label class="row">Technologies
				<textarea name="technologies"><?php echo $result[0][technologies] ?></textarea></label>
				<label class="row">Additional Skills
				<textarea name="skills"><?php echo $result[0][skills] ?></textarea></label>
				<label class="row">Interests and Hobbies
				<textarea name="interests"><?php echo $result[0][interests] ?></textarea></label>
				<label class="row">Subjects of Interest
				<textarea name="subjects"><?php echo $result[0][subjects] ?></textarea></label>
				<label class="row">Training
				<textarea name="training"><?php echo $result[0][training] ?></textarea></label>
				<label class="row">Achievements
				<textarea name="achievements"><?php echo $result[0][achievements] ?></textarea></label>
				<label class="row">Seminars and Workshops
				<textarea name="seminars"><?php echo $result[0][seminars] ?></textarea></label>
								
				
			</div>
<div class="row">
				<button type="submit" class=" buttonBlock buttonDodgerBlue1">Go</button>
				</div>
			</form>
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
		<h4>&copy; the fallen merc</h4>
	</footer>
	<div class="modalBG">
	<div class="modal popup">
		<div class="modalHead hPadding32">
			RESUME MAKER
		</div>
		<div class="modalBody" style="height: 300; overflow-y: auto;">
			
		</div>
		<div class="modalFoot clearFix"><a href="JavaScript:void(0)" class="button pullRight closeModal">close</a></div>
	</div></div>
</body>
</html>