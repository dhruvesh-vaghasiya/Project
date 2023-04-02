<?php
	Session_start();
	$id=$_POST['id'];
	$role=$_POST['role'];
	$con=mysql_connect("localhost","root");
	$db=mysql_selectdb("project");
	$query="select fpass from admin where aid='$id'";
	$cmd=mysql_query($query,$con);
	while($row=mysql_fetch_array($cmd))
	{
		$fpass=$row[fpass];
	?>
	<?php 
	if(!(strcasecmp($role,$fpass))){
		$_SESSION['emailid']=$id;
		header("location:../anewpass.php");
	}
	else{	
		echo "Please enter correct details";
	}
	?>
	<?php }
?>
	