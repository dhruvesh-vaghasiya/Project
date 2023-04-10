<?php
session_start();
$aid=$_SESSION['aid'];
$id=$_POST['id'];
$pass=$_POST['pwd'];
$name=$_POST['name'];
$role=$_POST['role'];

// echo $oid." ".$name."  ".$num." ".$birth."  ".$city." ".$id." ".$pass." ".$add." ".$role;
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
$query="update admin set aid='$id', pwd='$pass', name='$name', fpass='$role' where aid='$aid'";
//$query="update owner set oid="dhruv123@gmail.com", pwd="Drv@123456", oname="Dhruv patel", ono="1122334455", obdate="02-12-2023", o_city="Anand", oadd="Mota bazaar", fpass="Jay shree Ram" where oid="dhruv@gmail.com" ";
$cmd=mysql_query($query,$con);
if($cmd){
    // echo "Profile data is updated";
    $_SESSION['updataid']=$id;
    $_SESSION['checkingupdate']=1;
    header("location:aprofile.php?un=".$_SESSION['updataid'].$_SESSION['checkingupdate']);
}
else{
echo "Query not run";
}
?>