<?php

include './connect.php';
$a=$_POST["name"];
$b=$_POST["address"];
$c=$_POST["email"];
$d=$_POST["gender"];
$e=$_POST["dob"];
$f=$_POST["mobile"];
$g=$_POST["password"];
$r="INSERT INTO `login`(`username`, `password`, `role`, `status`) VALUES ('$c','$g','customer','0')";
mysqli_query($con,$r) or die(mysqli_error($con));
$w=mysqli_insert_id($con);
$q="INSERT INTO `registration`(`r_id`, `r_address`, `r_name`, `r_dob`, `r_gender`, `r_mobile_number`, `r_email_id`) VALUES ('$w','$b','$a','$e','$d','$f','$c')";
mysqli_query($con,$q) or die(mysqli_error($con));
 echo "<script>alert('registration successfull.....wait till approve !!!!');window.location='login.php' </script>"  ;
?>

