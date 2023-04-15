<?php
		$name=$_POST['cname'];
		$num=$_POST['cno'];
		$birth=$_POST['cbdate'];
		$city=$_POST['c_city'];
		$id=$_POST['cid'];
		$pass=$_POST['pwd'];
		$add=$_POST['cadd'];
		$role=$_POST['role'];
		$card=$_FILES['idproof']['name'];
		$lic=$_FILES['licence']['name'];

		$con=mysql_connect("localhost","root");
		$db=mysql_selectdb("project");
		if($db)
			echo "Database selected successfully";
		else
			echo "Database not selected";

		$query="select pwd,cname from customer where cid='$id'";
		$cmd=mysql_query($query,$con);
		$num=mysql_num_rows($cmd);
		if($num>0){
			echo "User already exists";
		}else{
			$qry="insert into customer values ('$id','$pass','$name','$num','$birth','$city','$add', '$role', '$card', '$lic')";
			//$qry="insert into customer values ('dhruveshpatel2005@gmail.com','321','dhruv',8746316145,'02-12-2023','dsad','anand','DJ');";
	   		$cmd=mysql_query($qry,$con);
			if($cmd)
			{
				move_uploaded_file($_FILES["idproof"]["tmp_name"], "customer_data/".$_FILES["idproof"]["name"]);
				move_uploaded_file($_FILES["licence"]["tmp_name"], "customer_data/".$_FILES["licence"]["name"]);
				header("location:custlog.php");	
			}
			else
			{
				echo "Record not";
			}
		}
?>