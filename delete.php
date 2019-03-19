<?php
session_start();
$conn =  mysqli_connect('localhost','root','','test');IF($conn->error)
{
	die("Connection failed:");
}

$username= $_POST['username'];
$password= $_POST['password'];
$sql="delete *from user where username=$username";
if(mysqli_query($conn,$sql))
{
	echo"Record deleted successfully";
else
 echo"Error deleting records:".mysql_error($conn);
}
?>