<?php
include './connect.php';
$id=$_GET['id'];
$ss="update login set status=1 where loginid='$id'";
mysqli_query($con, $ss);
 echo "<script>alert('approved... !!!!');window.location='adminapprove.php' </script>"  ;
?>
