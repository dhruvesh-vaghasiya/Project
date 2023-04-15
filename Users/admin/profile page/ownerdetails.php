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
$con=mysql_connect("localhost","root");
$db=mysql_select_db("project");
$query="select * from owner";
$cmd=mysql_query($query,$con);
while($row=mysql_fetch_array($cmd)){
    $oid=$row[oid];
    $name=$row[oname];
    $ono=$row[ono];
    $date=$row[obdate];
    $city=$row[o_city];
    $add=$row[oadd];
    $role=$row[fpass];
?>
    <tr>
        <td>
            <?php echo $oid;?>
        </td>
        <td>
            <?php echo $name;?>
        </td>
        <td>
            <?php echo $ono;?>
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
            <a href=""><button>Update</button></a>
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