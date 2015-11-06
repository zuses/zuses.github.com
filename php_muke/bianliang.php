<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>变量及变量类型</title>
</head>
<body>
	<?php 
		$var_name = '苹dasda果';
		$n = 10;
		echo '我有'.$n.'个'.$var_name;
		var_dump($var_name);
		var_dump($n);

		$man = '男';
		$flag = $man == '男';
		echo $flag.'<br>';

		$str_string1 = '甲问："你在哪里学的PHP？"';
		$str_string2 = "乙毫不犹豫地回答：'当然是慕课网咯！'";
		$str_string3 = '甲问：\'能告诉我网址吗？\'';
		$str_string4 = "乙答道：\"www.baidu.com\"";
		echo $str_string1.'<br>';
		echo $str_string2.'<br>';
		echo $str_string3.'<br>';
		echo $str_string4.'<br>';
	 ?>
</body>
</html>