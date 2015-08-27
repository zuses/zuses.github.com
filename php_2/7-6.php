<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 运算符 - 逻辑运算符</title>
</head>
<body>
	<?php
		# 如果 $x 和 $y 都为 true，则返回 true。
		$x1 = true;
		$y1 = false;
		if($x1 && $y1){
			echo 'true<br>';
		} else{
			echo 'false<br>';
		}

		#如果 $x 和 $y 至少有一个为 true，则返回 true。
		$x2 = true;
		$y2 = false;
		if($x2 || $y2){
			echo 'true<br>';
		} else{
			echo 'false<br>';
		}

		#如果 $x 和 $y 有且仅有一个为 true，则返回 true。
		$x3 = true;
		$y3 = false;
		if($x3 xor $y3){
			echo 'true<br>';
		} else{
			echo 'false<br>';
		}

		#如果 $x 和 $y 都为 true，则返回 true。
		$x4 = true;
		$y4 = false;
		if($x4 and $y4){
			echo 'true<br>';
		} else{
			echo 'false<br>';
		}

		#如果 $x 和 $y 至少有一个为 true，则返回 true。
		$x5 = true;
		$y5 = false;
		if($x5 or $y5){
			echo 'true<br>';
		} else{
			echo 'false<br>';
		}

		#如果 $x 不为 true，则返回 true。
		$x6 = false;
		if(!$x6){
			echo 'true<br>';
		} else{
			echo 'false<br>';
		}
	?>
</body>
</html>