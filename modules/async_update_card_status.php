<?php
include 'db_connect.php';

$new_state=$_GET['new_state'];
$req_id=$_GET['req_id'];

$link=db_connect();
if (! $link) {
	//echo "could not connect";
}
else {
	$update = mysqli_query($link, "UPDATE requests SET status='$new_state' WHERE id='$req_id' " );
	echo "ok";
}	
?>