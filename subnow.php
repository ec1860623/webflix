<?php # DISPLAY COMPLETE REGISTRATION PAGE.
$page_title = 'User Area ' ;
include('logout.html');
# Access session.
session_start() ;
# Access session.

if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}
# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Open database connection.
require ( 'connect_db.php' ) ;

$q = "SELECT * FROM user_details WHERE user_id={$_SESSION[user_id]}" ;
	$r = mysqli_query( $link, $q ) ;
	if ( mysqli_num_rows( $r ) > 0 )
	{
		echo '
	<div class="container">
	  <div class="row"> ';
	    while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
		  {
			echo '
			<div class="col-sm">
			  <div class="alert alert-dark" alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>	
			  <h4>Thank you, '  . $row['first_name'] . '. Your purchase is now complete. <strong>  </h4> 
			  <hr>
			  <p>Check your email ('  . $row['email'] . ') for the online receipt </p>
			  <p><strong> Your subscription status is now: </strong> '  . $row['subscription'] . ' until '  . $row['sub_date'] . '. </p>
			  
			  <form action="user.php">
				<input type="submit" class="btn btn-link" value="User details" />
				</form>
			
			 </div>
			</div>
			';
			}
	}else { echo '<h3>No user details.</h3>' ; }




?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/bb3ef965c3.js" crossorigin="anonymous"></script>
	</head>
<body>


 <!----------------------------------------------------------------------------------------------------------------------->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>



<?php
# Display footer section.
include ( 'footer.html' ) ; 
?>