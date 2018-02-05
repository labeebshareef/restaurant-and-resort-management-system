<?php

include './connect.php';
$a=$_FILES['image']['name'];
move_uploaded_file($_FILES['image']['tmp_name'],"../images/".$a);
$r="INSERT INTO `gallery`(`image`) VALUES ('$a')";
mysqli_query($con,$r);
echo "<script>alert('image added.... !!!!');window.location='addgallery.php' </script>"  ;
?>