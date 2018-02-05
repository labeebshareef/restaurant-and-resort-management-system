<?php

include './connect.php';
$a=$_POST["image"];
$r="INSERT INTO `gallery`(`image`) VALUES ('$a')";
mysqli_query($con,$r);
?>