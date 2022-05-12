<?php
include 'dbh.php';
if(isset($_POST['submit'])){


	$option = $_POST['option'];
    $text =  strtolower($_POST['textoption']);

    $found = "SELECT * FROM series WHERE genre LIKE '$option'";
    $display = mysqli_query($conn,$found);
	

  start:
  $i=0;

  echo"<div class='row'>";
    while($final = mysqli_fetch_assoc($display)){
		?>
		<div class="col-md-3 d-flex justify-content-center">
		 <div class="card" style="width: 18rem;">
			  <div class="card text-center">
				
				  <img src="<?php echo $final['img_path']; ?>" alt="series" class="img-thumbnail bg-secondary">
				  <h5 class="card-title"><?php echo $final['series_name']; ?></h5>
				 <a href="series.php?id=<?php echo $final['series_id'];?>" class="btn btn-secondary btn-block" role="button"> Watch now</a>
			   </div>
		  </div>
		</div> 
		<?php

      if ($i==4) {

        echo"</div>";

        goto start;
      }
      $i++;
    }
    echo"</div>";

  }


 ?>
