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
<link rel="stylesheet" href="regist.css">
</head>
<body>
<form name="registration"  action="updatedatabase.php" method="post" onsubmit="return validateForm()" >
        <div class="heading"> 
            <h1>Update Customer Data</h1>
        </div>
        <!-- Main container for all inputs -->
        <div class="Container1">
            Name:
            <input type="text" placeholder="Enter your full name" name="cname" value="<?php echo $name;?>">

            <br><br>
            <label class="cust">Number:</label>
            <input type="number" placeholder="Enter your number" name="cno" value="<?php echo $cno;?>">

          
            <label class="bdate">Birthdate:</label>
            <input type="date" placeholder="Enter your Birthdate" name="cbdate" value="<?php echo $date;?>">

            <br><br>
            <label class="city">City:</label>
            <input type="text" placeholder="Enter your city" name="c_city" value="<?php echo $city;?>">

            <br><br>
            Username:
            <input type="email" placeholder="Enter Username" name="cid" value="<?php echo $cid;?>">

            <br><br>
            <label class="pass">Password:</label>
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" value="<?php echo $pwd;?>">


            <br><br>
                 Address:
            <div class="add"> 
                <textarea name="cadd" placeholder="Enter your Address" value="<?php echo $add;?>" cols="63" rows="3"></textarea>
            </div> 
    
            <br><br>
                Role Model:
                <input type="text" placeholder="Enter your role model" name="role" value="<?php echo $role;?>" style="margin-left: 23px;">
            <div class="btn">
               	 <button type="submit" >Submit</button>
            </div>
        </div>
    </form>
    <script src="js/validate_registdata.js"></script>
<?php } ?>
</body>
</html>