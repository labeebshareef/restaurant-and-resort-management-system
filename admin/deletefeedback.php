
<?php
include './connect.php';
$id=$_GET['id'];
$ss="delete from feedback where id1='$id'";
mysqli_query($con, $ss);
 echo "<script>alert('feedback deleted successfully!!!!');window.location='managefeedback.php' </script>"  ;
?>