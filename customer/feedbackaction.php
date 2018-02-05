<?php
include './connect.php';
session_start();
$ss=$_SESSION['log'];
$b=$_POST["subject"];
$c=$_POST["feedback"];
$z="INSERT INTO `feedback`(`id`, `subject`, `feedback`) VALUES ('$ss','$b','$c')";
mysqli_query($con, $z) or die(mysqli_error($con)) ;
echo "<script>alert('Feedback Submitted.... !!!!');window.location='home.php' </script>"  ;
?>