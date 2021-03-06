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




# ***********************************************************************************************


?>

<!DOCTYPE html>
<html>
	<head>
		<title>Webflix Series </title>
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
	
	
	<div class="container" >
                    <form action='series_results.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Genre</option>
                        <option value='action'>Action</option>
                        <option value='animation'>Animation</option>
                      </select>
                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:-5px;' value='Search'/></h4>
                    </form>
                  </div>
	 </div>
	<br>
	<br>
	
	<div class="container" >
	<div class="row" >
<?php
$connect = mysqli_connect('localhost', 'HNDSOFTSA20', 'Q2F2qqs4kQ', 'HNDSOFTSA20');
# ***** load only the last four series 
$q = 'SELECT * FROM `series` ORDER by series_id ASC';
$r = mysqli_query($connect,$q);

if($r):
    if(mysqli_num_rows($r)>0):
		while($series = mysqli_fetch_assoc($r)):
		?>
		<div class="col-md-3 d-flex justify-content-center">
		 <div class="card" style="width: 18rem;">
			  <div class="card text-center">
				
				  <img src="<?php echo $series['img_path']; ?>" alt="series" class="img-thumbnail bg-secondary">
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
	
	<br>
		
	
	
	</body>
	<footer>
	<br>
	<br>
	<br>
	<br>
	</footer>
</html>


