<?php
include './connect.php';
$id=$_GET['id'];
$ss="delete from gallery where id='$id'";
mysqli_query($con, $ss);

 echo "<script>alert('image deleted....!!!!');window.location='adminhome.php' </script>"  ;
?>
