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

<!-- gallery -->
<link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">

<!-- favicon -->
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">


<link rel="stylesheet" href="assets/style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script>
function showdetail(str) {
   
    x=document.getElementById("roomtype").value;
     alert(x);
//    alert("str");
//    alert("x");
  if (str=="") {
    document.getElementById("keyskill").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("keyskill").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getroom.php?q="+str+"$x="+x,true);
  xmlhttp.send();
}
</script>
 
   
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 70%;
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
                  <li ><a href="home.php">Home</a></li>
                  <li><a href="editdetails.php">Edit Details</a></li>
                  <li class="active"><a href="customerbookroom.php">book room</a></li>
                  <li ><a href="bookfood.php">book food</a></li>
                  <li ><a href="feedback.php">feedback</a></li>
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
<table style="width:40%" align="center"><caption><b>BOOK ROOMS</b></caption>
                
            <!--
            <th>ROOM SIZE</th>
            <th>PRICE</th>
            <th>BOOK</th>-->
            
<form>
    <tr><td>Room Type</td><td><select id="roomtype" name="roomtype">
        <option value="">select</option>
        <option value="Junior Suite">Junior Suite</option>
        <option value="suite"> Suite</option>
        <option value="deluxe">Deluxe</option>
        <option value="standard">Standard</option>
            </select></td></tr>
    <tr><td>size</td><td>    <select id="room" name="room" onchange="showdetail(this.value)">
        <option value="">select</option>
        <option value="single">single</option>
        <option value="double">double</option>
        <option value="family">family</option>
            </select></td></tr>        
     
 
  
  <?php
  $date=date('Y-m-d');
  
  /*include './connect.php';
  $q="SELECT * FROM `room_spec`";
   * 
  $r=  mysqli_query($con, $q)or die(mysqli_error($con));
  
 while($data=  mysqli_fetch_assoc($r))
  {
       if($data['book']=='0')
      {
  ?>
            
            <tr><td><?php echo $data['room_type'];?></td>
                <td><?php echo $data['room_size'];?></td>
                <td><?php echo $data['r_price'];?></td>
                <td><a href="bookroomconfirm.php?id=<?php echo$data['room_id'];?>">BOOK</a></td>
              
            </tr>
            <?php
      }
  }*/
  ?>
            <!--<input type="date" max="<?php echo $date?>">-->
        </table>
<table id="keyskill">
    
</table>
  </body>
    <br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br>
<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2017 BeeB Creative Studio. All rights reserved.
</div>
<!-- # Footer Ends -->