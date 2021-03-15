<!doctype html>

<?php 
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("DATABASE_USER");
$dbpwd = getenv("DATABASE_PASSWORD");
$dbname = getenv("DATABASE_NAME");
// Creates connection
$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname); 
	// Checks connection
	if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	}
	
	$fname= $_POST["fname"];
	$lname= $_POST["lname"];
	$email= $_POST["email"];
	$password= $_POST["password"];

	
	if ($_SERVER['REQUEST_METHOD'] == POST){

 		$sql = "INSERT INTO USERS (firstName, lastName, email, password)
 VALUES ('$fname', '$lname', '$email', '$password')";
 
 if ($conn->query($sql) === TRUE) {

	echo ' <h2 id="sucess_message">  SUCESSFUL! </h2>';
	echo ' <h3 id="confirmation_message">  Your registration was received and have been added in our database. </h3>';
	echo '<a href="login.html" id="btn"> SIGN IN </a>';
		
	echo '<a href="index.html" id="home_btn"> &#x2190; BACK TO HOME </a>';
	
 //code 

 } else {
	 
	 echo ' <h2 id="sucess_message">  FAILED! </h2>';
	echo ' <h3 id="confirmation_message">  Your submission was declined. </h3>';
	echo '<a href="signin.html" id="btn"> SIGN UP </a>';
		
	echo '<a href="index.html" id="home_btn"> &#x2190; BACK TO HOME </a>';
	 
 }
 $conn->close();
 } 

 
?>


<html>
<head>
<meta charset="utf-8">
<title>Keshav Bokhoree - Sign Up</title>
<link rel="stylesheet" href="singupPHP.css">
</head>

<body>
</body>
</html>