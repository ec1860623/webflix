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
  if ( empty( $_POST[ 'email' ] ) )
  { $errors[] = 'Enter your email address.'; }
  else
  { $e = mysqli_real_escape_string( $link, trim( $_POST[ 'email' ] ) ) ; }

# Change card_number.
  if ( !empty($_POST[ 'card_number' ] ) )
  {$card_number = mysqli_real_escape_string( $link, trim( $_POST[ 'card_number' ] ) ) ; }
  else { $errors[] = 'Enter your card number.' ; }
  
  # Change cvv.
  if ( !empty($_POST[ 'cvv' ] ) )
  {$cvv = mysqli_real_escape_string( $link, trim( $_POST[ 'cvv' ] ) ) ; }
  else { $errors[] = 'Enter your cvv.' ; }
  
  # Change exp_month.
  if ( !empty($_POST[ 'exp_month' ] ) )
  {$exp_m = mysqli_real_escape_string( $link, trim( $_POST[ 'exp_month' ] ) ) ; }
  else { $errors[] = 'Enter your expiry month.' ; }
  
  # Change exp_year.
  if ( !empty($_POST[ 'exp_year' ] ) )
  {$exp_y = mysqli_real_escape_string( $link, trim( $_POST[ 'exp_year' ] ) ) ; }
  else { $errors[] = 'Enter your expiry year.' ; }
  
  

# Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT * FROM user_details WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
	
    }

# On success new card_number into 'user_details' database table.
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE user_details SET card_number= $card_number, cvv= $cvv, exp_month= $exp_m, exp_year= $exp_y WHERE email='$e'";
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

