<html>
    <head>
        <title>Vehicle Details Webpage</title>
        <?php include '../vhead.php' ?>
        <link rel="stylesheet" href="vehlist.css">
    </head>
<body>
<?php
session_start();
$cid="dhruveshvaghasiya@gmail.com";
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
$qry="SELECT * FROM vehicle";
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
        $oid=$row[oid];
        $status=$row[status];
    ?>
    <?php 
    if($status){
        $stt="Vehicle Booked";
    }else{
        $stt="Vehicle not booked";
    }
    ?>
        <div class="container1">
                <div class="img">
                    <img src=" <?php echo "owner_data/".$photo; ?>" alt="image not found" width="500px" height="323px">
                </div> 
                <div class="vr1"></div>
                <div class="data">
                    <div class="vr2"></div>
                    <div class="name">
                        <h2><?php echo $name?></h2>
                        <a href="vehicle/vehicle details/vdata.php?vid=<?php echo $vid;?>"><p>View More Details...</p></a>
                    </div>
                    <div class="brand">
                        <h4>Brand</h4>
                        <h5><?php echo $brand?></h5>
                    </div>
                    <div class="vr3"></div>
                    <div class="color">
                        <h4>Color</h4>
                        <h5><?php echo $color?></h5>
                    </div>
                    <div class="price">
                        <h1>&#x20B9;<?php echo $price?>/day</h1>
                        <h5>Status: <?php echo $stt; ?></h5>
                        <p>Available till:- <?php echo $date?></p>
                        <a href="bookpay/bookpay.php?vid=<?php echo $vid;?>"><button>Rent Now</button></a>
                    </div>
                </div>
            </div>
            <br><br><br>
        </body>
        </html>
    <?php
    }
    include '../foot.php';
}
else
	echo "Query not run";
?>