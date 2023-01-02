<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Exception Handling</h1>
	<?php
	/*function checkNum($number) {
		if($number > 1) {
			throw new Exception("Please focus on study");
		}
		return true;
	}
	checkNum(2);


	function checkNum($number) {
		if($number > 1) {
			throw new Exception("Please focus on study");
		}
		return true;
	}

		try {
			checkNum(2);
			echo "Dont focus otherside";
		}

		catch(Exception $obj) {
			echo 'Message: ' . $obj->getMessage();
		}*/



		//Create a customException class
		//oops concept

		class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    return $errorMsg;
  }
}

$email = "someone@example...com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
}

catch (customException $obj) {
  //display custom message
  echo $obj->errorMessage();
}



	?>