<?php
include './connect.php';
$id=$_GET['id'];
$ss="UPDATE `room_spec` SET `book`='0' WHERE `room_id`='$id'";
mysqli_query($con, $ss);
$ff="DELETE FROM `room_book` WHERE `room_id`='$id'";
mysqli_query($con, $ff);  
echo "<script>alert('booking removed.... !!!!');window.location='viewbooked.php' </script>"  ;
?>
