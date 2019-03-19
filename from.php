<html>
<head>
<title>Marian</title>
<link rel="stylesheet" href="style1.css">
</head>
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
<li><a href="Student Login.php">Student Login</a></li>
</nav><br>
<body background="jeffrey-f-lin-673417-unsplash.jpg">
<center>
<div class="cont">
</center>
<div class="silent">
<center>
<h1 class="text-success">STP Register Form</h1><br>
</center>
<form id="myform" action="select.php" method="post">
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp <label>Username</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="username"><br>
		<span id="username" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Register Number</label><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="register" ><br>
		<span id="regino" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label> Gender </label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gender"><br>
		<span id="gender" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label> Activities </label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<select>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<option>football</option>
		&nbsp&nbsp&nbsp&nbsp<option>hockey</option>
		<option>basketball</option>
		<option>running</option>
		<option>singing</option>
		<option>dance</option></select>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Mobile Number</label><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="mobileno"><br>
		<span id="mobileno" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Address</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="address"><br>
		<span id="address" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Email</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="emailid"><br>
		<span id="emailids" class="text-danger font-weight-bold"> </span>
		</div><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" id="ran" value="insert" name="submit1"/>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  id="van" value="delete" name="submit2"/><br><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit"  id="los" value="update" name="submit3"/>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="submit"  id="wait" value="select" name="submit4"/>
		</form>
		</div><br>
		<div class="side">
		<img src="IMG_20190306_201913.jpg" alt="Image is not found" width="400px" height="300px"/>
		</div>
		<div class="solo">
		<img src="IMG_20190306_201832.jpg" alt="Image is not found" width="400px" height="350px"/>
		</div>
		</div>
<?php
$conn=mysqli_connect("localhost","root","","test");
if(isset($_POST["submit1"]))
{
	$sql="insert into stu values('$_POST[username]','$_POST[register]','$_POST[gender]','$_POST[activities]','$_POST[mobileno]','$_POST[address]','$_POST[emailid]')";
	mysqli_query($conn,$sql);
}
if(isset($_POST["submit2"]))
{
	$sql="delete from stu where username=('$_POST[username]')";
	mysqli_query($conn,$sql);
}
if(isset($_POST["submit3"]))
{	$sql="update stu set username='$_POST[username]' Where gender='$_POST[gender]'";
	mysqli_query($conn,$sql);
}

?>
</body>
</html>
		