<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];

date_default_timezone_set('Asia/Kolkata');
$o=getdate();
$d=$o['year']."-".$o["mon"]."-".$o["mday"];
$t=$o['hours'].":".$o["minutes"].":".$o["seconds"];

$con= mysqli_connect("localhost","root","aman.parmar2311","ioe");
if($con){
    echo "connected";
}
echo (mysqli_error($con));
mysqli_query($con,"INSERT INTO comments VALUES('$name','$email','$phone','$message','$d','$t')");
echo (mysqli_error($con));

header("location: index.php");

?>