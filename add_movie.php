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

  # Check for a movie name.
  if ( empty( $_POST[ 'movie_name' ] ) )
  { $errors[] = 'Enter movie name.' ; }
  else
  { $movie_name = mysqli_real_escape_string( $link, trim( $_POST[ 'movie_name' ] ) ) ; }

  # Check for a release_year.
  if ( empty( $_POST[ 'release_year' ] ) )
  { $errors[] = 'Enter year of release.' ; }
  else
  { $release_year = mysqli_real_escape_string( $link, trim( $_POST[ 'release_year' ] ) ) ; }

  # Check for a duration.
  if ( empty( $_POST[ 'duration' ] ) )
  { $errors[] = 'Enter movie duration.' ; }
  else
  { $duration = mysqli_real_escape_string( $link, trim( $_POST[ 'duration' ] ) ) ; }

  # Check for a description.
  if ( empty( $_POST[ 'description' ] ) )
  { $errors[] = 'Enter movie description.' ; }
  else
  { $description = mysqli_real_escape_string( $link, trim( $_POST[ 'description' ] ) ) ; }

  # Check for a genre.
  if ( empty( $_POST[ 'genre' ] ) )
  { $errors[] = 'Enter movie genre.' ; }
  else
  { $genre = mysqli_real_escape_string( $link, trim( $_POST[ 'genre' ] ) ) ; }

  # Check for a language.
  if ( empty( $_POST[ 'language' ] ) )
  { $errors[] = 'Enter movie language.' ; }
  else
  { $language = mysqli_real_escape_string( $link, trim( $_POST[ 'language' ] ) ) ; }

  # Check for a movie_link.
  if ( empty( $_POST[ 'movie_link' ] ) )
  { $errors[] = 'Enter movie link.' ; }
  else
  { $movie_link = mysqli_real_escape_string( $link, trim( $_POST[ 'movie_link' ] ) ) ; }

  # Check for a trailer_link.
  if ( empty( $_POST[ 'trailer_link' ] ) )
  { $errors[] = 'Enter trailer link.' ; }
  else
  { $trailer_link = mysqli_real_escape_string( $link, trim( $_POST[ 'trailer_link' ] ) ) ; }

  # Check for a img_path.
  if ( empty( $_POST[ 'img_path' ] ) )
  { $errors[] = 'Enter image path.' ; }
  else
  { $img_path = mysqli_real_escape_string( $link, trim( $_POST[ 'img_path' ] ) ) ; }





  # On success register movie inserting into 'movies' database table.
  if ( empty( $errors ) ) 
  {
    $q = "INSERT INTO movies (movie_name, release_year, duration, description, genre, language, movie_link, trailer_link, img_path ) 
	VALUES ('$movie_name', '$release_year', '$duration', '$description', '$genre', '$language', '$movie_link', '$trailer_link', '$img_path')";
    if (mysqli_query($link, $q)){ 
		echo '<div class="alert alert-secondary" role="alert">
		<h4 class="alert-heading"Movie details Registered!</h4>
		<p>Movie added.</p>
		<a class="alert-link" href="add_movie.php">add more</a>'; 
	}else {
		echo "Error: " . $r . "<br>" . mysqli_error($link);
			}
  
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
		  <div class="card-header">Add movie</div>
			<div class="card-body">
			<form action="add_movie.php" class="was-validated" method="post">
				
				 <div class="form-group">
					<input type="text" name="movie_name" class="form-control" placeholder="Enter movie name." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="release_year" class="form-control" placeholder="Enter year of release." value="" required>
				 </div>
				 <div class="form-group">
					<input type="text" name="duration" class="form-control" placeholder="Enter duration. (mins)" value="" required>
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
					<input type="text" name="movie_link" class="form-control" placeholder="Enter movie link. (youtubelink)" value="" required>
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
</div>
<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	
  </body>
</html>




