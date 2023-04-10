<?php 
session_start();
// $id=$_POST[name];
// $id="dhruveshpatel@gmail.com";
$id=$_SESSION['cid'];
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
    $role=$row[fpass];
?>

<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <center>
    <form action="updatedatabase.php" method="post">
    <table>
        <tr>
            <th>Email id</th>
            <td>
                <input type="text" value="<?php echo $cid;?>" name="id"required>
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>
                <input type="text" value="<?php echo $pwd;?>" name="pwd" required>
            </td>
        </tr>
        <tr>
            <th>Name</th>
            <td>
                <input type="text" value="<?php echo $name;?>" name="name"required>
            </td>
        </tr>
        <tr>
            <th>Contact Number</th>
            <td>
                <input type="text" value="<?php echo $cno;?>" name="cno" required>
            </td>
        </tr>
        <tr>
            <th>Birth Date</th>
            <td>
                <input type="text" value="<?php echo $date;?>" name="date" required>
            </td>
        </tr>
        <tr>
            <th>City</th>
            <td>
                <input type="text" value="<?php echo $city;?>" name="city" required>
            </td>
        </tr>
        <tr>
            <th>Address</th>
            <td>
                <input type="text" value="<?php echo $add;?>" name="add" required>
            </td>
        </tr>
        <tr>
            <th>Role Model</th>
            <td>
                <input type="text" value="<?php echo $role;?>" name="role" required>
            </td>
        </tr>
    </table>
    <input type="submit" name="update" value="Update">
</form>
</center>
</body>
</html>
<?php } ?>