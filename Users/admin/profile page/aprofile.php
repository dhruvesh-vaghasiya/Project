<?php 
session_start();
// $id=$_POST[name];
$id="dhruveshpatel2005@gmail.com";
$_SESSION['aid']=$id;
if(isset($_SESSION['checkingupdate'])){
    $id=$_SESSION['updataid'];
    $_SESSION['aid']=$id;
}
$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from admin where aid='$id'";
$cmd=mysql_query($query,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $aid=$row[aid];
    $pwd=$row[pwd];
    $name=$row[name];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>

    <div class="wrapper">
        <div class="left">
            <img src="alex.jpg" alt="user" width="200" height="200px">
            <h4><?php echo $name;?></h4>
        </div>
        <div class="right">
            <div class="info">
                <h3>
                    Admin Information
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="updateprofile.php"><i class='fas fa-edit'
                        style='font-size:24px'></i></a></h3>
                <div class="info_data">
                    <div class="data1">
                        <h4>Email id</h4>
                        <p><?php echo $aid;?></p>
                    </div>
                    <div class="data2">
                        <h4>Password</h4>
                        <p><?php echo $pwd;?></p>
                    </div>
                </div>

                <a href="custdetails.php"></a><button>Check Customer</button>
                <a href="ownerdetails.php"></a><button>Check Vehicle Owner</button>
            </div>
        </div>
    </div>
</body>
</html>
<?php } ?>