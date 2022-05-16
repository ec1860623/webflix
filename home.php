<?php # DISPLAY COMPLETE LOGGED IN PAGE.

# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

# Set page title and display header section.
#$page_title = 'Home' ;
include ( 'logout.html' ) ;

# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}


#****************************************************************************************
# set status to active
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
  $status = "active";
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


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home page </title>
		<link rel=stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/bb3ef965c3.js" crossorigin="anonymous"></script>
	</head>
	<body>
	
	
	
	<div class="col-8 col-sm-6">
	<?php
	# ads if user is basic
	include ( 'adv.php' ) ;
	?>
	</div>
	
	<br>
	<h1 class="text-center">Latest movies</h1>
	<div class="container" >
	<div class="row" >
<?php
$connect = mysqli_connect('localhost', 'HNDSOFTSA20', 'Q2F2qqs4kQ', 'HNDSOFTSA20');
# ***** load only the last four movies 
$q = 'SELECT * FROM `movies` ORDER by movie_id DESC LIMIT 4';
$r = mysqli_query($connect,$q);

if($r):
    if(mysqli_num_rows($r)>0):
		while($movie = mysqli_fetch_assoc($r)):
		?>
		<div class="col-md-3 d-flex justify-content-center">
		 <div class="card" style="width: 18rem;">
			  <div class="card text-center">
				
				  <img src="<?php echo $movie['img_path']; ?>" alt="Movie" class="img-thumbnail bg-secondary">
				  <h5 class="card-title"><?php echo $movie['movie_name']; ?></h5>
				 <a href="movie.php?id=<?php echo $movie['movie_id'];?>" class="btn btn-secondary btn-block" role="button"> Watch now</a>
			   </div>
		  </div>
		</div> 
		<?php
		endwhile;
	endif;
endif;
?>
	</div>
	</div>
	
	<br>
		<h1 class="text-center">Latest series</h1>
	<div class="container" >
	<div class="row" >
<?php
$connect = mysqli_connect('localhost', 'HNDSOFTSA20', 'Q2F2qqs4kQ', 'HNDSOFTSA20');
# ***** load only the last four series 
$q = 'SELECT * FROM `series` ORDER by series_id DESC LIMIT 4';
$r = mysqli_query($connect,$q);

if($r):
    if(mysqli_num_rows($r)>0):
		while($series = mysqli_fetch_assoc($r)):
		?>
		<div class="col-md-3 d-flex justify-content-center">
		 <div class="card" style="width: 18rem;">
			  <div class="card text-center">
				
				  <img src="<?php echo $series['img_path']; ?>" alt="Series" class="img-thumbnail bg-secondary">
				  <h5 class="card-title"><?php echo $series['series_name']; ?></h5>
				 <a href="series.php?id=<?php echo $series['series_id'];?>" class="btn btn-secondary btn-block" role="button"> Watch now</a>
			   </div>
		  </div>
		</div> 
		<?php
		endwhile;
	endif;
endif;
?>
	</div>
	</div>
	
	
	</body>
	<footer>
	<br>
	<br>
	<br>
	<br>
	</footer>
</html>

