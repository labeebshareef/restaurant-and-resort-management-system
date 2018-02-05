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
                <li ><a href="adminhome.php">Home</a></li>
                 <li ><a href="adminapprove.php">approves</a></li>
                 <li class="active"><a href="view.php">users</a></li>
                 <li ><a href="adminaddchef.php">chef register</a></li>
                 <li ><a href="resortmanagerreg.php">rm register</a></li>
	         <li ><a href="editroomspec.php">+rooms</a></li>
                 <li ><a href="editfood.php">+food</a></li>
                 <li ><a href="viewroomspec.php">view rooms</a></li>
                 <li ><a href="viewmenu.php">view food</a></li>
                 <li ><a href="addgallery.php">add IMG</a></li>
                  <li ><a href="deletegallery.php">delete IMG</a></li>
                 <li ><a href="managefeedback.php">feedbacks</a></li>
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

        <table style="width:70%" align="center">
            <caption><b>USERS</b></caption>
            <br><br>
            <th>NAME</th>
            <th>ADDRESS</th>
            <th>EMAIL</th>
            <th>DOB</th>
            <th>MOBILE NO</th>
            <th>GENDER</th>
  <?php
  include './connect.php';
  $q="SELECT * FROM `registration`";
  $r=  mysqli_query($con, $q)or die(mysqli_error($con));
  
  while($data=  mysqli_fetch_assoc($r))
  {
  ?>
            
            <tr><td><?php echo $data['r_name'];?></td>
                <td><?php echo $data['r_address'];?></td>
                <td><?php echo $data['r_email_id'];?></td>
                <td><?php echo $data['r_dob'];?></td>
                <td><?php echo $data['r_mobile_number'];?></td>
                <td><?php echo $data['r_gender'];?></td>
            </tr>
            <?php
  }
  ?>
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