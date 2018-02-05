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
input[id="2"], select {
    width: 100%;
    padding: 30px 30px;
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
                  <li ><a href="bookfood.php">book food</a></li>
                  <li class="active"><a href="feedback.php">feedback</a></li>
                 <li ><a href="../logout.php">logout</a></li>
	        
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>

 <br><br><br><br><br><br><br><br>
        <h1 align=center><b><u>FEEDBACK</u></b></h1><br><br>
      
        <form method="POST" action="feedbackaction.php">
            <table align=center>
<tr></tr>
                <tr>
                    <td>Subject</td>
                    <td><input type="text" id="1" name="subject" placeholder="subject"></td>
                </tr>
                <tr>
                    <td>feedback</td>
                    <td><textarea name="feedback" id="2" placeholder="feedback" width="1200" style="width: 321px; height: 67px;"></textarea></td>
                </tr>
                <tr></tr>
                <tr></tr>
                <tr><td></td><td><input type="submit" value="submit"></td></tr>
                  </table>
        </form>

          <br><br><br><br>
      
       

<!-- Footer Starts -->
<div class="footer text-center spacer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
Copyright 2017 BeeB Creative Studio. All rights reserved.
</div>


<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
<div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title">Title</h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->    
</div>



<!-- jquery -->
<script src="assets/jquery.js"></script>

<!-- wow script -->
<script src="assets/wow/wow.min.js"></script>


<!-- boostrap -->
<script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>



</body>
</html>