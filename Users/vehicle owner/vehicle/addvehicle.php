<?php
session_start();

	$name=$_POST['vname'];
	$vno=$_POST['vno'];
	$brand=$_POST['brand'];
	$color=$_POST['color'];
	$price=$_POST['price'];
	$type=$_POST['type'];
	$ftype=$_POST['fuel'];
	$date=$_POST['vdate'];
    $seat=$_POST['seat'];
	$photo=$_FILES['photo']['name'];
	$puc=$_FILES['puc']['name'];
	$rcbook=$_FILES['rcbook']['name'];
	$ins=$_FILES['insurance']['name'];
    $oid = $_SESSION['oid'];

		$con=mysql_connect("localhost","root");
		$db=mysql_selectdb("project");
		if($db)
			echo "Database selected successfully";
		else
			echo "Database not selected";

		$qry="insert into vehicle(vname, vno, brand, color, price, date, type, ftype, seat, photo, puc, rcbook, insurance, oid) values ('$name','$vno','$brand','$color','$price','$date','$type', '$ftype', '$seat', '$photo', '$puc', '$rcbook', '$ins', '$oid')";
		// $qry="insert into vehicle values ('swift','321','maruti','white','1000', '02-12-2023','car','diesel','5', 'car.jpg', 'puc.jpg', 'rcbk.jpg', 'insurance.jpg', 'dhruveshpatel@gmail.com');";
	   	$cmd=mysql_query($qry,$con);
		if($cmd)
		{
			move_uploaded_file($_FILES["photo"]["tmp_name"], "../owner_data/".$_FILES["photo"]["name"]);
			move_uploaded_file($_FILES["puc"]["tmp_name"], "../owner_data/".$_FILES["puc"]["name"]);
			move_uploaded_file($_FILES["rcbook"]["tmp_name"], "../owner_data/".$_FILES["rcbook"]["name"]);
			move_uploaded_file($_FILES["insurance"]["tmp_name"], "../owner_data/".$_FILES["insurance"]["name"]);
			// header("location:custlog.php");	
            echo "Data inserted";
		}
		else
		{
			echo "Record not";
		}
?>