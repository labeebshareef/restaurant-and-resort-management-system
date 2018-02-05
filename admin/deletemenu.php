<?php
include './connect.php';
$id=$_GET['id'];
$ss="delete from menu where food_id='$id'";
mysqli_query($con, $ss);
echo "<script>alert('food item deleted.... !!!!');window.location='viewmenu.php' </script>"  ;
?>
