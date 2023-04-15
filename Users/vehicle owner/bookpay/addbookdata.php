<?php
$name=$_POST['name'];
$cid=$_POST['id'];
$pdate=$_POST['pdate'];
$ptime=$_POST['ptime'];
$ddate=$_POST['ddate'];
$dtime=$_POST['dtime'];
$amt=$_POST['amt'];

$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
if($db)
	echo "Database selected successfully";
else
echo "Database not selected";

$qry="insert into owner values ('$id','$pass','$name','$num','$birth','$city','$add','$role', '$card', '$lic')";
//$qry="insert into owner values ('dhruveshpatel@gmail.com','321','dhruv','8746316145','02-12-2023','dsad','anand', 'DJ');";
$cmd=mysql_query($qry,$con);
if($cmd)
?>