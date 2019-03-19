<html>
<head>
<title>Marian</title>
<link rel="stylesheet" href="style1.css">
</head>
<body>
<script>
var images   = ["marian1.jpg",
			   "marian2.jpg",
			   "marian3.jpg",
			   "marian4.jpg",
			   "marian5.jpg",];
var i=0;
function slides()
{
document.getElementById("slideimage").src=images[i];
	if(i<(images.length-1))//4<4
		i++;
else
i=0;
}
setInterval(slides,2000)
</script>
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
</nav>
</div>
<div class="girl">
<img src="marian1.jpg" alt="marian1.jpg" id="slideimage" width="810px" height="500px">
</div>
<div class="newspart">
<h2 class="head">ST.MARIAN SCHOOL</h2>
<div class="news">
<marquee direction ="up" height="500px">
<h4>St.marians candidates for the november 2017 IGCSE examintions scored 9 A'sthere were plenty of A*S toboot.we are very proud ofall of you congratulations to all you
marians candidates for the november  IGCSE examintionsthere were pl enty of A*S toboot.we are very proud ofall of you congratulations to all your  way to great futur IGCSE examintions scored sthere were plenty of A*S toboot.we are very proud ofall of you congratulations to all your  way to great future congratulations to all your</h4>
marians candidates  2017 IGCSE examintions scored 9 A'sthere were plenty of A*S toboot.we are very proud ofall of you congratulations to all your  way to great future</h4>
<b class="bha"><blink><a href="morenews.html">more news...</a></blink></b>
</marquee></div>
</div>
</div>
</div>
</body>
</html>