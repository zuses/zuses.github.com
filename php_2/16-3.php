<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 表单验证-必填字段</title>
</head>
<body>
	<?php 
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$nameErr = $emailErr = $commentErr = $websiteErr = $genderErr = "";
			$name = $email = $comment = $website = $gender = "";
			if(empty($_POST['name'])){
				$nameErr = "Name is required";
			} else{
				$name = test_input($_POST['name']);
			}
			if(empty($_POST['email'])){
				$emailErr = "Email is required";
			} else{
				$email = test_input($_POST['email']);
			}
			if(empty($_POST['website'])){
				$websiteErr = "Website is required";
			} else{
				$website = test_input($_POST['website']);
			}
			if(empty($_POST['comment'])){
				$commentErr = "Comment is required";
			} else{
				$comment = test_input($_POST['comment']);
			}
			if(empty($_POST['gender'])){
				$genderErr = "Gender is required";
			} else{
				$gender = test_input($_POST['gender']);
			}
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
		Name: <input type="text" name="name"><span class="error"><?php echo $nameErr;?></span><br><br>
		E-mail: <input type="text" name="email"><span class="error"><?php echo $emailErr;?></span><br><br>
		Website: <input type="text" name="website"><span class="error"><?php echo $websiteErr;?></span><br><br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea><span class="error"><?php echo $commentErr;?></span><br><br>
		<input type="radio" name="gender" value="female">Female<br><br>
		<input type="radio" name="gender" value="male">Male<br><br><span class="error"><?php echo $genderErr;?></span><br><br>
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