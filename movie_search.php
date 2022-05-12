<?php
session_start();

 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Webflix-search</title>
  <link rel="stylesheet" href="homepage.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
  <body>
    <header>

                  </header>
                  <section>


                
                <div class="row">
                  
                  <div class='col'>
                    <form action='movie_results.php' method='POST'>
                      <select  name='option' style='padding:5px;'>
                        <option selected>Genre</option>
                        <option value='drama'>Drama</option>
                        <option value='documentary'>Documentary</option>
                      </select>
                      <input type='submit' name='submit' class='btn btn-success' style='display:inline;width:100px;margin-left:20px;margin-right:20px;margin-top:-5px;' value='Search'/></h4>
                    </form>
                  </div>
                </div>




  </section>
  <footer class="page-footer font-small blue">

    <br>
	<br>
	<br>

  </footer>
  </body>
</html>
