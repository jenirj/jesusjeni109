<html>
<head>
<title>sample.php</title>
</head>
<body>
<?php
$con=mysql_connect("localhost","rrot","","sample");
$query="select*from student";
$rs=mysqli_qurey($conn,$qurey);?>
<table border=1>
<tr><td>DEPTNO </td><td>NAMe</td><td>AGE</td><td>
gender</td></tr>
<?php
while($r=mysqli_fetch_row($rs))
{
?>
<tr><td>$r[0]</td>;?>
<td>
<?php echo$e[1];?>
</td><td><?php echo $r{2];?>
<td><td><?php echo $r[3];?>
</td></tr>
<?php}
?>
</table>