<?php

include './connect.php';

$c=$_POST["email"];
$g=$_POST["password"];
$r="INSERT INTO `login`(`username`, `password`, `role`, `status`) VALUES ('$c','$g','manager','1')";
mysqli_query($con,$r) or die(mysqli_error($con));
$w=mysqli_insert_id($con);
$q="INSERT INTO `registration`(`r_id`, `r_address`, `r_name`, `r_dob`, `r_gender`, `r_mobile_number`, `r_email_id`) VALUES ('$w','null','null','null','null','null','$c')";
mysqli_query($con,$q) or die(mysqli_error($con));
 echo "<script>alert('resort manager registered !!!!');window.location='resortmanagerreg.php' </script>"  ;
?>

