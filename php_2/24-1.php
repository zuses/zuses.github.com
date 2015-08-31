<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 发送电子邮件 - mail() 函数</title>
</head>
<body>
	<?php 
		/* 语法：mail(to,subject,message,headers,parameters) */
		$to = "someone@example.com";
		$subject = "TEST mail";
		$message = "Hello! This is a simple email message.";
		$header = "From: $form";
		$from = "someonelse@example.com";
		mail($to,$subject,$message,$header,$from);
		echo "Mail sent.";
	?>
</body>
</html>