<?php
session_start();
unset($_SESSION['cid']);
if(isset($_SESSION['cid'])){
    echo "Something went wrong. Not able to logout";
}else{
    header('location:../../../index.php');
}
?>