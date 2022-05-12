<?php # DISPLAY COMPLETE REGISTRATION PAGE.

# Include HTML static file login.html
include ( 'logout.html' ) ;
include ( 'admin_nav.html' ) ;


# Check form submitted.
if ( $_SERVER[ 'REQUEST_METHOD' ] == 'POST' )
{
  # Connect to the database.
  require ('connect_db.php'); 
  
  # Initialize an error array.
  $errors = array();

  # Check for a series_name.
  if ( empty( $_POST[ 'series_name' ] ) )
  { $errors[] = 'Enter series name.' ; }
  else
  { $series_name = mysqli_real_escape_string( $link, trim( $_POST[ 'series_name' ] ) ) ; }

  # Check for a release_year.
  if (empty( $_POST[ 'release_year' ] ) )
  { $errors[] = 'Enter year of release.' ; }
  else
  { $release_year = mysqli_real_escape_string( $link, trim( $_POST[ 'release_year' ] ) ) ; }


  # Check for Description.
  if (empty( $_POST[ 'description' ] ) )
  { $errors[] = 'Enter description' ; }
  else
  { $description = mysqli_real_escape_string( $link, trim( $_POST[ 'description' ] ) ) ; }

  # Check for genre.
  if (empty( $_POST[ 'genre' ] ) )
  { $errors[] = 'Enter genre' ; }
  else
  { $genre = mysqli_real_escape_string( $link, trim( $_POST[ 'genre' ] ) ) ; }

  # Check for Language.
  if (empty( $_POST[ 'language' ] ) )
  { $errors[] = 'Enter language' ; }
  else
  { $language = mysqli_real_escape_string( $link, trim( $_POST[ 'language' ] ) ) ; }

  # Check for seasons number.
  if (empty( $_POST[ 'seasons_number' ] ) )
  { $errors[] = 'Enter number of seasons' ; }
  else
  { $seasons_number = mysqli_real_escape_string( $link, trim( $_POST[ 'seasons_number' ] ) ) ; }

  # Check for episodes_number.
  if (empty( $_POST[ 'episodes_number' ] ) )
  { $errors[] = 'Enter number of episodes' ; }
  else
  { $episodes_number = mysqli_real_escape_string( $link, trim( $_POST[ 'episodes_number' ] ) ) ; }

  # Check for series_link.
  if (empty( $_POST[ 'series_link' ] ) )
  { $errors[] = 'Enter series link.' ; }
  else
  { $series_link = mysqli_real_escape_string( $link, trim( $_POST[ 'series_link' ] ) ) ; }

  # Check for trailer_link.
  if (empty( $_POST[ 'trailer_link' ] ) )
  { $errors[] = 'Enter trailer link.' ; }
  else
  { $trailer_link = mysqli_real_escape_string( $link, trim( $_POST[ 'trailer_link' ] ) ) ; }

  # Check for img_path.
  if (empty( $_POST[ 'img_path' ] ) )
  { $errors[] = 'Enter img path.' ; }
  else
  { $img_path = mysqli_real_escape_string( $link, trim( $_POST[ 'img_path' ] ) ) ; }

 
  # On success register inserting into 'series' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO series (series_name, release_year, description, genre, language, seasons_number, episodes_number, series_link, trailer_link, img_path) VALUES ('$series_name', '$release_year', '$description', '$genre', '$language', '$seasons_number', '$episodes_number', '$series_link', '$trailer_link', '$img_path')";
    $r = @mysqli_query ( $link, $q ) ;
    if ($r)
    { echo '<div class="alert alert-secondary" role="alert">
		<h4 class="alert-heading"series details Registered!</h4>
		<p>series added.</p>
		<a class="alert-link" href="add_series.php">Add more</a>'; }
  
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
		  <div class="card-header">Add Series</div>
			<div class="card-body">
			<form action="add_series.php" class="was-validated" method="post">
				
				 <div class="form-group">
					<input type="text" name="series_name" class="form-control" placeholder="Enter series name." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="release_year" class="form-control" placeholder="Enter year of release." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="description" class="form-control" placeholder="Enter description." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="genre" class="form-control" placeholder="Enter genre." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="language" class="form-control" placeholder="Enter language." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="seasons_number" class="form-control" placeholder="Enter number of seasons." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="episodes_number" class="form-control" placeholder="Enter number of episodes." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="series_link" class="form-control" placeholder="Enter series link. (youtubelink)" value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="trailer_link" class="form-control" placeholder="Enter trailer link. (youtubelink)" value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="img_path" class="form-control" placeholder="Enter img path. (img/name.png)" value="" required>
				 </div>
				 <input type="submit" class="btn btn-secondary btn-lg btn-block" value="Submit"></p>
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
