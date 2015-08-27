<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>简易email</title>
</head>
<body>
    <?php
        // 安全email，防止 e-mail 注入的最好方法是对输入进行验证
        function spamcheck($field)
        {
            $field=filter_var($field, FILTER_SANITIZE_EMAIL);
            if(filter_var($field, FILTER_VALIDATE_EMAIL))
            {
                return TRUE;
            }
            else
            {
                return FALSE;
            }
        }

        if(isset($_REQUEST["email"])){
            $mailcheck = spamcheck($_REQUEST["email"]);
            if($mailcheck == FALSE){
                echo "Invaild input!";
            } else{
                $mail = $_REQUEST["email"];
                $subject = $_REQUEST["subject"];
                $message = "Hello!This is a simple email!";
                mail("someoneelse@example.com","Subject:$subject",$message,"Form:$email");
                echo "Thank you for using our mail form";
            }
        } else{
            echo "<form method='post' action='email-1.php'>
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