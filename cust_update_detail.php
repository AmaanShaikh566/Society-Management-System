<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("owner_header.php");
include("connect.php");
$Oid=$_SESSION['Oid'];

?>

  
	<?php 

if(isset($_POST['btnupdate']))
{
	
	
	$mno=$_POST['Contact'];
	$email=$_POST['Email'];
	$pwd=$_POST['pwd'];

	$gender=$_POST['gender'];
	
	
		
		$query="Update Owner_Details set Contact='$mno', Email='$email', Password='$pwd')";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Updated Successfully');";
			echo "window.location.href='cust_update_detail.php';";
			echo "</script>";
		}
	
}


?>
 <script type="text/javascript" src="D:\wamp64\www\SocietyManagementSystem\jquery-3.5.1.js"></script>
<script type="text/javascript">


	 $(document).ready(function()
        {
             $("form").css({"border-style":"solid","border-color":"white","width":"300px"});
        
        
        });
</script>
<style type="text/css">
	::placeholder
	{
		color: white;
	}

	input
	{

	border-style: groove;
	outline:none;
	background:none;
	color:white;
	font:size:18px;
	width:80%;
	float:left;
	margin:0 10px;
	margin-left: 23px;
	font-color:white;
}

	select
	{
	border-style: groove;
	
	outline:none;
	background:none;
	
	font:size:18px;
	width:80%;
	float:left;
	margin:0 10px;
	margin-left: 23px;
	
	color: gray;
	}

	textarea
	{
	border-style: groove;
	outline:none;
	background:none;
	color:white;
	font:size:18px;
	width:80%;
	float:left;
	height: 30px;
	margin:0 10px;
	size: 20px;
	margin-left: 23px;
	}

	

	

	button
	{
	border-style: groove;
	width:80%;
	background:none;
	border-style: groove;
	color:white;
	font-size: 18px;
	cursor: pointer;
	margin: 10px 0;
	margin-left: 23px;
	}

</style>

    
	  <section  class="tm-section-pad-top tm-parallax-2">
     <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 class="mb-4 tm-section-title"><font color="white"><br><br><b>My Details</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			<br>
               
					    <input name="Contact" type="text" placeholder="Contact Number" class="tm-input-admin" required /><br><br>
						<input name="Email" type="email" placeholder="Email" class="tm-input-admin" required /><br><br>
						<input name="Password" type="Password" placeholder="Password" class="tm-input-admin" required /><br><br>
				
               <button type="submit" class="btn tm-btn-submit" name="btnupdate">Update Details</button>
              </form>
			  </div>
			  
        </div>
      </div>
	  <?php
					$qur=mysqli_query($con,"select * from owner_details where Owner_ID='$Oid'");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='white'><table class='table table-bordered' border ='0px' style='background-color:rgba(0,0,0,0.5)'>
								
									
									
									
									
									
									
									
									
									
									
								</font>";
						while($q=mysqli_fetch_array($qur))
						{
							echo "<tr>";
							echo "<th>Owner ID:</th>";
							echo "<td>$q[0]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Owner Name:</th>";
							echo "<td>$q[1]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Gender:</th>";
							echo "<td>$q[2]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Register As:</th>";
							echo "<td>$q[3]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Flat Number:</th>";
							echo "<td>$q[4]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Contact Number:</th>";
							echo "<td>$q[5]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Email:</th>";
							echo "<td>$q[6]</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Password:</th>";
							echo "<td>$q[7]</td>";
							
							
						
							
							
							echo "</tr>";
						}
						echo "</table></center>";
					}else{
						echo "<h2>No Record Found</h2>";
					}
					
				?>
				
       <center><br><br><footer class="text-center small tm-footer">
          <p class="mb-0"><font color="red">
            <font color='red'>Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer></center>
    </section>
  
  </body>
</html>