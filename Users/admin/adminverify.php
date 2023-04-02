<?php 
Session_start();

$adminid = $_POST[name];
$pass = $_POST[pwd];

$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from admin";
$cmd=mysql_query($query,$con);
while($row=mysql_fetch_array($cmd)){
    $aid=$row[aid];
    $pwd=$row[pwd];
    $name=$row[name];
?>

<?php 
if($adminid==$aid){
	if($pass==$pwd){
		$_SESSION['name']=$name;
		header("location:ahome.html?un=".$_SESSION['name']);
	}
	else{	
		echo "Please enter correct password";
	}
}
else{
    echo "Please enter correct email id";
}
?>

<?php } ?>