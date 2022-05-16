<?php # DISPLAY COMPLETE LOGGED OUT PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
$page_title = 'Home' ;
include ( 'login.html' ) ;

#****************************************************************************************
# set status to inactive
#****************************************************************************************
# Access session.
session_start() ;

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
    
	}
	}
else { echo '<h3>No user details.</h3>

' ; }

# Retrieve items from 'user_details database table.
	$q = "SELECT * FROM user_details WHERE user_id={$_SESSION[user_id]}" ;
	$r = mysqli_query( $link, $q ) ;
	if ( mysqli_num_rows( $r ) > 0 )
	{
		echo '<div class="col-sm">';

  while ( $row = mysqli_fetch_array( $r, MYSQLI_ASSOC ))
  {
  }
  $status = "inactive";
  $q = "UPDATE user_details SET status= '$status' WHERE user_id={$_SESSION[user_id]}" ;
    $r = @mysqli_query ( $link, $q ) ;
  
	
  # Close database connection.
  mysqli_close( $link ) ; 
}
else { echo '<div class="alert alert-danger" alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		   </button>
			<h1>Card Stored</h1>
			<h3>No card stored.</h3>
		</div>
		
' ; }

# ***********************************************************************************************


# Clear existing variables.
$_SESSION = array() ;

# Destroy the session.
session_destroy() ;

# Display body section.
echo '<h1>Goodbye!</h1><p>You are now logged out.</p>' ;
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  </head>
  <body>
<div class="container">
  <div class="row">
    <div class="col-sm">
		<div class="card bg-light mb-3">
		  <div class="card-header">Account</div>
		  <div class="card-body">
			<h5 class="card-title">Sign in</h5>
			<a href="login.php" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Sign In</a>
			<a href="forgot_pass.php" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal1">forgot password</a>
		  </div>
		</div>
	</div>
	</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm">
		<div class="card bg-light mb-3">
		  <div class="card-header">Account</div>
		  <div class="card-body">
			<h5 class="card-title">Sign up</h5>
			<a href="register.php" class="btn btn-secondary btn-lg btn-block">Sign up</a>
		  </div>
		</div>
	</div>
	</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign In</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
		<form action="login_action.php" class="was-validated" method="post"method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Email" name="email" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" placeholder="Password" name="pass" required>
			</div>
				

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Sign In" >
		</form>
      </div>
    </div>
  </div>
</div>

<!-- Forgto pass Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Forgot password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
		<form action="forgot_pass.php" class="was-validated" method="post"method="post">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Email" name="email" required>
			</div>
			<div class="form-group">
					<input type="date" name="birth_date" class="form-control" placeholder="(DD-MM-YYYY)" value="" required>
				 </div>
			<div class="form-group">
                <input type="password" 
				       name="pass1" 
					   class="form-control" 
					   placeholder="New Password"
					   value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1']; ?>" required>

            </div>

				<div class="form-group">
								<input type="password" 
						  name="pass2" 
						  class="form-control" 
						  placeholder="Confirm New Password"
						  value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" required>
            </div>
				

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="OK" >
		</form>
      </div>
    </div>
  </div>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>

