<!DOCTYPE html>
<?php
session_start();
include("connect.php");
?>




<html lang="en">


<head>
	<title>CONTACT US</title>
	<link rel="stylesheet" type="text/css" href="ContactUss.css">
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
                  <a class="nav-link tm-nav-link" href="ContactUss.php">Contact Us</a>
              </li>                    
            </ul>
          </div>        
      
	<div class="title">
		<h1>CONTACT US</h1>
	</div>

	<div class="box">
		<form method="post" action="ContactUss.php">
			<input type="text" name="name" class="form-control" placeholder="Enter Your Name" required><br>
			<input type="text" name="ename" class="form-control" placeholder="Enter Your Email" required><br>
			<textarea name="message" class="form-control" placeholder="Message" rows="4" required></textarea><br>
			<input type="submit" name="ContactUss" class="form-control submit" value="SEND MESSAGE">

		</form>
	</div>


</body>
</html>

<?php 

if(isset($_POST['ContactUss']))
{
			$email=$_POST['ename'];
			$message=$_POST['message'];
			$to = $email;
			$subject = 'ORCHID SOCIETY';
			$mes= $message; 
			$headers = 'From:trippaamaan@gmail.com';

			if(mail($to,$subject,$mes,$headers))
			echo '<h1>SENT</h1>';
			else
			echo 'Fail';
			echo "<script type='text/javascript'>";
			echo "alert('Successfull Sent');";
			echo "window.location.href='index.html';";
			echo "</script>";
		}

?>