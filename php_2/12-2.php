<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 函数 - 参数1 -- 1个参数</title>
</head>
<body>
	<?php
		function familyName($fname){
			echo "$fname Zhang<br>";
		}
		familyName("Li");
		familyName("Hong");
		familyName("Tao");
		familyName("Xiao Mei");
		familyName("Jian");
	?>
</body>
</html>