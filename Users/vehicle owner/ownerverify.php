<?php 
session_start();
$id=$_POST[name];
$pass=$_POST[pwd];

$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select pwd,oname from owner where oid='$id'";
$cmd=mysql_query($query,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $pwd=$row[pwd];
    $name=$row[oname];
?>
<?php 
if($pass==$pwd){
	$_SESSION['name']=$name;
	$_SESSION['oid']= $id;
	header("location:ohome.php?un=".$_SESSION['name'].$_SESSION['oid']);
}
else{	
	echo "Please enter correct password";
}
?>

<?php } ?>