<?php 
session_start();
// $id=$_POST[name];
// if(isset($_SESSION['oid'])){}
$id="dhruvpatel@gmail.com";
$_SESSION['oid']=$id;
if(isset($_SESSION['checkforupdate'])){
    $id=$_SESSION['updatedid'];
    $_SESSION['oid']=$id;
}
$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from owner where oid='$id'";
$cmd=mysql_query($query,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $oid=$row[oid];
    $pwd=$row[pwd];
    $name=$row[oname];
    $ono=$row[ono];
    $date=$row[obdate];
    $city=$row[o_city];
    $add=$row[oadd];
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
                    Owner Information
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="updateprofile.php"><i class='fas fa-edit'
                        style='font-size:24px'></i></a></h3>
                <div class="info_data">
                    <div class="data1">
                        <h4>Email id</h4>
                        <p><?php echo $oid;?></p>
                    </div>
                    <div class="data2">
                        <h4>Password</h4>
                        <p><?php echo $pwd;?></p>
                    </div>
                    <div class="data3">
                        <h4>Contact Number</h4>
                        <p><?php echo $ono;?></p>
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

                    <center><a href="../vehicle/vregist.php"><button>Add Vehicle</button></a>
                    <a href="logout.php"><button>Logout</button></a></center>

                </div>
            </div>
        </div>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>
<?php 
} 
session_start();
$oid=$_SESSION['oid'];
// $_SESSION['id']= 3;
// $id = $_SESSION['id'];
// $id = $_POST['vid'];
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
$qry="select * from vehicle where oid='$oid'";
$cmd1=mysql_query($qry,$con);
if($cmd1)
{
    while($row=mysql_fetch_array($cmd1)){
        $vid=$row[vid];
        $name=$row[vname];
        $vno=$row[vno];
        $brand=$row[brand];
        $color=$row[color];
        $price=$row[price];
        $date=$row[date];
        $type=$row[type];
        $ftype=$row[ftype];
        $seat=$row[seat];
        $photo=$row[photo];
    ?>
        <html>
        <head>
            <title>Vehicle Details Webpage</title>
            <link rel="stylesheet" href="vdate.css">
        </head>
        <body>
            <h2><?php echo $name?></h2>
            <p>Review Section</p>
            <div class="container1">
                <div class="img">
                    <img src=" <?php echo "../owner_data/".$photo; ?>" alt="image not found" width="500px" height="323px">
                </div> 
                <div class="vr1"></div>
                <div class="data">
                    <div class="vr2"></div>
                    <div class="brand">
                        <h4 class="h4">Brand</h4>
                        <h3><?php echo $brand?></h3>
                    </div>
                    <div class="vr3"></div>
                    <div class="color">
                        <h4 class="h4">Color</h4>
                        <h3><?php echo $color?></h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="updatevehicle.php?vid=<?php echo $vid;?>"><i class='fas fa-edit'
                        style='font-size:24px'></i></a>
                    </div>
                    <div class="price">
                        <h1>&#x20b9;<?php echo $price?>/day</h1>
                        <p>Available till:- <?php echo $date?></p>
                    </div>
                    <div class="delete">
                        <a href="delete.php?vid=<?php echo $vid;?>"><button>Delete</button></a>
                    </div>
                </div>
            </div>
            </body>
        </html>
    <?php
    }
}
else
	echo "Query not run";
?>