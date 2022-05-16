<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
#$page_title = 'Home' ;
include ( 'logout.html' ) ;

# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}

include ( 'movie_search.php' ) ;
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Webflix search results </title>
		<link rel=stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/bb3ef965c3.js" crossorigin="anonymous"></script>
	
	
	
	</head>
	<body>
	
	<div class="container" >
	<h4 class="text-center">Search results</h4>
	<hr>
	<br>

 	  <?php
            include 'movie_searchback.php';
            ?>           

      </div>
	  

	  
	<footer>
	<br>
	<br>
	<br>
	<br>
	</footer>
</html>



