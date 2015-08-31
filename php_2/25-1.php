<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 错误处理-1</title>
</head>
<body>
	<?php 
		if(!file_exists('files/welcome.txt')){
			die("File not found.");
		} else{
			$file = fopen('files/welcome.txt','r');
		}
	?>
</body>
</html>