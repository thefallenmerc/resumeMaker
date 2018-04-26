<option value="-30">Select an option...</option>
<?php 
	$dir = "resumes/".$_GET["class"];
	echo $dir;
	$dirContent = scandir($dir);
	foreach ($dirContent as $key => $value) {
		if(is_file($dir."/".$value)&&pathinfo($dir."/".$value,PATHINFO_EXTENSION)=="php")
			echo '<option value="'.$value.'">'.substr($value, 0,strrpos($value, ".")).'</option>';
		// 	echo $value;
		// echo pathinfo($dir."/".$value,PATHINFO_EXTENSION);
		// echo "<br>";
			// echo $value;
	}
 ?>