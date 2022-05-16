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

  # Change user id.
  if ( !empty($_POST[ 'user_id' ] ) )
  {$user_id = mysqli_real_escape_string( $link, trim( $_POST[ 'user_id' ] ) ) ; }
  else { $errors[] = 'Enter user id.' ; }
  
  # Change status.
  if ( !empty($_POST[ 'status' ] ) )
  {$status = mysqli_real_escape_string( $link, trim( $_POST[ 'status' ] ) ) ; }
  else { $errors[] = 'Enter user status. (blocked/active/inactive)' ; }

# Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT * FROM user_details WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
    }

# Check if user_id and email match.

$qu = "SELECT user_id FROM user_details WHERE email='$e'";
$ru = @mysqli_query ( $link, $qu );
$row = mysqli_fetch_array($ru, MYSQLI_ASSOC);
if($row['user_id'] != $user_id) {
$errors[] = 'Email and user_id do not match.' ;
}


# On success new status into 'user_details' database table.
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE user_details SET status= '$status' WHERE (email='$e') AND (user_id='$user_id')";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    {
       header("Location: webflix_users.php");
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
    <a class="alert-link" href="webflix_users.php" style=margin-left:20px;margin-right:20px;>Try again.</a>' ;
    # Close database connection.
    mysqli_close( $link );
  }  
}
?>

