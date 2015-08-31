<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Php 异常处理-2</title>
</head>
<body>
	<?php 
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

		$email = "someone@example...com";

		try
		 {
		 //check if 
		 if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE)
		  {
		  //throw exception if email is not valid
		  throw new customException($email);
		  }
		 }

		catch (customException $e)
		 {
		 //display custom message
		 echo $e->errorMessage();
		 }
			?>
</body>
</html>