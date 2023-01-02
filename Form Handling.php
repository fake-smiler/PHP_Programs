<!DOCTYPE html>
<html>
<head>
	<meta name="viewport"content="width=device-width,initial-scale=1">
</head>
<body>
	<h2>Form Handling</h2>
	<form method="post"action="<?php echo $_SERVER['PHP_SELF'];?>">
	NAME : <input type="text"name="name"><br>
	E-MAIL : <input type="text"name="email"><br>
	<input type="submit"name="Submit">
</form>
	Welcome:<?php echo $_POST["name"];?><br>
	Your mail adress:<?php echo $_POST["email"];?>
</body>
</html>