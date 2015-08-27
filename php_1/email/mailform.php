<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>简易email</title>
</head>
<body>
<?php
/* $to = "108274244@qq.com";
 $subject = "Test mail!";
 $message = "Hello!This is a simple email!";
 $from = "108274244@qq.com";
 $header = "From: ".$from;
 mail($to,$subject,$message,$header);
 echo "Mail sent!";*/

if(isset($_REQUEST["email"])){
    $mail = $_REQUEST["email"];
    $subject = $_REQUEST["subject"];
    $message = "Hello!This is a simple email!";
    mail("108274244@qq.com","Subject:$subject",$message,"Form:$email");
    echo "Thank you for using our mail form";
} else{
    echo "<form method='post' action='mailform.php'>
                  Email: <input name='email' type='text' /><br />
                  Subject: <input name='subject' type='text' /><br />
                  Message:<br />
                  <textarea name='message' rows='15' cols='40'>
                  </textarea><br />
                  <input type='submit' />
                  </form>";
}

?>
</body>
</html>