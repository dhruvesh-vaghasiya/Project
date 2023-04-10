<?php
session_start();
$cid="dhruveshvaghasiya@gmail.com";
$_SESSION['id']= 3;
$id = $_SESSION['id'];
// $id = $_POST['vid'];
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
$qry="SELECT * FROM vehicle WHERE vid=$id";
$cmd1=mysql_query($qry,$con);
if($cmd1)
{
    while($row=mysql_fetch_array($cmd1)){
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
                    <img src=" <?php echo "../../owner_data/".$photo; ?>" alt="image not found" width="500px" height="323px">
                </div> 
                <div class="vr1"></div>
                <div class="data">
                    <div class="vr2"></div>
                    <div class="brand">
                        <h4>Brand</h4>
                        <h3><?php echo $brand?></h3>
                    </div>
                    <div class="vr3"></div>
                    <div class="color">
                        <h4>Color</h4>
                        <h3><?php echo $color?></h3>
                    </div>
                    <div class="price">
                        <h1><?php echo $price?></h1>
                        <p>Available till:- <?php echo $date?></p>
                    </div>
                </div>
            </div>
            <center>
            <table>
                <tr>
                    <th>Number</th>
                    <td><?php echo $vno?></td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td><?php echo $type?></td>
                </tr>
                <tr>
                    <th>Fuel Type</th>
                    <td><?php echo $ftype?></td>
                </tr>
                <tr>
                    <th>Seat</th>
                    <td><?php echo $seat?></td>
                </tr>
                <tr>
                    <th>Brand</th>
                    <td><?php echo $brand?></td>
                </tr>
                <tr>
                    <th>Color</th>
                    <td><?php echo $color?></td>
                </tr>
                <tr>
                    <th>Rent Price</th>
                    <td><?php echo $price?></td>
                </tr>   
            </table><br><br><br>
        </center>
        </body>
        </html>
    <?php
    }
}
else
	echo "Query not run";
?>