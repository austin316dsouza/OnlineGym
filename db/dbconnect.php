<?php 
	$conn = mysqli_connect('localhost','root','','gym');
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}
?>