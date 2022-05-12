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
  

$sub = "Premium"; 

$newDate = date('Y-m-d', strtotime(' + 0 years'));

$q = "SELECT sub_date FROM user_details WHERE user_id={$_SESSION[user_id]}";
$r = @mysqli_query ( $link, $q );
$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
if($row['sub_date'] > $newDate) {
$sub_date = date('Y-m-d', strtotime($row['sub_date']. ' + 1 years'));
}else {
	$sub_date = date('Y-m-d', strtotime(' + 1 years'));
}

# UPDATE TABLE
  if ( empty( $errors ) ) 
  {
    $q = "UPDATE user_details SET subscription= '$sub', sub_date= '$sub_date'  WHERE user_id={$_SESSION[user_id]}" ;
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    {
		
       header("Location: subnow.php");
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

# Display body section.
echo '<h1>Thank you for your purchase!</h1><p>Check your email for the receipt.</p>' ;

?>


