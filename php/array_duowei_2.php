<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>数组-多维数组</title>
</head>
<body>
	<?php
		$cars = array(
			array('Volvo',13,24),
			array('BMW',22,15),
			array('SAAB',27,12),
			array('land rover',19,30),
		);
		for($row = 0; $row < 4; $row++) { 
			echo "<p><b>Row number is $row</b></p>";
			echo "<ul>";
			for ($col=0; $col < 3; $col++) { 
				echo "<li>".$cars[$row][$col]."</li>";
			}
			echo "</ul>";
		}
	?>
</body>
</html>