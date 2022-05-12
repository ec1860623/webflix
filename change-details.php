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

# Change first_name.
  if ( !empty($_POST[ 'first_name' ] ) )
  {$fn = mysqli_real_escape_string( $link, trim( $_POST[ 'first_name' ] ) ) ; }
  else { $errors[] = 'Enter your first name.' ; }
  
  # Change last_name.
  if ( !empty($_POST[ 'last_name' ] ) )
  {$ln = mysqli_real_escape_string( $link, trim( $_POST[ 'last_name' ] ) ) ; }
  else { $errors[] = 'Enter your last name.' ; }

  # Change birth_date.
  if ( !empty($_POST[ 'birth_date' ] ) )
  {$bod = mysqli_real_escape_string( $link, trim( $_POST[ 'birth_date' ] ) ) ; }
  else { $errors[] = 'Enter your date of birth. (YYYY/MM/DD)' ; }
  
  # Change contact_number.
  if ( !empty($_POST[ 'contact_number' ] ) )
  {$cn = mysqli_real_escape_string( $link, trim( $_POST[ 'contact_number' ] ) ) ; }
  else { $errors[] = 'Enter your contact number.' ; }
  
  # Change country.
  if ( !empty($_POST[ 'country' ] ) )
  {$co = mysqli_real_escape_string( $link, trim( $_POST[ 'country' ] ) ) ; }
  else { $errors[] = 'Enter your country.' ; }
  
  

# Check if email address already registered.
  if ( empty( $errors ) )
  {
    $q = "SELECT * FROM user_details WHERE email='$e'" ;
    $r = @mysqli_query ( $link, $q ) ;
	
    }

# On success new card_number into 'user_details' database table.
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE user_details SET first_name= '$fn', last_name= '$ln', birth_date ='$bod', contact_number= '$cn', country= '$co' WHERE email='$e'";
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

