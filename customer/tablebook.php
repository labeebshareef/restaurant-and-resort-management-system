<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>book room</title>

<!-- Google fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Josefin+Sans:600' rel='stylesheet' type='text/css'>

<!-- font awesome -->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<!-- bootstrap -->
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />

<!-- animate.css -->
<link rel="stylesheet" href="assets/animate/animate.css" />
<link rel="stylesheet" href="assets/animate/set.css" />
<link rel="stylesheet" href="assets/new.css" />
<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 30%;
}

td, th {
    
    text-align: left;
    padding: 5px;
}
input[id="1"], select {
    width: 100%;
    padding: 8px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 8px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #999999;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #999999;
}

</style>
</head>

<body>
<div class="topbar animated fadeInLeftBig"></div>

<!-- Header Starts -->
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home"><img src="images/logo.png" alt="logo"></a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right scroll">
                  <li ><a href="home.php">Home</a></li>
                  <li><a href="editdetails.php">Edit Details</a></li>
                  <li ><a href="customerbookroom.php">book room</a></li>
                  <li class="active"><a href="bookfood.php">book food</a></li>
                 <li ><a href="../logout.php">logout</a></li>
	        
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>


        <form method="POST" action="bookfoodaction.php">
             <!--start-->
             <br><br><br><br><br><br><br><br>
 <h1>Select your seat</h1>
     <?php
include './connect.php';
$id=$_GET['id'];
$date=$_GET['date'];
$time=$_GET['time'];
$time2=$_GET['time2'];

$str1="select * from food_book where date='$date' and time='$time' and time2='$time2'";
$result1=  mysqli_query($con, $str1);
if($data=  mysqli_fetch_assoc($result1))
{
    

//$str="select * from food_book where date='$date' and time='$time'";
//$result=  mysqli_query($con, $str);
//while($data1=  mysqli_fetch_assoc($result))
//{
$seat=$data['seat'];

$seat1=  explode(",", $seat);
$tseat=array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20);
$ac=array_diff($tseat, $seat1);
//print_r($ac);
foreach($ac as $seat2 ){
    $ab= $seat2;
 //  echo "<br>";
//   for($i=1;$i<21;$i++){
        
//      if($ab!=$i)
//     {
    ?>
 <div class="containerbus">
   
  <!--<div class="autobus">-->
     <div class="fila">
      <div class="seccion">
        <div class="asiento">
            <input type="checkbox" id="asiento<?php echo $ab;?>"  value="<?php echo $ab;?>" name="check[]"/>
          <label for="asiento<?php echo $ab;?>"><?php echo $ab;?></label>
        </div>
       
      </div>
     
     </div>
  </div>
  </div>
 <?php

}
 
    //$i++; 
  

}
//}
//}
//}
 else {
    


?>
 

 <div class="containerbus">
 
  <div class="autobus">

    <div class="fila">
      <div class="seccion">
        <div class="asiento">
            <input type="checkbox" value="1" id="asiento1" name="check[]"/>
          <label for="asiento1">1</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="2" id="asiento2" name="check[]" />
          <label for="asiento2">2</label>
        </div>
      </div>
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="3" id="asiento3" name="check[]" />
          <label for="asiento3">3</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="4" id="asiento4" name="check[]" />
          <label for="asiento4">4</label>
        </div>
      </div>
    </div>

    <div class="fila">
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="5" id="asiento5" name="check[]" />
          <label for="asiento5">5</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="6" id="asiento6" name="check[]" />
          <label for="asiento6">6</label>
        </div>
      </div>
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="7" id="asiento7" name="check[]" />
          <label for="asiento7">7</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="8" id="asiento8" name="check[]" />
          <label for="asiento8">8</label>
        </div>
      </div>
    </div>

    <div class="fila">
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="9" id="asiento9" name="check[]" />
          <label for="asiento9">9</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="10" id="asiento10" name="check[]" />
          <label for="asiento10">10</label>
        </div>
      </div>
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="11" id="asiento11" name="check[]" />
          <label for="asiento11">11</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="12" id="asiento12" name="check[]" />
          <label for="asiento12">12</label>
        </div>
      </div>
    </div>

    <div class="fila">
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="13" id="asiento13" name="check[]" />
          <label for="asiento13">13</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="14" id="asiento14" name="check[]" />
          <label for="asiento14">14</label>
        </div>
      </div>
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="15" id="asiento15" name="check[]" />
          <label for="asiento15">15</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="16" id="asiento16" name="check[]" />
          <label for="asiento16">16</label>
        </div>
      </div>
    </div>

    <div class="fila">
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="17" id="asiento17" name="check[]" />
          <label for="asiento17">17</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="18" id="asiento18" name="check[]" />
          <label for="asiento18">18</label>
        </div>
      </div>
      <div class="seccion">
        <div class="asiento">
          <input type="checkbox" value="19" id="asiento19" name="check[]" />
          <label for="asiento19">19</label>
        </div>
        <div class="asiento">
          <input type="checkbox" value="20" id="asiento20" name="check[]" />
          <label for="asiento20">20</label>
        </div>
      </div>
    </div>

   
  </div>
</div>
<?php
 }
 ?>
  
<!--end-->   
<center>
<table allign="center">
   
               <tr>
                    
                   <td><input type="hidden" name="da"  value="<?php echo $date;?>"></td>
                </tr>
                <tr>
                    
                    <td><input type="hidden" name="time" value="<?php echo $time;?>"></td>
                    <td><input type="hidden" name="time1" value="<?php echo $time2;?>"></td>
                </tr>
           
                <tr>
                    <td><input type="hidden" name="id" value="<?php echo $id;?>"></td>
                </tr>
                 <tr><td></td><td><input type="submit" value="submit"></td></tr>
                
                  <br><br><br><br><br><br><br><br>
                  </table>
</form>
</center>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>

<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2017 BeeB Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->