<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>php数组-关联数组</title>
</head>
<body>
	<?php
		$age = array('Peter'=>35,'Ben'=>36,'Joe'=>37);
		echo 'Peter is ',$age['Peter']," years old.<br>";
		echo 'Ben is ',$age['Ben']," years old.<br>";
		echo 'Joe is ',$age['Joe']," years old.<br><br>";

		// 如需遍历并输出关联数组的所有值，您可以使用 foreach 循环
		foreach ($age as $key => $value) {
			echo "Key = ".$key." , Value = ".$value.";<br>";
		}
	?>
</body>
</html>