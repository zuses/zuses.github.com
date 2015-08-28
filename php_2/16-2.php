<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 表单验证-验证安全输入</title>
</head>
<body>
	<!-- 通过 PHP 验证表单数据。我们要做的第一件事是通过 PHP 的 htmlspecialchars() 函数传递所有变量。htmlspecialchars() 函数把特殊字符转换为 HTML 实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 &lt; 和 &gt; 。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。通过使用 htmlspecialchars() 函数能够避免 $_SERVER["PHP_SELF"] 被利用。 -->
	<!-- 
		在用户提交该表单时，我们还要做两件事：
			1,（通过 PHP trim() 函数）去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
			2,（通过 PHP stripslashes() 函数）删除用户输入数据中的反斜杠（\）
	 -->

	<?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$name = $email = $comment = $website = $gender = "";
			$name = test_input($_POST['name']);
			$email = test_input($_POST['email']);
			$website = test_input($_POST['website']);
			$comment = test_input($_POST['comment']);
			$gender = test_input($_POST['gender']);
		}
		function test_input($data){
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
		Name: <input type="text" name="name"><br><br>
		E-mail: <input type="text" name="email"><br><br>
		Website: <input type="text" name="website"><br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
		<input type="radio" name="gender" value="female">Female<br><br>
		<input type="radio" name="gender" value="male">Male<br><br>
		<input type="submit" value="提交">
	</form>
	<?php
		echo "<h2>您的输入：</h2>";
		echo "Name: ".$name;
		echo "<br>";
		echo "E-mail: ".$email;
		echo "<br>";
		echo "Website: ".$website;
		echo "<br>";
		echo "Comment: ".$comment;
		echo "<br>";
		echo "Gender: ".$gender;
	?>
</body>
</html>