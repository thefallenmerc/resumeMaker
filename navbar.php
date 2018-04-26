<?php session_start(); ?>
<div class="navHead">
			<a href="JavaScript:void(0)" class="noDeco textWhite bgBlue"><b>RESUME CREATOR</b></a>
		</div>
		<div class="navBody">
			<ul>
				<li><a href="index.php">HOME</a></li>
				<li><a href="resumeSelect.php">RESUME</a></li>
				<li><a href="about.php">ABOUT US</a></li>
			</ul>
		</div>
		<?php 

if(isset($_SESSION["userName"]))
{
?>
<a href="logout.php" class="button pullRight">LOGOUT</a>
<?php
}
// echo $_SESSION[userName];
?>
