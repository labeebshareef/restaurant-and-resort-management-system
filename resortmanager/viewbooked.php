<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Coffee and Pizza</title>

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
    width: 60%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
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
                 <li ><a href="resortmanagerhome.php">Home</a></li>
                  <li><a href="editdetails.php">Edit Details</a></li>
                 <li ><a href="rmviewroom.php">view room</a></li>
                 <li class="active"><a href="viewbooked.php">view booked</a></li>
                 <li ><a href="../logout.php">logout</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>

   
        <br><br><br><br><br><br><br><br>
<br>
<table style="width:70%" align="center"><caption><b>ROOM SPECIFICATIONS</b></caption>
            <th>ROOM TYPE</th>
            <th>ROOM SIZE</th>
            <th>PRICE</th>
            <th>DATE</th>
            <th>TIME</th>
            <th>REMOVE BOOKING</th>
           
           
  <?php
  include './connect.php';
  $q="SELECT * FROM `room_spec`";
  $r=  mysqli_query($con, $q)or die(mysqli_error($con));
  
 
  while($data=  mysqli_fetch_assoc($r))
  {
      $s="SELECT * FROM `room_book`";
  $t=  mysqli_query($con, $s)or die(mysqli_error($con));
      if ($data['book']=='1') 
          {
     $room=$data['room_id'];     
      
  ?>
            
            <tr><td><?php echo $data['room_type'];?></td>
                <td><?php echo $data['room_size'];?></td>
                <td><?php echo $data['r_price'];?></td>
                
              <?php while($data1=  mysqli_fetch_assoc($t))
                {
                 if ($data1['room_id']==$room) 
                 {  ?>
                 <td><?php echo $data1['date'];?></td>
                 <td><?php echo $data1['time'];?></td>
                <?php
                 }
                 else{}
                }
              ?>
             
                <td><a href="removebook.php?id=<?php echo $data['room_id'];?>" >remove</a></td>
            <?php
         }
         else{}
  }
  ?>
        </table>
 <br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
  </body>
  
     
<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2017 BeeB Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->