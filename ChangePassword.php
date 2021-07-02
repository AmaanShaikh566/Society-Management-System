<!DOCTYPE html>
<?php
     session_start();
    include 'connect.php';
  ?>
  
  <?php
  if(isset($_POST['changepassword']))
{
	
	$opassword=$_POST['opassword'];
	$npassword=$_POST['npassword'];
	$confirm=$_POST['confirm'];
	$OID=$_SESSION['Oid'];
	if($_POST['confirm']!==$_POST['npassword'])
	{
		
			echo "<script type='text/javascript'>";
			echo "alert('Confirm Password doesn't match');";
			echo "window.location.href='Login.php';";
			echo "</script>";
	}
	else{
	
	
	$query="update Owner_Details set Password='$npassword' where Owner_ID='$OID'";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Password Changed successfully');";
			echo "window.location.href='Login.php';";
			echo "</script>";
		}
	}
}
	
	
	

  ?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Owner Dashboard</title>
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
 
       <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">              
        <div class="container">   
         
          </div>             
            
          <button class="navbar-toggler" type="button" data-toggle="collapse"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars navbar-toggler-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="cust_update_detail.html">Update Details</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="ViewMaintenanceBill.php">Pay Maintenance Bill</a>
              </li>
			  <li class="nav-item">
                  <a class="nav-link tm-nav-link" href="MaintenanceBillStatus.php">View Maintenance Bill</a>
              </li>
              
<li class="nav-item">
                  <a class="nav-link tm-nav-link" href="MaintenanceBillStatus.php">Notice Board</a>
              </li> 
<li class="nav-item">
                  <a class="nav-link tm-nav-link" href="Feedback.html">Send Feedback</a>
              </li> 
<li class="nav-item">
                  <a class="nav-link tm-nav-link" href="Logout.php">Logout</a>
              </li> 			  
            </ul>
          </div>        
        </div>
      </nav>
   <section id="cd" class="tm-section-pad-top tm-parallax-2">
     <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 class="mb-4 tm-section-title"><font color="black"><b>Change Password</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			
               <br><br>
               <br><br>
						<input name="opassword" type="password" placeholder="Old Password" class="tm-input-admin" required /><br><br>
				 <input name="npassword" type="password" placeholder="New Password" class="tm-input-admin" required /><br><br>
				 <input name="confirm" type="password" placeholder="Confirm Password" class="tm-input-admin" required /><br><br>
               <button type="submit" class="btn tm-btn-submit" name="changepassword">Change Password</button>
              </form>
			  </div>
			  
        </div>
      </div>
      <footer class="text-center small tm-footer">
          <p class="mb-0">
           Copyright & copy; 2020 Terms and Conditions Apply*  </p>
        </footer>
    </section>
  
  </body>
</html>