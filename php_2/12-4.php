<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 函数 - 参数3 -- 默认参数值</title>
</head>
<body>
	<?php
		function setHeight($height = 50){  // 设置默认参数值50
			echo "The height is $height<br>";
		}
		setHeight();     // 默认参数值50
		setHeight(350);
		setHeight(135);
		setHeight(80);
	?>
</body>
</html>