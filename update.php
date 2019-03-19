<html>
<body>
<?php
session_start();
$conn =  mysqli_connect('localhost','root','','test');IF($conn->error)
{
	die("Connection failed:");
}

$username= $_POST['username'];
$password= $_POST['password'];

$sql="update user set username=$username ,password=$password";
if(mysqli_query($conn,$sql))
{
	echo"Record updated suceesfully";
	}
	else
	{
	echo"Error updating record:".mysqli_error($conn);
}
?>
<form>
Username:<input type="text" name="username" /><br>
Password:<input type="text" name="password" /><br>
</form>
</body>
</html>
