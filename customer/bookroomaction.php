<?php
include './connect.php';
session_start();
$ss=$_SESSION['log'];
 $id=$_POST['id'];
$a=$_POST["date"];
$b=$_POST["time"];

if ($ss== '') {
    echo "<script>alert('please login first');window.location='../login.php' </script>"  ;
}
else {
    $z="INSERT INTO `room_book`(`r_user_id`, `room_id`, `date`, `time`) VALUES ('$ss','$id','$a','$b')";
mysqli_query($con, $z);
$e="UPDATE `room_spec` SET `book`=1 where room_id='$id'";
mysqli_query($con, $e);
echo "<script>alert('booking successful.... !!!!');window.location='bookfood.php' </script>"  ; }
?>