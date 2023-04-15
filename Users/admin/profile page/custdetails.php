<html>
<head>
    <link rel="stylesheet" href="aprofile.css">
</head>
<body>
    <center>
    <table>
        <tr>
            <th>Email id</th>
            <th>Name</th>
            <th>Number</th>
            <th>Birth Date</th>
            <th>City</th>
            <th>Address</th>
            <th>Role Model</th>
            <th></th>
            <th></th>
        </tr>
<?php 
session_start();
$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from customer";
$cmd=mysql_query($query,$con);
while($row=mysql_fetch_array($cmd)){
    $cid=$row[cid];
    $name=$row[cname];
    $cno=$row[cno];
    $date=$row[cbdate];
    $city=$row[c_city];
    $add=$row[cadd];
    $role=$row[fpass];
?>
    <tr>
        <td>
            <?php echo $cid;?>
        </td>
        <td>
            <?php echo $name;?>
        </td>
        <td>
            <?php echo $cno;?>
        </td>
        <td>
            <?php echo $date;?>
        </td>
        <td>
            <?php echo $city;?>
        </td>
        <td>
            <?php echo $add;?>
        </td>
        <td>
            <?php echo $role;?>
        </td>
        <td>
            <a href="../../customer/profile page/updateprofile.php?cid=<?php echo $cid;?>"><button>Update</button></a>
        </td>
        <td>
            <a href=""><button>Delete</button></a>
        </td>
    </tr>
<?php } ?>
</table>
</center>
</body>
</html>