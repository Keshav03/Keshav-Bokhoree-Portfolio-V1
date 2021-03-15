<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Keshav Bokhoree - Logged Out</title>
<link rel="stylesheet" href="logout.css">
</head>

<body>
<?php
	session_start();
	session_unset();
	session_destroy();
	
	echo ' <h2 id="logout_message">  You have sucessfully logged out. </h2>';
	echo ' <h3 id="redirect_message">  Please wait while we redirect you to the homepage... </h3>';
	
	
	header("Refresh: 3; index.php");
	exit();
?>
</body>
</html>