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
<li><a href="Student login.php">Student Login</a></li>
<li><a href="Register Form.php">Register Form.</a></li>
</ul>
</nav><br>
<body background="form1.jpg">
<center>
<div class="cont">
</center>
<div class="silent">
<center>
<h1 class="text-success">Register Form</h1><br>
</center>
		<form action="#" onsubmit="return validation()">
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp <label>Username</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="user" class="form-control"  id="user" autocomplete="off"><br>
		<span id="username" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Father Name</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="fath" class="form-control" id="fath" autocomplete="off"><br>
		<span id="father" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Mother Name</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="moth" class="form-control" id="moth" autocomplete="off"><br>
		<span id="mother" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label> Gender </label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="gen" class="form-control" id="gen" autocomplete="off"><br>
		<span id="gender" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Mobile Number</label><br>
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="moblie" class="form-control" id="mobile" autocomplete="off"><br>
		<span id="mobileno" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Address</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="add" class="form-control" id="add" autocomplete="off"><br>
		<span id="address" class="text-danger font-weight-bold"> </span>
		</div><br>
		<div class="inputBox2">
		&nbsp&nbsp&nbsp&nbsp<label>Email</label><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="email" class="form-control" id="email" autocomplete="off"><br>
		<span id="emailids" class="text-danger font-weight-bold"> </span>
		</div><br>
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" name="submit" value="submit" class="blue"autocomplete="off">
		</form>
		</div><br>
		<div class="side">
		<img src="form.jpg" alt="Image is not found" width="400px" height="300px"/>
		</div>
		<div class="solo">
		<img src="form2.jpg" alt="Image is not found" width="400px" height="350px"/>
		</div>
		</div>
		<script type="text/javascript">
		function validation()
		{
		var user= document.getElementById('user').value;
		var fath= document.getElementById('fath').value;
		var moth= document.getElementById('moth').value;
		var gen= document.getElementById('gen').value;
		var mobilenumber= document.getElementById('mobile').value;
		var emailids= document.getElementById('email').value;
		if(user =="")
		{
		document.getElementById('username').innerHTML=" **Please fill the username field **";
		return false;
		}
		if((user.length <= 2)||(user.length > 20))
		{
		document.getElementById('username').innerHTML=" **Please enter username between 2 and 20 **";
		return false;
		}
		if(!isNaN(user))
		{
		document.getElementById('username').innerHTML=" **Only character are allowed **";
		return false;
		}
		if(fath =="")
		{
		document.getElementById('father').innerHTML=" **Please fill the father field **";
		return false;
		}
		if((fath.length <= 2)||(fath.length > 20))
		{
		document.getElementById('father').innerHTML=" **Please enter father between 2 and 20 **";
		return false;
		}
		if(!isNaN(fath))
		{
		document.getElementById('father').innerHTML=" **Only character are allowed **";
		return false;
		}
		if(moth =="")
		{
		document.getElementById('username').innerHTML=" **Please fill the username field **";
		return false;
		}
		if((moth.length <= 2)||(moth.length > 20))
		{
		document.getElementById('mother').innerHTML=" **Please enter username between 2 and 20 **";
		return false;
		}
		if(!isNaN(moth))
		{
		document.getElementById('mother').innerHTML=" **Only character are allowed **";
		return false;
		}
		
		if(gen =="")
		{
		document.getElementById('gender').innerHTML=" **Please fill the Passwords field **";
		return false;
		}
		if((gen.length <= 5)||(gen.length > 20))
		{
		document.getElementById('gender').innerHTML=" **Password length must be between 5 and 20 **";
		return false;
		}
		
		if(mobilenumber =="")
		{
		document.getElementById('mobileno').innerHTML=" ** Please fill the Mobile Number field **";
		return false;
		}
		if(isNaN(mobilenumber))
		{
		document.getElementById('mobileno').innerHTML=" **Please enter the number only**";
		return false;
		}
		if(mobilenumber.length!=10)
		{
		document.getElementById('mobileno').innerHTML=" **Please enter the mobileno in 10**";
		return false;
		}
		
		if(emailids =="")
		{
		document.getElementById('emailids').innerHTML=" ** Please fill the Email Id field **";
		return false;
		}
		if(emailids.indexOf('@') <=0)
		{
		document.getElementById('emailids').innerHTML=" ** Please enter email propely **";
		return false;
		}
		if((emailids.charAt(emailids.length-4)!='.') && (emailids.charAt(emailids.length-3)!='.'))
		{
		document.getElementById('emailids').innerHTML=" ** Please enter valid id **";
		return false;
		}
		}
		</script>
</body>
</html>