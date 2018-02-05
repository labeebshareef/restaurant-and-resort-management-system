<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>REGISTRATION</title>

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
<!-- cdn for modernizr, if you haven't included it already -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<!-- polyfiller file to detect and load polyfills -->
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
</script>
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
    width: 10%;
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

</style></head>
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
                   <li><a href="login.php">login</a></li>
                   <li class="active"><a href="registrationpage.php">register</a></li>
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->
    
        <?php
  $date=date('Y-m-d');?>
        
   
  
        <br><br><br><br><br><br><br><br>
        <h1 align=center><b>REGISTRATION</b></h1><br><br>
      
        <form method="POST" action="action.php">
            <table align=center>
                
                <tr>
                    <td>name</td>
                    <td><input type="text" id="1" name=name placeholder="name" required pattern="[A-Za-z]{3,50}"></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>email</td>
                    <td><input type="email" id="1" name=email placeholder="username@gamil.com" required></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>address</td>
                    <td><textarea name=address id="1" placeholder="address" required></textarea></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>Gender</td>
                    <td>male<input type="radio" name="gender" value="male">
                    female<input type="radio" name="gender" value="female"></td>
                </tr>
                <tr></tr>
                <tr>
                    <td>DOB</td>
                    <td><input type="date" id="1" name="dob" max="<?php echo $date?>" required> </td>
                </tr>
                <tr></tr>
                <tr>
                    <td>mobile no</td>
                    <td><input type="text" id="1" name="mobile" placeholder="mobile no" pattern="[7-9][0-9]{9}" required/></td>
                </tr>

                <tr><td></td></tr>
                 <tr>
                    <td>password</td>
                    <td><input type="password" id="1" name=password placeholder="password" required></td>
                </tr>
                 
               
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