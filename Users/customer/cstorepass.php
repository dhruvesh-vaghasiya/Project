<?php
    Session_start();
    $id=$_SESSION['emailid'];
    $npass=$_POST[npass];
	$cpass=$_POST[cpass];
    if($npass==$cpass){
        $con=mysql_connect("localhost","root");
        $db=mysql_selectdb("project");
        $query="update customer set pwd=$npass where cid='$id'";
        $cmd=mysql_query($query,$con);
        if($cmd){
            header("location:custlog.php");
        }
        else{
            echo "Query not run";
        }
    }
?>