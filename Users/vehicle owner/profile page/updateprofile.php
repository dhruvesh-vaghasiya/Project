<?php 
session_start();
// $id=$_POST[name];
// $id="dhruveshpatel@gmail.com";
$id=$_SESSION['oid'];
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
    $role=$row[fpass];
?>

<html>
<head>
<link rel="stylesheet" href="profileupdate.css">
</head>
<body>
<form name="registration"  action="updatedatabase.php" method="post" onsubmit="return validateForm()" >
        <div class="heading"> 
            <h1>Update Customer Data</h1>
        </div>
        <!-- Main container for all inputs -->
        <div class="Container1">
            Name:
            <input type="text" placeholder="Enter your full name" name="name" value="<?php echo $name;?>">

            <br><br>
            <label class="cust">Number:</label>
            <input type="number" placeholder="Enter your number" name="cno" value="<?php echo $ono;?>">

          
            <label class="bdate">Birthdate:</label>
            <input type="date" placeholder="Enter your Birthdate" name="date" value="<?php echo $date;?>">

            <br><br>
            <label class="city">City:</label>
            <input type="text" placeholder="Enter your city" name="city" value="<?php echo $city;?>">

            <br><br>
            Username:
            <input type="email" placeholder="Enter Username" name="id" value="<?php echo $oid;?>">

            <br><br>
            <label class="pass">Password:</label>
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" value="<?php echo $pwd;?>">


            <br><br>
                 Address:
            <div class="add"> 
                <textarea name="add" placeholder="Enter your Address" value="<?php echo $add;?>" cols="63" rows="3"></textarea>
            </div> 
    
            <br><br>
                Role Model:
                <input type="text" placeholder="Enter your role model" name="role" value="<?php echo $role;?>" style="margin-left: 23px;">
            <div class="btn">
                <button type="submit" >Update</button></a>
            </div>
        </div>
    </form>
    <script src="js/validate_registdata.js"></script>
<?php } ?>
</body>
</html>