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
	  <h1>'  . $row['first_name'] . ' '  . $row['last_name'] . '<strong>  </h1> 
	  <p><strong> User ID : EC2021 '  . $row['user_id'] . ' </strong></p>
	  <p><strong> Email : </strong> '  . $row['email'] . ' </p>
	  <p><strong> Date of birth : </strong> '  . $row['birth_date'] . ' </p>
	  <p><strong> Contact number : </strong> '  . $row['contact_number'] . ' </p>
	  <p><strong> Country : </strong> '  . $row['country'] . ' </p>
	  <p><strong> Subscription type : </strong> '  . $row['subscription'] . ' </p>
	  <p><strong> Subscription valid until: </strong> '  . $row['sub_date'] . ' </p>
	  <p><strong> Account status : </strong> '  . $row['status'] . ' </p>
	  <p><strong> Registration Date : </strong> '  . $row['reg_date'] . ' </p>
	  <!-- Button trigger modal -->
	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#details">
		<i class="fa fa-edit"></i>  Edit user details
	</button>
	  <!-- Button trigger modal -->
	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#password">
		<i class="fa fa-edit"></i>  Change Password
	</button>
	<!-- Button trigger modal -->
	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#email">
		<i class="fa fa-edit"></i>  Change email
	</button>
	
	 </div>
    </div>
	';
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
    echo '
	
		<div class="alert alert-secondary" alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		   </button>
			<h1>Card Stored</h1>
<p><strong> Card Holder : </strong> '  . $row['first_name'] . '  '  . $row['last_name'] . ' </p>
<p><strong> Card Number : </strong> '  . $row['card_number'] . ' </p>
<p><strong> Expire Date : </strong> '  . $row['exp_month'] . '   '  . $row['exp_year'] . '</p>
	<button type="button" class="btn btn-link" data-toggle="modal" data-target="#card">
		<i class="fa fa-credit-card"></i>  Update Card 

	</button>
		</div>
	</div>
	';
  }
	
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


?>





<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://kit.fontawesome.com/bb3ef965c3.js" crossorigin="anonymous"></script>
	

    <title>Account details</title>
  </head>
  <body>
  
<div class="modal fade" id="password" tabindex="-1" role="dialog" aria-labelledby="password" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Change Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
   <form action="change-password.php" method="post">
      <div class="form-group">
       <input type="email"  name="email" 
                 class="form-control"  
                 placeholder="Confirm Email" 				
                value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" 
   required>
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
		  value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2']; ?>" 
  required>
            </div>

</div>
    <div class="modal-footer">
        <div class="form-group">
          <input type="submit" 
    	        name="btnChangePassword" 
        class="btn btn-dark btn-lg btn-block" value="Save Changes"/>
           </div>
         </div>
 </form>
      </div><!--Close body-->
    </div><!--Close modal-body-->
  </div><!-- Close modal-fade-->

 <!----------------------------------------------------------------------------------------------------------------------->

<div class="modal fade" id="card" tabindex="-1" role="dialog" aria-labelledby="card" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Change card</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
   <form action="change-card.php" method="post">
      <div class="form-group">
       <input type="email"  name="email" 
                 class="form-control"  
                 placeholder="Confirm Email" 				
                value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" 
   required>
     </div>

<div class="form-group">
                <input type="card" 
				       name="card_number" 
					   class="form-control" 
					   placeholder="New card number"
					   value="<?php if (isset($_POST['card_number'])) echo $_POST['card_number']; ?>" required>

            </div>

			<div class="form-group">
                <input type="card" 
				       name="cvv" 
					   class="form-control" 
					   placeholder="New cvv"
					   value="<?php if (isset($_POST['cvv'])) echo $_POST['cvv']; ?>" required>

            </div>
			
			<div class="form-group">
                <input type="card" 
				       name="exp_month" 
					   class="form-control" 
					   placeholder="New expiry month"
					   value="<?php if (isset($_POST['exp_month'])) echo $_POST['exp_month']; ?>" required>

            </div>
			
			<div class="form-group">
                <input type="card" 
				       name="exp_year" 
					   class="form-control" 
					   placeholder="New expiry year"
					   value="<?php if (isset($_POST['exp_year'])) echo $_POST['exp_year']; ?>" required>

            </div>

</div>
    <div class="modal-footer">
        <div class="form-group">
          <input type="submit" 
    	        name="btnChangePassword" 
        class="btn btn-dark btn-lg btn-block" value="Save Changes"/>
           </div>
         </div>
 </form>
      </div><!--Close body-->
    </div><!--Close modal-body-->
  </div><!-- Close modal-fade-->
  
  
  
  <!----------------------------------------------------------------------------------------------------------------------->
  
  <div class="modal fade" id="email" tabindex="-1" role="dialog" aria-labelledby="email" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Change email</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
   <form action="change-email.php" method="post">
      <div class="form-group">
       <input type="email"  name="oldemail" 
                 class="form-control"  
                 placeholder="Confirm Email" 				
                value="<?php if (isset($_POST['oldemail'])) echo $_POST['oldemail']; ?>" 
   required>
     </div>
	 
	 <div class="form-group">
                <input type="password" 
				       name="pass" 
					   class="form-control" 
					   placeholder="Enter Password"
					   value="<?php if (isset($_POST['pass'])) echo $_POST['pass']; ?>" required>

            </div>

<div class="form-group">
                <input type="email" 
				       name="email" 
					   class="form-control" 
					   placeholder="New card email"
					   value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" required>

            </div>

</div>
    <div class="modal-footer">
        <div class="form-group">
          <input type="submit" 
    	        name="btnChangePassword" 
        class="btn btn-dark btn-lg btn-block" value="Save Changes"/>
           </div>
         </div>
 </form>
      </div><!--Close body-->
    </div><!--Close modal-body-->
  </div><!-- Close modal-fade-->
  
  
  
    <!----------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------------------------->
  
  
<div class="modal fade" id="details" tabindex="-1" role="dialog" aria-labelledby="details" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Change details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
   <form action="change-details.php" method="post">
      <div class="form-group">
       <input type="email"  name="email" 
                 class="form-control"  
                 placeholder="Confirm Email" 				
                value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" 
   required>
     </div>

<div class="form-group">
                <input type="details" 
				       name="first_name" 
					   class="form-control" 
					   placeholder="Enter your first name"
					   value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name']; ?>" required>

            </div>
			
<div class="form-group">
                <input type="details" 
				       name="last_name" 
					   class="form-control" 
					   placeholder="Enter your last name"
					   value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name']; ?>" required>

            </div>
<div class="form-group">
                <input type="details" 
				       name="birth_date" 
					   class="form-control" 
					   placeholder="Enter your date of birth (YYYY/MM/DD)"
					   value="<?php if (isset($_POST['birth_date'])) echo $_POST['birth_date']; ?>" required>

            </div>
			
<div class="form-group">
                <input type="details" 
				       name="contact_number" 
					   class="form-control" 
					   placeholder="Enter your contact number"
					   value="<?php if (isset($_POST['contact_number'])) echo $_POST['contact_number']; ?>" required>

            </div>
			
<div class="form-group">
                <input type="details" 
				       name="country" 
					   class="form-control" 
					   placeholder="Enter your country"
					   value="<?php if (isset($_POST['country'])) echo $_POST['country']; ?>" required>

            </div>

</div>
    <div class="modal-footer">
        <div class="form-group">
          <input type="submit" 
    	        name="btnChangePassword" 
        class="btn btn-dark btn-lg btn-block" value="Save Changes"/>
           </div>
         </div>
 </form>
      </div><!--Close body-->
    </div><!--Close modal-body-->
  </div><!-- Close modal-fade-->


  
  <!----------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------------------------->
    <!----------------------------------------------------------------------------------------------------------------------->
  
  
<div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="subscribe" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Subscribe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
   <form action="subscribe.php" method="post">
      <div class="form-group">
       <input type="email"  name="email" 
                 class="form-control"  
                 placeholder="Confirm Email" 				
                value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>" 
   required>
     </div>



</div>
    <div class="modal-footer">
        <div class="form-group">
          <input type="submit" 
    	        name="btnChangePassword" 
        class="btn btn-dark btn-lg btn-block" value="Save Changes"/>
           </div>
         </div>
 </form>
      </div><!--Close body-->
    </div><!--Close modal-body-->
  </div><!-- Close modal-fade-->








<div class="container">
  <div class="row">
    <div class="col-sm">
		<div class="card bg-light mb-3">
		  <div class="card-header">Subscribe Now!</div>
		  <div class="card-body">
			<h5 class="card-title">No more advertisements, subscribe Now for only (£99.99/year). </h5>
			<a href="subscribe.php" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Subscribe</a>
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
        <h5 class="modal-title" id="exampleModalLabel">Confirm purchase</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
		<form action="subscribe.php" class="was-validated" method="post"method="post">
		
		<div class="text-center"><h4>I agree on paying £99.99 for 1 year premium subscription.<h4></div>
		
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Pay £99.99" >
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



<?php
# Display footer section.
include ( 'footer.html' ) ; 
?>