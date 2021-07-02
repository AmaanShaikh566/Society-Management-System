<!DOCTYPE html>
<?php
     session_start();
    include 'connect.php';
  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
    <link rel="stylesheet" href="slick/slick.css">
    <link rel="stylesheet" href="slick/slick-theme.css">
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <!--
	The Town
	https://templatemo.com/tm-525-the-town
	-->
    <style>
      
    
    </style>
  </head>
  <body> 
 <!-- Hero section -->
    <section id="hero" class="text-white tm-font-big tm-parallax">
      <!-- Navigation -->
      <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
          <div class="tm-next">
             
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="index.html#work">Amenities</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="ContactUs.html">Contact Us</a>
              </li>                    
            </ul>
          </div>        
        </div>
      </nav>
    <!-- Contact -->
    <section id="contact" class="tm-section-pad-top tm-parallax-2">
      <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 class="mb-4 tm-section-title">Login</h2>
                <div class="mb-5 tm-underline" style="justify-content: space-evenly; display: flex;">
                  <div class="tm-underline-inner"></div>
                </div>
            </div>
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="Login.php" method="POST">
			
                <input name="txtemail" type="email" placeholder="Username" class="tm-input" required /><br><br>
				 <input name="txtpwd" type="password" placeholder="Password" class="tm-input" required /><br><br>
               <button type="submit" class="btn tm-btn-submit" name="Login">Login</button>
              </form>
			  </div>
			  
        </div>
      </div>
	  <?php
        if(isset($_POST['Login']))
        {
        
		  $email=$_POST['txtemail'];
          $pwd=$_POST['txtpwd'];
          $res1=mysqli_query($con,"select * from admin_login where Username='$email' and Password='$pwd'");
	if(mysqli_num_rows($res1)>0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Admin Login Successfull');";
		echo "window.location.href='admin_dashboard.html';";
		echo "</script>";
                
	}
else{
	$res3=mysqli_query($con,"select * from Owner_Details where Email='$email' and Password='$pwd'");
			if(mysqli_num_rows($res3)>0)
			{
				$r3=mysqli_fetch_array($res3);
				$_SESSION['custid']=$r3[0];
				
				
					echo "<script type='text/javascript'>";
					echo "alert('Customer Login Successfull');";
					echo "window.location.href='Owner_Dashboard.php';";
					echo "</script>";
                               
				
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Check Your Email Id or Password');";
			echo "</script>";
			}
		
        }
        }?>
      <footer class="text-center small tm-footer">
          <p class="mb-0">
            Copyright & copy; 2020 Terms and Conditions Apply*</p>
        </footer>
    </section>
  
  </body>
</html>