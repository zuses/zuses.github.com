<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 函数 - 参数2 -- 2个参数</title>
</head>
<body>
	<?php
		function familyName($fname,$year){
			echo "$fname Zhang born in $year<br>";
		}
		familyName("Li","1975");
		familyName("Hong","1978");
		familyName("Tao","1983");
	?>
</body>
</html>