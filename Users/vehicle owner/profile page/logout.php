<?php
session_start();
unset($_SESSION['oid']);
if(isset($_SESSION['oid'])){
    echo "Something went wrong. Not able to logout";
}else{
    header('location:../../../home.php');
}
?>