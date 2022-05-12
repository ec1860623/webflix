<?php

include ( 'logout.html' ) ;
# Access session.
session_start() ;
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
					<h1>Webflix Terms of Use</h1>
				</div>
				<div class="content">
				    <p>Webflix provides a personalized subscription service that allows our members to access entertainment content ("Webflix content") over the Internet on certain Internet-connected TVs, computers and other devices ("Webflix ready devices").</p>
					<p>These Terms of Use govern your use of our service. As used in these Terms of Use, "Webflix service", "our service" or "the service" means the personalized service provided by Webflix for discovering and accessing Webflix content, including all features and functionalities, recommendations and reviews, our websites, and user interfaces, as well as all content and software associated with our service.</p>
					
					<div class="button">
						<a href="extra_terms.php">Read More</a>
					</div>
					
					
				</div>
				
				
			</div>
			<div class="image-section">
				<img src="img/img one.jpg">
			</div>
		</div>
	</div>

	
</body>
</html>


<?php
include ( 'footer.html' ) ;
?>