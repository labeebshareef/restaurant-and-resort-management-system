<?php
include './connect.php';
$id=$_GET['id'];
$ss="delete from login where loginid='$id'";
mysqli_query($con, $ss);
$rr="delete from registration where r_id='$id'";
mysqli_query($con, $rr);
 echo "<script>alert('deleted....!!!!');window.location='adminapprove.php' </script>"  ;
?>
