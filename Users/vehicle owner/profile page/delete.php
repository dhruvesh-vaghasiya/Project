<?php
$vid=$_GET['vid'];
echo $vid;
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
$qry="delete from vehicle where vid=$vid";
$cmd=mysql_query($qry,$con);
if($cmd){
    // echo "Records deleted successfully";
    header('location:oprile.php');
}else{
    echo "Records not deleted";
}
?>