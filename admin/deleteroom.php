
<?php
include './connect.php';
$id=$_GET['id'];
$ss="delete from room_spec where room_id='$id'";
mysqli_query($con, $ss);
 echo "<script>alert('room deleted successfully!!!!');window.location='viewroomspec.php' </script>"  ;
?>