<?php
include './connect.php';
$check=$_POST['check'];
session_start();
$logid=$_SESSION['log'];

    
$a=implode($check, ",");

$foodid=$_POST['id'];
$date=$_POST['da'];
$time=$_POST['time'];
$time1=$_POST['time1'];

echo "dd".$date;
echo "dd".$time1;
echo "dd".$time;
$b="INSERT INTO `food_book`(`user_id`, `food_id`, `date`, `time`, `seat`,`time2`) VALUES ('$logid','$foodid','$date','$time','$a','$time1')";
mysqli_query($con, $b) or die(mysqli_error($con));
 echo "<script>alert('booking successful !!!!');window.location='bookfood.php' </script>"  ; 

?>

