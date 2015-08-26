<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单验证-NAME、URL和EMAIL</title>
</head>
<body>
	<!-- 写一个验证函数 -->
	<?php
		$name = $email = $website = $comment = $gender = "";
		$nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			if(empty($_POST['name'])){
				$nameErr = 'Name is required';
			} else{
				$name = input_test($_POST['name']);
				if(!preg_match("/^[a-zA-Z ]*$/", $name)){
					$nameErr = '只允许字母和空格';
				}
			}
			if(empty($_POST['email'])){
				$emailErr = 'Email is required';
			} else{
				$email =input_test($_POST['email']);
				if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)){
					$emailErr = '无效的 email 格式';
				}
			}
			if(empty($_POST['website'])){
				$websiteErr = 'URL is required';
			} else{
				$website =input_test($_POST['website']);
				if(!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%
=~_|]/i", $website)){
					$websiteErr = '无效的 URL 格式';
				}
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
	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
		姓名：<input type="text" name="name" value="<?php echo $name;?>"><span class="error">* <?php echo $nameErr;?></span><br>
		电邮：<input type="text" name="email" value="<?php echo $email;?>"><span class="error">* <?php echo $emailErr;?></span><br>
		网址：<input type="text" name="website" value="<?php echo $website;?>"><br>
		评论：<textarea name="comment" id="" cols="30" rows="10"><?php echo $comment;?></textarea><br>
		性别：<input type="radio" value="female" name="gender" <?php if(isset($gender) && $gender == 'female') echo 'checked'; ?>>女生<input type="radio" value="male" name="gender" <?php if(isset($gender) && $gender == 'male') echo 'checked'; ?>>男生<span class="error">* <?php echo $genderErr;?></span><br>
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
</body>
</html>