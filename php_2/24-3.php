<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 发送电子邮件 - 安全 E-mail</title>
</head>
<body>
	<?php 
		// 防止 E-mail 注入
		function spamcheck($field){
		  //filter_var() sanitizes the e-mail 
		  //address using FILTER_SANITIZE_EMAIL
		  // FILTER_SANITIZE_EMAIL 从字符串中删除电子邮件的非法字符
		  $field=filter_var($field, FILTER_SANITIZE_EMAIL);
		  
		  //filter_var() validates the e-mail
		  //address using FILTER_VALIDATE_EMAIL
		  // FILTER_VALIDATE_EMAIL 验证电子邮件地址
		  if(filter_var($field, FILTER_VALIDATE_EMAIL))
		    {
		    return TRUE;
		    }
		  else
		    {
		    return FALSE;
		    }
		}

		if (isset($_REQUEST['email']))
		//if "email" is filled out, send email
		  	{
			  //check if the email address is invalid
			  $mailcheck = spamcheck($_REQUEST['email']);
			  if ($mailcheck==FALSE)
			    {
			    echo "Invalid input";
			    }
			  else {
			    //send email
			    $email = $_REQUEST['email'] ; 
			    $subject = $_REQUEST['subject'] ;
			    $message = $_REQUEST['message'] ;
			    mail("someone@example.com", "Subject: $subject",
			    $message, "From: $email" );
			    echo "Thank you for using our mail form";
		    }
		  }
		else
		//if "email" is not filled out, display the form
		  {
		  echo "<form method='post' action='24-2.php'>
		  Email: <input name='email' type='text' /><br />
		  Subject: <input name='subject' type='text' /><br />
		  Message:<br />
		  <textarea name='message' rows='15' cols='40'>
		  </textarea><br />
		  <input type='submit' />
		  </form>";
  		}
  		// 可以在 PHP 过滤器 这一节中阅读更多有关过滤器的内容。
	?>
</body>
</html>