<?php
include 'db_connect.php';

$new_state=$_GET['new_state'];
$new_resp=$_GET['new_resp'];
$req_id=$_GET['req_id'];

$link=db_connect();
if (! $link) {
	//echo "could not connect";
}
else {
	$update = mysqli_query($link, "UPDATE requests SET status='$new_state', in_charge_id='$new_resp' WHERE id='$req_id' " );
	echo "ok";
}	
?>