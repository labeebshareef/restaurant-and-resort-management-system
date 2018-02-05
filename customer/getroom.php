<table>

<?php
$a=$_GET["q"];
$b=$_GET["x"];
echo $b;
include './connect.php';
$str="select * from room_spec where room_type='$a' and room_size='$b'";
$result=  mysqli_query($con, $str);
while($data=  mysqli_fetch_assoc($result))
{
?>
   
    <tr><td><?php echo $data['room_type']?></td><td><?php echo $data['room_size']?></td><td><?php echo $data['r_price']?></td></tr>
<?php } ?>
</table>


