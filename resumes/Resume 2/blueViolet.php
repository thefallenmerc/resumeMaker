<?php 
function makeList($prefix, $text, $postfix){
	$result = explode(",", $text);
	foreach ($result as $key => $value) {
		echo $prefix.$value.$postfix;
	}
}
try{
	$stmt =  $conn->prepare("select * from userList join userData on userList.userName=userData.userName where userList.userName='".$userName."'");
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
	<title><?php echo $result[0][fullName];  ?> - Resume</title>
	<meta name="viewport" content="width=device-width initial-scale=1">
	<link rel="stylesheet" href="../theFramework/res/css/theframework.css">
	<script src="../theFramework/res/js/jquery.min.js"></script>
	<script src="../theFramework/res/js/theframework.js"></script>
	<style>
		@font-face{
			font-family: Eurostile;
			src: url("res/Eurostile.ttf");
		}

		body{
			font-family: Eurostile;
		}

		li a{
			text-decoration: none;
		}
		li a:hover{
			text-decoration: underline;
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

	<!-- <nav class="navbar">
		<div class="navHead">
			<a href="JavaScript:void(0)" class="noDeco linkActive"><b>THE FRAMEWORK</b></a>
		</div>
		<div class="navBody">
			<ul>
				<li><a href="index.html">HOME</a></li>
				<li><a href="typography.html">TYPOGRAPHY</a></li>				<li><a href="structure.html">STRUCTURE</a></li>
				<li><a href="customization.html">customization</a></li>
				<li class="dropHead"><a href="buttons.html">Buttons</a>
					<ul>
						<li><a href="buttons.html">Buttons</a></li>
						<li><a href="buttons.html">Anchor Buttons</a></li>
						<li><a href="buttons.html">Inverted Buttons</a></li>
					</ul>
				</li>
				<li><a href="additionals.html">additionals</a></li>
				<li><a href="table.html">TABLES</a></li><li><a href="forms.html">FORMS</a></li>
				<li><a href="example.html">EXAMPLE</a></li>
				<li><a href="error.html">Error</a></li>
				<li><a href="about.html">ABOUT US</a></li>
			</ul>
		</div>
	</nav>
	<hr> -->
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
	<!-- <header class="row">
		<h2>the framework</h2>
	</header>
 -->	
 <!-- <hr> -->
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
	<div class="container row vMargin16" style="float: none; width: 80%; margin: auto;">
		<div class="row bgViolet textWhite padding32" style="align-items: stretch; flex: 1;">
			<h1 style="font-size: 48px; line-height: 1; margin-bottom: 69px;"><?php echo $result[0][fullName];  ?></h1>
			<p>
				<?php makeList("",$result[0][address],"<br>"); ?>
				<?php echo $result[0][phoneNo];  ?>
			</p>
			<hr>
			<p>
				<?php echo $result[0][about];  ?>
			</p>
			<hr/>
		</div>
		<div class="row hPadding16">
			<p>
				<h3>Projects Worked Upon</h3>
				<ul style="padding-left: 15px;">
					<?php makeList("<li><a href=\"#\">",$result[0][projects],"</a></li>"); ?>					
				</ul>
			</p>
			<hr>
			<p>
				<h3>Profile</h3>
				<b>D.O.B</b>.: <?php echo $result[0][dob];  ?> <br>
				<b>P.O.B</b>.: <?php echo $result[0][pob];  ?> <br>
				<b>Father's Name</b>: <?php echo $result[0][fName];  ?>			</p>
		</div>
		<div class="row">
		<!--
			          .         .
			         ,8.       ,8.                   .8.           8 8888 b.             8
			        ,888.     ,888.                 .888.          8 8888 888o.          8
			       .`8888.   .`8888.               :88888.         8 8888 Y88888o.       8
			      ,8.`8888. ,8.`8888.             . `88888.        8 8888 .`Y888888o.    8
			     ,8'8.`8888,8^8.`8888.           .8. `88888.       8 8888 8o. `Y888888o. 8
			    ,8' `8.`8888' `8.`8888.         .8`8. `88888.      8 8888 8`Y8o. `Y88888o8
			   ,8'   `8.`88'   `8.`8888.       .8' `8. `88888.     8 8888 8   `Y8o. `Y8888
			  ,8'     `8.`'     `8.`8888.     .8'   `8. `88888.    8 8888 8      `Y8o. `Y8
			 ,8'       `8        `8.`8888.   .888888888. `88888.   8 8888 8         `Y8o.`
			,8'         `         `8.`8888. .8'       `8. `88888.  8 8888 8            `Yo
		 -->
			<div class="row padding16">
				<p>
					<?php echo $result[0][motivating];  ?>
				</p>
				<hr>
				<h3>EDUCATION</h3>
				<h4>Under Graduation</h4>
				<p><?php echo $result[0][graduation];  ?></p>
				
				<h4>Senior Secondary</h4>
				<p><?php echo $result[0][sSecondary];  ?></p>
				<!-- Percentage: 58% -->
				<h4>Secondary</h4>
				<p><?php echo $result[0][secondary];  ?></p>
				<hr>
				<h3>Languages</h3>
				<ul>
					<?php makeList("<li>",$result[0][languages],"</li>"); ?>
				</ul>
				<hr>
				<h3>Technologies</h3>
				<ul>
					<?php makeList("<li>",$result[0][technologies],"</li>"); ?>
				</ul>
				<hr>
				<h3>Additional Skills</h3>
				<ul>
					<?php makeList("<li>",$result[0][skills],"</li>"); ?>
				</ul>
				<!-- Percentage: 76.95% -->	
				<hr>
				<h3>Personal Attributes</h3>
				<h4>Strength:</h4>
				<p>Creative and Hardworking</p>
				<h4>Personal Interests:</h4>
				<ul>
					<?php makeList("<li>",$result[0][interests],"</li>"); ?>
				</ul>
				<h4>Subjects of interest:</h4>
				<ul>
					<?php makeList("<li>",$result[0][subjects],"</li>"); ?>
				</ul>
				<hr>
				<h3>Training</h3>
				<ul>
					<?php makeList("<li>",$result[0][training],"</li>"); ?>
				</ul>
				<hr>
				<h3>Achievements</h3>
				<ul>
					<?php makeList("<li>",$result[0][achievements],"</li>"); ?>
				</ul>
				<hr>
				<h3>Seminars and Workshops</h3>
				<ul>
					<?php makeList("<li>",$result[0][seminars],"</li>"); ?>
				</ul>
			</div>
		</div>
	</div>
	<!-- <hr> -->

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
</html>