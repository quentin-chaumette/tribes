<?php
include 'db_connect.php';
$coprop_title=$_GET['coprop_title'];

$link=db_connect();
if (! $link) {
	echo "could not connect";
}
else {
	$check_exist = mysqli_query($link, "SELECT * FROM coprops WHERE title='$coprop_title' " );

	if($row = mysqli_fetch_row($check_exist)){
		echo "exist";
	}
	else{
		echo "noexist";
	}	
}	
?>