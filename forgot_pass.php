<?php

# Include HTML static file login.html
include ( 'login.html' ) ;

# Access session.
session_start() ;

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php');
  
# Initialize an error array.
  $errors = array();
  
# Check for an email address:
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

  # Change birth_date.
  if ( !empty($_POST[ 'birth_date' ] ) )
  {$bod = mysqli_real_escape_string( $link, trim( $_POST[ 'birth_date' ] ) ) ; }
  else { $errors[] = 'Enter your date of birth.' ; }
  

# Check for a password and matching input passwords.
  if ( !empty($_POST[ 'pass1' ] ) )
  {
    if ( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
    { $errors[] = 'Passwords do not match.' ; }
    else
    { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass1' ] ) ) ; }
  }
  else { $errors[] = 'Enter your new password.' ; }

# Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT * FROM user_details WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    }
	
# Check if dates match.

$qu = "SELECT birth_date FROM user_details WHERE email='$e'";
$ru = @mysqli_query ( $link, $qu );
$row = mysqli_fetch_array($ru, MYSQLI_ASSOC);
if($row['birth_date'] != $bod) {
$errors[] = 'Dates do not match.' ;
}

# On success new password into 'user_details' database table.
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE user_details SET pass= SHA2('$p',256) WHERE (email='$e') AND (birth_date='$bod')";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    {
		echo '<div class="alert alert-secondary" role="alert">
		<h4 class="alert-heading"Password successfully changed!</h4>
		<p>Password successfully changed!</p>
		<a class="alert-link" href="login.php">Login</a>'; 
      # header("Location: login.php");
    } else {
        echo "Error updating record: " . $link->error;
    }

# Close database connection.
    
	mysqli_close($link); 
    exit();
  }

# Or report errors.
  else 
  {  
    echo ' <div class="container"><div class="alert alert-dark alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
	<h1><strong>Error!</strong></h1><p>The following error(s) occurred:<br>' ;
    foreach ( $errors as $msg )
    { echo " - $msg<br>" ; }
	echo ' <div class="row">
    <a class="alert-link" href="login.php" style=margin-left:20px;margin-right:20px;>Try again.</a>' ;
	# echo '<a class="alert-link" href="login.php">Try again.</a>'; 
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>

