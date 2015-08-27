<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单验证</title>
</head>
<body>
	<!-- 写一个验证函数 -->
	<?php
		$name = $email = $website = $comment = $gender = "";
		$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if (empty($_POST['name'])) {
				$nameErr = 'Name is required';
			} else{
				$name = input_test($_POST['name']);
			}
			if (empty($_POST['email'])) {
				$emailErr = 'email is required';
			} else{
				$name = input_test($_POST['email']);
			}
			if (empty($_POST['website'])) {
				$websiteErr = '';
			} else{
				$website = input_test($_POST['website']);
			}
			if (empty($_POST['comment'])) {
				$commentErr = '';
			} else{
				$comment = input_test($_POST['comment']);
			}
			if (empty($_POST['gender'])) {
				$genderErr = 'gender is required';
			} else{
				$gender = input_test($_POST['gender']);
			}
		}
		function input_test($data){
			$data = htmlspecialchars($data);
			$data = trim($data);
			$data = stripslashes($data);
			return $data;
		}
	?>
	<!-- htmlspecialchars()  函数把特殊字符转换为 HTML 实体。这意味着 < 和 > 之类的 HTML 字符会被替换为 &lt; 和 &gt; 。这样可防止攻击者通过在表单中注入 HTML 或 JavaScript 代码（跨站点脚本攻击）对代码进行利用。 -->
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		姓名：<input type="text" name="name"><span class="error">* <?php echo $nameErr;?></span><br>
		电邮：<input type="text" name="email"><span class="error">* <?php echo $emailErr;?></span><br>
		网址：<input type="text" name="website"><br>
		评论：<textarea name="comment" id="" cols="30" rows="10"></textarea><br>
		性别：<input type="radio" value="女生" name="gender">女生<input type="radio" value="男生" name="gender">男生<span class="error">* <?php echo $genderErr;?></span><br>
		<input type="submit">
	</form>
	<?php
		echo '<h1>您的输入是</h1>';
		echo $_POST['name']."<br>";
		echo $_POST['email']."<br>";
		echo $_POST['website']."<br>";
		echo $_POST['comment']."<br>";
		echo $_POST['gender'];
	?>

	<!-- 我们要做的第一件事是通过 PHP 的 htmlspecialchars() 函数传递所有变量。 -->
	<!-- 我们要做的第二件事是通过 PHP 的 trim() 函数 去除用户输入数据中不必要的字符（多余的空格、制表符、换行） -->
	<!-- 我们要做的第三件事是通过 PHP 的 stripslashes() 函数 删除用户输入数据中的反斜杠（\） -->
</body>
</html>