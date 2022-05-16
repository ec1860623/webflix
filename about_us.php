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
					<h1>About Us</h1>
				</div>
				<div class="content">
					<h3>Stories move us.
						They make us feel more emotion, see new perspectives,
						and bring us closer to each other.</h3>
					<p>At Webflix, we want to entertain the world. Whatever your taste, and no matter where you live, we give you access to best-in-class TV series, documentaries, feature films and mobile games. Our members control what they want to watch, when they want it, with no ads, in one simple subscription. We’re streaming in more than 30 languages and 190 countries, because great stories can come from anywhere and be loved everywhere. We are the world’s biggest fans of entertainment, and we’re always looking to help you find your next favorite story.</p>
				</div>
				<div class="social">
					<a href="https://www.facebook.com/EdinburghCollege/"><i class="fab fa-facebook-f"></i></a>
					<a href="https://twitter.com/edinburghcoll?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
					<a href="https://www.instagram.com/edinburgh_college/?hl=en"><i class="fab fa-instagram"></i></a>
				</div>
			</div>
			<div class="image-section">
				<img src="img/img one.jpg">
			</div>
		</div>
	</div>

	
</body>
</html>

