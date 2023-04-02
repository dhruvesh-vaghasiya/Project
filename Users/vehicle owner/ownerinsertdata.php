<?php
		$name=$_POST['oname'];
		$num=$_POST['ono'];
		$birth=$_POST['obdate'];
		$city=$_POST['o_city'];
		$id=$_POST['oid'];
		$pass=$_POST['pwd'];
		$add=$_POST['oadd'];
		$role=$_POST['role'];
		$card=$_FILES['idproof']['name'];
		$lic=$_FILES['licence']['name'];

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
		{
			move_uploaded_file($_FILES["idproof"]["tmp_name"], "owner_data/".$_FILES["idproof"]["name"]);
			move_uploaded_file($_FILES["licence"]["tmp_name"], "owner_data/".$_FILES["licence"]["name"]);
			header("location:ownerlog.php");
		}
		else
		{
			echo "Record not inserted";
		}	
?>