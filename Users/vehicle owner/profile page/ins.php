<?php 
$vid=4;
$oid="dhruv@gmail.com";
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
$qry="select * from vehicle where vid=$vid AND oid='$oid'";
$cmd=mysql_query($qry,$con);
$num=mysql_num_rows($cmd);
if($num==0){
    echo "Please enter correct id";
}
while($row=mysql_fetch_array($cmd)){
    $ins=$row[insurance];
?>

<?php }

$file = '../owner_data/'.$ins;
$filename = '../owner_data/'.$ins;
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename. '"');
header('Content-Transfer-Encoding: binary');
@readfile($file);
?>