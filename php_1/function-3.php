<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php函数-默认参数</title>
</head>
<body>
	<?php
		function setHeight($minheight = 50){
			echo "The height is $minheight.<br>";
		}
		setHeight(350);
		setHeight();    // 默认的50
		setHeight(135);
		setHeight(80);
	?>
</body>
</html>