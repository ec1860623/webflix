<?php
# Access session.
session_start() ;

# Redirect if not logged in.
if ( !isset( $_SESSION[ 'user_id' ] ) ) { require ( 'login_tools.php' ) ; load() ; }

	
$connect = mysqli_connect('localhost', 'HNDSOFTSA20', 'Q2F2qqs4kQ', 'HNDSOFTSA20');
$q = "SELECT subscription FROM user_details WHERE user_id={$_SESSION[user_id]}";
$r = @mysqli_query ( $connect, $q );
$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
if($row['subscription'] == 'Basic') {
	include ( 'adv.html' ) ;
}else {
	#include ( 'adv.html' ) ;
}



?>
