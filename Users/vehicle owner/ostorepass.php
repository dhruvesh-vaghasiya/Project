<?php
    Session_start();
    $id=$_SESSION['emailid'];
    $npass=$_POST[npass];
	$cpass=$_POST[cpass];
    if($npass==$cpass){
        $con=mysql_connect("localhost","root");
        $db=mysql_selectdb("project");
        $query="update owner set pwd=$npass where oid='$id'";
        $cmd=mysql_query($query,$con);
        if($cmd){
            header("location:ownerlog.php");
        }
        else{
            echo "Query not run";
        }
    }
?>