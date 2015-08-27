<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>if 条件语句</title>
</head>
<body>
	<?php
		$t = date('H');
		if($t < 20){
			echo 'Have a good day!';
		} else{
			echo 'Hava a good night';
		}
	?>
</body>
</html>