<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 字符串函数--strpos()</title>
</head>
<body>
	<?php
		#strpos() 函数用于检索字符串内指定的字符或文本。
		#如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE。
		echo strpos("hello world!","world");
		# 更多字符串函数，可查看完整的 PHP String 参考手册
	?>
</body>
<script>
	var str = "hello world!"
	console.log(str.indexOf('world'));
</script>
</html>