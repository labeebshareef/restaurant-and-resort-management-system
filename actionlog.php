

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
include './connect.php';
$a=$_POST["a"];
$b=$_POST["password"];

$r="SELECT * FROM `login` WHERE username='$a' AND password='$b'";
$s=mysqli_query($con,$r) or die(mysqli_error($con));

if($f=mysqli_fetch_assoc($s))
{
   $ss=$f['loginid'];
   session_start();
        $_SESSION['log']=$ss; 
       
        
        
    
        $sd=$f['role'];
        $d=$f['status'];
        $e=$f['edit'];
        
        if($sd=='admin')
        {
          echo "<script>window.location='admin/adminhome.php' </script>"  ;
        }
        else if($sd=='customer' && $d=='1')
        {
           echo "<script>alert('welcome !!!!');window.location='customer/home.php' </script>"  ;  
        }
        else if($sd=='chef' && $d=='1')
        {
            if($e=='0')
            {
              echo "<script>alert('welcome chef !!!!');window.location='chef/chefregistration.php' </script>"  ;    
            }
         else 
             {
              echo "<script>alert('welcome chef !!!!');window.location='chef/chefhome.php' </script>"  ; 
             }
        }
         else if($sd=='manager' && $d=='1')
        {
              if($e=='0')
              {
              echo "<script>alert('welcome resort manager !!!!');window.location='resortmanager/editdetails.php' </script>"  ;  
              }
              else 
              { 
              echo "<script>alert('welcome resort manager !!!!');window.location='resortmanager/resortmanagerhome.php' </script>"  ;    
              }
        }
 else {
          echo "<script>alert('user not found !!!');window.location='login.php' </script>"  ;
      }
   
 }
        else
        {
            echo "<script>alert('user not found !!!');window.location='login.php' </script>"  ; 
       }






        
        ?>
    </body>
</html>
