
<html>
<head>
<title>Marian</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="page">
<div class="headerpart">
<img src="logo.jpg" width="100">
<h1>
MARIAN MATRICULATION HIGHER SECONDARY SCHOOL<br>
<center>
<blink><b class="boo">LEARN &nbsp&nbsp&nbsp LEAD&nbsp&nbsp&nbsp LIBRATE</b>
</center>
</blink>
</h1>
</div>
<nav>
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="Acadamics.php">Acadamics</a></li>
<li><a href="Activities.php">Activities</a></li>
<li><a href="Infrastructure.php">Infrastructure</a></li>
</ul>
</nav>
<center>
<?php
$conn=mysqli_connect("localhost","root","","test");
if(isset($_POST["submit1"]))
{
	$sql="Insert into stu values('$_POST[username]','$_POST[register]','$_POST[gender]','$_POST[mobileno]','$_POST[address]','$_POST[emailid]')";
	mysqli_query($conn,$sql);
							echo  "*****succesfully insterted*****";
}
if(isset($_POST["submit2"]))
{
	$sql="delete from stu where username=('$_POST[username]')";
	mysqli_query($conn,$sql);
								echo  " ****Succesfully Deleted*****";
}
if(isset($_POST["submit3"]))
{	$sql="update stu set username='$_POST[username]' Where gender='$_POST[gender]'";
	mysqli_query($conn,$sql);
	echo  " ****Succesfully Updated*****";
}

if(isset($_POST["submit4"]))
{
$sql="select *from stu where username=('$_POST[username]')";
	mysqli_query($conn,$sql);
	$res=mysqli_query($conn,$sql);
	
	echo $username= $_POST['username']."<br>";
 echo $register= $_POST['register']."<br>";
 echo $gender= $_POST['gender']."<br>";
 echo $activities= $_POST['activities']."<br>";
 echo $mobileno= $_POST['mobileno']."<br>";
 echo $address= $_POST['address']."<br>";
 echo $emailid= $_POST['emailid']."<br>";

	while($row=mysqli_fetch_array($res,MYSQLI_ASSOC))
	{
		echo $row["username"];
		echo $row["register"];
		echo $row["gender"];
		echo $row["activities"];
		echo $row["mobileno"];
		echo $row["address"];
		echo $row["emailid"];
	}
	
}

?>
</center>
</body>
</html>