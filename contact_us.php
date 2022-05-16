<?php
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

include ( 'logout.html' ) ;

# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>About Us Section</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>	
<body>
	<div class="section">
		<div class="container">
			<div class="content-section">
				<div class="title">
					<h1>Contact Us</h1>
				</div>
				<div class="content">
					<h3>Contact Customer Service.</h3>
					<p>Contacting Webflix is now easier than ever when you contact us from facebook, twitter! All you need is an internet or cellular connection.</p>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/EdinburghCollege/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/edinburghcoll?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/edinburgh_college/?hl=en"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="img/contactus.png">
			</div>
		</div>
	</div>

	
</body>
</html>


