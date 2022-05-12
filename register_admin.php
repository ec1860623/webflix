<?php # DISPLAY COMPLETE REGISTRATION PAGE.

# Access session.
session_start() ;

# Set page title and display header section.
#$page_title = 'Home' ;
include ( 'logout.html' ) ;

# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a first name.
  if ( empty( $_POST[ 'first_name' ] ) )
  { $errors[] = 'Enter your first name.' ; }
  else
  { $fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }

  # Check for a last name.
  if (empty( $_POST[ 'last_name' ] ) )
  { $errors[] = 'Enter your last name.' ; }
  else
  { $ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }

  # Check for contact number.
  if (empty( $_POST[ 'contact_number' ] ) )
  { $errors[] = 'Enter your contact number.(+country code)' ; }
  else
  { $cn = mysqli_real_escape_string( $link, trim( $_POST[ 'contact_number' ] ) ) ; }

  # status.
  $status = "active"; 
  
  # Role.
  $role = "admin"; 
 
  # Date of birth.
  $bod = "0000-00-00";
  
  # subscription.
  $sub = "Basic"; 
  
  # contact_number.
  $sub = "Basic"; 

  # country.
  $co = "0000"; 

  # card details.
  $card_number = "0000000000"; 
  $exp_m = "00";
  $exp_y = "00";
  $cvv ="000";
  
  # sub_date.
  $sub_date = "0000-00-00";

  # Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  # Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your password.' ; }
  
  # Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM user_details WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a class="alert-link" href="login.php">Sign In Now</a>' ;
  }
  


  # On success register user inserting into 'user_details' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO user_details (first_name, last_name, birth_date, contact_number, country, subscription, status, role, email, pass, card_number, exp_month, exp_year, cvv, reg_date) VALUES ('$fn', '$ln', '$bod', '$cn', '$co', '$sub', '$status', '$role', '$e', SHA2('$p',256), $card_number, $exp_m, $exp_y, $cvv, NOW() )";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<div class="alert alert-secondary" role="alert">
		<h4 class="alert-heading"Registered!</h4>
		<p>The admin account is now registered.</p>
		<a class="alert-link" href="register_admin.php">Add more</a>'; }
  
    # Close database connection.
    mysqli_close($link); 

    exit();
  }
  # Or report errors.
  else 
  {
    echo '<div class="alert alert-secondary" role="alert">
			<h4 class="alert-heading" id="err_msg">The following error(s) occurred:</h4>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
    echo '<p>or please try again.</p></div>';
    # Close database connection.
    mysqli_close( $link );
  }  
}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">
    
  </head>
  <body>

<div class="container">
  <div class="row">
    <div class="col-sm">
		<div class="card bg-light mb-3">
		  <div class="card-header">Create Admin Account</div>
			<div class="card-body">
			<form action="register_admin.php" class="was-validated" method="post">
				<div class="input-group">
					<div class="input-group-prepend">
					<span class="input-group-text">First and last name</span>
					</div>
					<input type="text" name="first_name" class="form-control" value="" required> 
					<input type="text" name="last_name" class="form-control" value="" required>
				 </div>
				 <br>
				 <div class="form-group">
					<input type="email" name="email" class="form-control" placeholder="Email" value="" required>
				 </div>
				 <div class="form-group">
					<input type="password" name="pass1" class="form-control" placeholder="Create New Password" value="" required>
				 </div>
				 <div class="form-group">
					<input type="password" name="pass2" class="form-control" placeholder="Confirm Password" value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="contact_number" class="form-control" placeholder="Contact number (+ country code)" value="" required>
				 </div>
				 <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Submit"></p>
			</form>
		  </div>
		</div>
	</div>


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
  </body>
</html>




<?php 
include ( 'footer.html' ) ;
?>
