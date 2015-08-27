<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>异常处理</title>
</head>
<body>
    <?php

        // 可以为一段脚本使用多个异常，来检测多种情况。
        class customException extends Exception
        {
            public function errorMessage()
            {
    //error message
                $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
                    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
                return $errorMsg;
            }
        }

        $email = "someone@example.com";

        try
        {
            //check if
            if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
            {
                //throw exception if email is not valid
                throw new customException($email);
            }
            //check for "example" in mail address
            if(strpos($email, "example") !== FALSE)
            {
                throw new Exception("$email is an example e-mail");
            }
        }

        catch (customException $e)
        {
            echo $e->errorMessage();
        }

        catch(Exception $e)
        {
            echo $e->getMessage();
        }

    ?>
</body>
</html>