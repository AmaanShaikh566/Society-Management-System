<!DOCTYPE html>
<?php
     session_start();
    include 'connect.php';
  ?>
<html lang="en">
<head>
	<meta charset="utf-8">
	 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="LoginPage.css">
	</head>
<body>
	           
            
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="index.html#work">Amenities</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="event.html">Events</a>
              </li> 
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="ContactUss.php">Contact Us</a>
              </li>                    
            </ul>
          </div>        
      
     
	<div class="login-box">
		<h1>Login</h1>
			<form action="LoginPage.php" method="POST">
		<div class="textbox">
			<i class="fa fa-user"></i>
			<input type="text" placeholder="Username" name= "txtemail" class="tm-input">
		</div>
		
		<div class="textbox">
			<i class="fa fa-lock"></i>
			<input type="password" name="txtpwd" placeholder="Password" class="tm-input">
		</div>

		<button type="submit" name="LoginPage"   class="btn" value="Sign In" >Sign In</button>
			</form>
			</div>
		
		<?php
        if(isset($_POST['LoginPage']))
        {
        
		  $email=$_POST['txtemail'];
          $pwd=$_POST['txtpwd'];
          $res1=mysqli_query($con,"select * from admin_login where Username='$email' and Password='$pwd'");
	if(mysqli_num_rows($res1)>0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Admin Login Successfull');";
		echo "window.location.href='admin_header.php';";
		echo "</script>";
                
	}
else{
	$res3=mysqli_query($con,"select * from Owner_Details where Email='$email' and Password='$pwd'");
			if(mysqli_num_rows($res3)>0)
			{
				$r3=mysqli_fetch_array($res3);
				$_SESSION['Oid']=$r3[0];
				
				
					echo "<script type='text/javascript'>";
					echo "alert('Customer Login Successfull');";
					echo "window.location.href='owner_header.php';";
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