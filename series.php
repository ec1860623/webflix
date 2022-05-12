<?php
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; } 

# Get passed product id and assign it to a variable.
if ( isset( $_GET['id'] ) ) $id = $_GET['id'] ;


include ( 'logout.html' ) ;
# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}
# Open database connection.
require ( 'connect_db.php' ) ;

# Retrieve selective item data from 'series' database table. 
$q = "SELECT * FROM series WHERE series_id = $id" ;
$r = mysqli_query( $link, $q ) ;
if ( mysqli_num_rows( $r ) == 1 )
{
  $row = mysqli_fetch_array( $r, MYSQLI_ASSOC );


# Add one more of this product.
    $_SESSION['cart'][$id]['quantity']++; 
    echo '<div class="container">
            <h1 class="display-4">'.$row['series_name'].'</h1>
			<hr>
        <div class="row">
            <div class="col-sm-12 col-md-4">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src='. $row['trailer_link'].' 
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen>
                </iframe>
               </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <p>'.$row['description'].'</p>
            </div>
            <div class="col-sm-12 col-md-4">
			
				<p>Release year: '.$row['release_year'].'</p>
				<p>Duration: '.$row['duration'].' mins</p>
				<p>Genre: '.$row['genre'].'</p>
				<p>Language: '.$row['language'].'</p>
				<p>Number of seasons: '.$row['seasons_number'].'</p>
				<p>Number of Episodes: '.$row['episodes_number'].'</p>
            </div>
        </div>
        ';
		
	echo '<div class="container">
	
        <div class="row">
            <div class="col-9 text-center">
				<hr>
                <br>
                <h4>Watch Now on Youtube</h4>
                <hr>
                <h2>
				<a href='. $row['series_link'].'> <button type="button" class="btn btn-secondary" role="button"> Watch now on YouTube</button></a>
                  

                </h2>
            </div>
            
        </div>
		
		<hr>
	<br>
        ';	
 
}

# Close database connection.
mysqli_close($link);


# Display footer section.
include ( 'footer.html' ) ;
?>
