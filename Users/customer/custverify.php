<?php 
session_start();
$id=$_POST[name];
$pass=$_POST[pwd];

$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select pwd,cname from customer where cid='$id'";
$cmd=mysql_query($query,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $pwd=$row[pwd];
    $name=$row[cname];
?>
<?php 
if($pass==$pwd){
	$_SESSION['name']=$name;
	header("location:chome.html?un=".$_SESSION['name']);
}
else{	
	echo "Please enter correct password";
}
?>

<?php } ?>