<?php

include './connect.php';
$a=$_POST["foodname"];
$b=$_POST["category"];
$c=$_POST["price"];
$r="INSERT INTO `menu`(`food_name`, `category`, `price`) VALUES ('$a','$b','$c')";
mysqli_query($con,$r);
echo "<script>alert('food item added.... !!!!');window.location='chefeditfood.php' </script>"  ;
?>