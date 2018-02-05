<?php
session_start();
include './connect.php';
$a=$_POST["name"];
$b=$_POST["address"];
$c=$_POST["email"];
$d=$_POST["gender"];
$e=$_POST["dob"];
$f=$_POST["mobile"];
$g=$_POST["password"];
$id=$_SESSION['log'];
$r="UPDATE `login` SET `username`='$c',`password`='$g',`role`='chef',`status`='1',`edit`='1' WHERE `loginid`='$id'";

mysqli_query($con,$r) or die(mysqli_error($con));
$q="UPDATE `registration` SET `r_address`='$b',`r_name`='$a',`r_dob`='$e',`r_gender`='$d',`r_mobile_number`='$f',`r_email_id`='$c' WHERE `r_id`='$id'";
mysqli_query($con,$q) or die(mysqli_error($con));
echo "<script>alert('updated successfully.... !!!!');window.location='chefhome.php' </script>"  ;
?>

