<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Keshav Bokhoree - Blog Preview</title>
	<link rel="shortcut icon" type="image/png" href="Images/Icon/logo5.png">
	<link rel="stylesheet" href="reset.css">
	<link rel="stylesheet" href="viewBlog.css">
	<link href="https://fonts.googleapis.com/css?family=Oleo+Script+Swash+Caps&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dosis:200&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald:300&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script src="blog.js"></script>
	
</head>

<body>
	
	
	<header>
			<a href="index.php"><img src="Images/Icon/logo5.png" alt=""></a>
		
			<div class="hamburger" onClick="changes()" >	
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
			</div>
			<nav id="my-links">
				<a id="login_btn" href="login.html">LOGIN</a>
			<nav class="left-nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.html">About me</a></li>
					<li><a href="portfolio.html">Portfolio</a></li>
				</ul>	
			</nav>
			<nav class="right-nav">
				<ul>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="viewBlog.php">Blog</a></li>
				</ul>
			</nav>
			</nav>	
		</header>
		
	
	
		<section class="main">
	
			<div class="topSection">
				<h2 id="first-line">Welcome to</h2>
				<h2 id="second-line">Keshav's Blog</h2>
				<span id="top-bar"></span>
				<span id="bottom-bar"></span>

				<img src="Images/IMG-0368.JPG" alt="" width="35%" height="75%">
			
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
	
	$sql1 = "SELECT * FROM BLOGS ORDER BY ID DESC LIMIT 1;";
	$result1 = mysqli_query($conn,$sql1);	
				
	while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)){				
				
				
	echo 	'<div id="latest-post-background">';			
	echo 		'<p id="mainLatestTitle" >Latest Post</p>';
	echo 		'<div id="latestPost">';
	echo 		'<p id="latestDateAndTime">';
	echo 		$_SESSION["previewDate"]. " , " .$_SESSION["previewTime"]	;	
	echo 		'</p>';
	echo 	'<h2 id="latestTitle">';
	echo 		$_SESSION["previewTitle"];
	echo 	'</h2>';	
	echo	'<p id="latestDesc"> ';
	echo 		$_SESSION["previewDesc"];	
	echo 	'</p>'	;
		
	echo 		'</div>';
		
	echo 	'</div>';
	echo'</div>';
		
	}
	/*Start of BLOG SECTION*/	
	echo'<div id="blogSection">';
				
			/*Extra Features*/	
			/*Preview Section*/	
			echo 	'<div id="previewBlogPost">';	
			echo 		'<p id="previewDateAndTime">';
			echo 			$_SESSION["previewDate"]. " , " .$_SESSION["previewTime"]	;	
			echo 		'</p>';
			echo 	'<h2 id="previewTitle">';
			echo 		$_SESSION["previewTitle"];
			echo 	'</h2>';	
			echo	'<p id="previewDesc"> ';
			echo 		$_SESSION["previewDesc"]	;	
			echo 	'</p>'	;
			echo 	'<hr id="previewPostLine">';
			echo	'</div>';		
				
			echo '<a href="addPreviewBlog.php" id="post_Btn" >Post</a>';
			echo '<input type="button" value="Back" onClick="history.back()" id="backBtn" cursor="pointer">';
				
			/*End Preview Section*/	
				
				
	$sql2 = "SELECT * FROM BLOGS ORDER BY ID DESC;";
	$result2 = mysqli_query($conn,$sql2);				
			
	while ($row = mysqli_fetch_array($result2, MYSQLI_ASSOC)){		
				
			echo 	'<div id="blogPost">';	
			echo 		'<p id="dateAndTime">';
			echo 			$row['date']. " , " .$row['time']	;	
			echo 		'</p>';
			echo 	'<h2 id="title">';
			echo 		$row['Title']	;
			echo 	'</h2>';	
			echo	'<p id="desc"> ';
			echo 		$row['Description']	;	
			echo 	'</p>'	;
			echo 	'<hr id="postLine">';
			echo	'</div>';
	}
	echo'</div>';			
	/*END OF BLOGS SECTION*/
				
				
	?>
		</section>
	
	
	
	
	
		<footer>
			
			<div class="footer-icon">
			
				<ul>
					<li><a href="https://www.facebook.com/keshav.bokhoree"><img src="../../../webroot/MiniProject/Images/facebook icon.png" alt="" width="25px" height="25px"></a></li>
					<li><a href="https://twitter.com/Keshav_Bokhoree"><img src="../../../webroot/MiniProject/Images/twitter icon.png" alt="" width="25px" height="25px"></a></li>
					<li><a href="https://www.linkedin.com/in/keshav-yogeshwar-b-b73187167/"><img src="../../../webroot/MiniProject/Images/linked in icon.png" alt="" width="25px" height="25px"></a></li>
					<li><a href="https://www.instagram.com/keshav_bokhoree/"><img src="../../../webroot/MiniProject/Images/instagram icon.png" alt="" width="25px" height="25px"></a></li>
					<li><a href=""><img src="../../../webroot/MiniProject/Images/yt icon.png" alt="#" width="25px" height="25px"></a></li>
				</ul>
				
			</div>
			
			<nav>
				<ul>
					<a href="index.php"><li>Home</li></a>
					<a href="about.html"><li>About</li></a>
					<a href="portfolio.html"><li>Portfolio</li></a>
					<a href="viewBlog.php"><li>Blog</li></a>
					<a href="shop.html"><li>Shop</li></a>
					<a href="contact.html"><li>Contact</li></a>
				</ul>
			</nav>
			<hr>
			<p>Copyright 2020 © Keshav Bokhoree Website</p>
			
		</footer>
	
	
</body>
</html>
