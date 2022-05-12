<?php
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php');
  
# Initialize an error array.
  $errors = array();
  
# Check for an email address:
  if ( empty( $_POST[ 'oldemail' ] ) )
  { $errors[] = 'Confirm old email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'oldemail' ] ) ) ; }

# Check password field.
  if ( empty( $_POST[ 'pass' ] ) ) 
  { $errors[] = 'Enter your password.' ; } 
  else { $p = mysqli_real_escape_string( $link, trim( $_POST[ 'pass' ] ) ) ; }


# Change email.
  if ( !empty($_POST[ 'email' ] ) )
  {$ne = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }
  else { $errors[] = 'Enter new email address.' ; }
  

# Check if OLD email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM user_details WHERE email='$e' AND pass=SHA2('$p',256)" ; 
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 1 ) $errors[] = 'Enter your current email address. <a class="alert-link" href="user.php">Go back</a>' ;
  }
	
	
  # Check if NEW email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT user_id FROM user_details WHERE email='$ne'" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ( mysqli_num_rows( $r ) != 0 ) $errors[] = 'Email address already registered. <a class="alert-link" href="user.php">Go back</a>' ;
  }
  
# On success new card_number into 'user_details' database table.
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE user_details SET email= '$ne'  WHERE user_id={$_SESSION[user_id]}" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    {
       header("Location: user.php");
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
    echo 'Please try again.</div></div>';
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>

