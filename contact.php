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
	
	$fullName= $_POST["fullName"];
	$email= $_POST["email"];
	$subject= $_POST["subject"];
	$date = date("d/m/Y");
	$time = date("h:i a");

	if ($_SERVER['REQUEST_METHOD'] == POST){

 		$sql = "INSERT INTO CONTACTS (fullName, email , subject , date, time)
 VALUES ('$fullName', '$email','$subject','$date','$time')";
 
 if ($conn->query($sql) === TRUE) {

	echo ' <h2 id="title">  SUCESSFUL! </h2>';
	echo ' <h3 id="sucessMsg">  Your Message is received and you will be contacted soon.Contact with me on my social account to get to quicker response. </h3>';
	echo '<a href="contact.html" id="btn"> Contact Page </a>';
		
	header("Refresh: 4; contact.html");
	
 //code 

 } else {
	 
	 echo ' <h2 id="title">  FAILED! </h2>';
	echo ' <h3 id="sucessMsg">  Your submission was declined.Contact with me on my social account to make sure I get the message . </h3>';
	echo '<a href="contact.html" id="btn"> Contact Page </a>';
		
	echo '<a href="index.php" id="home_btn"> &#x2190; BACK TO HOME </a>';
	 
 }
 $conn->close();
 } 

 
?>




<html>
<head>
<meta charset="utf-8">
<title>Keshav Bokhoree - Status </title>
	<link rel="shortcut icon" type="image/png" href="Images/Icon/logo5.png">
	<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="contactPHP.css">
	
</head>

<body>
</body>
</html>