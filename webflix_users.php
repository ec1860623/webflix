<?php

include ( 'logout.html' ) ;

# Access session.
session_start() ;
# Check if admin.
if ($_SESSION[ 'role' ] == 'admin'){
	include ( 'admin_nav.html' ) ;
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #737373;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}


</style>
</head>
<body>
<table>
<tr>
<th>Id</th>
<th>Name</th>
<th>Surname</th>
<th>Email</th>
<th>Contact num</th>
<th>Subscription</th>
<th>Sub. enddate</th>
<th>Status</th>
</tr>
<?php
$conn = mysqli_connect("localhost","HNDSOFTSA20","Q2F2qqs4kQ","HNDSOFTSA20");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM user_details";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row['user_id']. "</td><td>" . $row['first_name'] . "</td><td>"
. $row['last_name']. "</td><td>". $row['email']. "</td><td>". $row['contact_number']. "</td><td>". $row['subscription']. "</td><td>"
. $row['sub_date']. "</td><td>". $row['status']. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>



		<div class="container">
			<div class="content-section">
				
				<div class="content">
				    
					<div class="button">
						
						
						<button type="button" class="btn btn-link" data-toggle="modal" data-target="#status">
						<i class="fa fa-edit"></i>  Change status
						</button>
					</div>
					
					
				</div>
				
				
			</div>
			
		</div>
	


  <!----------------------------------------------------------------------------------------------------------------------->
  
  <div class="modal fade" id="status" tabindex="-1" role="dialog" aria-labelledby="status" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Change status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

<div class="modal-body">
   <form action="change-status.php" method="post">
      <div class="form-group">
       <input type="email"  name="email" 
                 class="form-control"  
                 placeholder="Enter user Email" 				
                value="<?php if (isset($_POST['oldemail'])) echo $_POST['oldemail']; ?>" 
   required>
     </div>
	 
	 <div class="form-group">
                <input type="status" 
				       name="user_id" 
					   class="form-control" 
					   placeholder="Enter user id"
					   value="<?php if (isset($_POST['user_id'])) echo $_POST['user_id']; ?>" required>

            </div>

<div class="form-group">
                <input type="status" 
				       name="status" 
					   class="form-control" 
					   placeholder="enter user status (blocked/active/inactive)"
					   value="<?php if (isset($_POST['status'])) echo $_POST['status']; ?>" required>

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






</body>
<footer>
	 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
</footer>
</html>


