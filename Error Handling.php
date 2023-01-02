<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h1>Error Handling</h1>
	<h3>Simple Die()</h3>
	<?php
	/*if(!file_exists("miku.txt")) {
		die("File not found");
	}
	else {
		$file = fopen("miku.txt","r");
	}


	//Error handler function
	function customErr($errNo,$errstr) {
		echo "<b>Error :</b> [$errNo]$errstr";
	}



    //Set Error handler
		set_error_handler("customErr");


	//triggered Error
		echo($test);

          
          //This is Syntax error
		$test = 2;

		if($test >=1 ) {
			trigger_error("Error message");
		}*/

			//This is Default error

		//Error handling
		function customError($errno,$errstr) {
			echo "<b> Error </b>: [$errno]$errstr<br>";
		}
		
		//Set error Handler
		set_error_handler("customError",E_USER_WARNING);

		//triggor Error
		$test = 2;
		if($test>=1) {
			trigger_error("value must be 1 or below",E_USER_WARNING);
		}
	
	?>


