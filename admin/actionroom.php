<?php

include './connect.php';
$a=$_POST["roomtype"];
$b=$_POST["roomsize"];
$c=$_POST["price"];
$r="INSERT INTO `room_spec`(`room_type`,  `room_size`,  `r_price`) VALUES ('$a','$b','$c')";
mysqli_query($con,$r);
 echo "<script>alert('room added !!!!');window.location='editroomspec.php' </script>"  ;
?>