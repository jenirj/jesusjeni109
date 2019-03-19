<?php
include_once('db.php');
$username= $_POST['username'];
$password= $_POST['password'];

	if(mysql_query("INSERT INTO user VALUES('$username','$password')"))
		echo "Successfully inserted";
	else
		echo "insertion failed";
?>