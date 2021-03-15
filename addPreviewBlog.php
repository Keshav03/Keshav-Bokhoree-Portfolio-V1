<!doctype html>

<?php 
session_start();

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
	
	$Title= $_SESSION["previewTitle"];
	$Description= $_SESSION["previewDesc"];
	$date = $_SESSION["previewDate"];
	$time = $_SESSION["previewTime"];

	

 		$sql = "INSERT INTO BLOGS (Title, Description,date,time)
 VALUES ('$Title', '$Description','$date','$time')";
 	
		
 if ($conn->query($sql) === TRUE) {

	echo ' <h2 id="title">  SUCESSFUL! </h2>';
	echo ' <h3 id="sucessMsg">  Your submission is received and have been added in our database. </h3>';
	echo '<a href="viewBlog.php" id="btn"> VIEW BLOG PAGE </a>';
	session_unset($_SESSION["previewTitle"]); 
	session_unset($_SESSION["previewDesc"]); 
	session_unset($_SESSION["previewDate"]); 
	session_unset($_SESSION["previewTime"]); 
	header("Refresh: 2; viewBlog.php");
	
 //code 

 } else {
	 
	 echo ' <h2 id="title">  FAILED! </h2>';
	echo ' <h3 id="sucessMsg">  Your submission was declined. </h3>';
	echo '<a href="addPost.html" id="btn"> POST BLOG </a>';
		
	echo '<a href="index.html" id="home_btn"> &#x2190; BACK TO HOME </a>';
	 
 }

 $conn->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>Keshav Bokhoree - Successful</title>
<link rel="stylesheet" href="reset.css">
<link rel="stylesheet" href="addPost.css">
<link rel="shortcut icon" type="image/png" href="Images/Icon/logo5.png">	
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
		
	
</body>
</html>