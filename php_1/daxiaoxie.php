<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php中的大小写</title>
</head>
<body>
	<?php
		// php对变量的大小写敏感。
		// 对用户定义的函数、类和关键词（例如 if、else、echo 等等）都对大小写不敏感
		$color = 'red';
		$Color = 'blue';
		$COLOR = 'yellow';
		echo "Color is ".$color.'<br />';
		Echo "Color is ".$Color.'<br />';
		ECHO "Color is ".$COLOR;
	?>
</body>
</html>