<?php 
session_start();
// $id=$_POST[name];
$id="maryhearn@gmail.com";
$_SESSION['cid']=$id;
if(isset($_SESSION['checkupdate'])){
    $id=$_SESSION['updatecid'];
    $_SESSION['cid']=$id;
}
$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from customer where cid='$id'";
$cmd=mysql_query($query,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $cid=$row[cid];
    $pwd=$row[pwd];
    $name=$row[cname];
    $cno=$row[cno];
    $date=$row[cbdate];
    $city=$row[c_city];
    $add=$row[cadd];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include '../../chead.php' ?>
    <link rel="stylesheet" href="cprofile.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>

<body>
    <div class="wrapper">
        <div class="left">
            <img src="image/alex.jpg" alt="user" width="200" height="200px">
            <h4><?php echo $name;?></h4>
        </div>
        <div class="right">
            <div class="info">
                <h3>
                    Customer Information
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="updateprofile.php?cid=<?php echo $cid;?>"><i class='fas fa-edit' style='font-size:24px'></i></a></h3>
                <div class="info_data">
                    <div class="data1">
                        <h4>Email id</h4>
                        <p><?php echo $cid;?></p>
                    </div>
                    <div class="data2">
                        <h4>Password</h4>
                        <p><?php echo $pwd;?></p>
                    </div>
                    <div class="data3">
                        <h4>Contact Number</h4>
                        <p><?php echo $cno;?></p>
                    </div>
                </div>
            </div>

            <div class="projects">
                <div class="projects_data">
                    <div class="data4">
                        <h4>birthdate</h4>
                        <p><?php echo $date;?></p>
                    </div>
                    <div class="data5">
                        <h4>City</h4>
                        <p><?php echo $city;?></p>
                    </div>
                    <div class="data6">
                        <h4> Address</h4>
                        <p><?php echo $add;?></p>
                    </div>

                    <center><a href="logout.php"><button>Logout</button></a></center>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<?php } ?>