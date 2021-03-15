<!doctype html>

<?php

session_start();

 $dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
// Checks connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM USERS WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn,$sql);
$numberOfRow = mysqli_num_rows($result);

if( $numberOfRow == 1){
	$sql1 = "SELECT firstName FROM USERS WHERE email='$email' AND password='$password'";
	$result1 = mysqli_query($conn,$sql1);
	$row = mysqli_fetch_array($result1);
	
	
	$firstName = $row['firstName'];
	$_SESSION['user'] = $firstName;
	
	echo ' <h2 class="message">  You have sucessfully logged in to your account. </h2>';
	echo ' <h3 class="redirect_message">  Please wait while we redirect you... </h3>';
	
	
	header("Refresh: 2; addPost.html");
}else{
	echo ' <h2 class="message">  Logging Failed. </h2>';
	echo ' <h3 class="redirect_message">  Please wait while we redirect you back to login page </h3>';
	
	header("Refresh: 3; login.html");	
}

$conn->close();

?>

<html>
<head>
<meta charset="utf-8">
<title>Keshav Bokhoree - Log In</title>
	<link rel="shortcut icon" type="image/png" href="Images/Icon/logo5.png">
<link rel="stylesheet" href="loginPHP.css">
</head>

<body>
</body>
</html>