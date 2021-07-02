<!DOCTYPE html>
<html lang="en">




<?php
session_start();
include("admin_header.php");
include("connect.php");
//auto number code start...
		$res1=mysqli_query($con,"select max(Owner_ID) from owner_details");
		$OID=0;
		while($r1=mysqli_fetch_array($res1))
		{
			$OID=$r1[0];
		}
		$OID++;
	//auto number code end...

?>

  
	<?php 

if(isset($_POST['btnregis']))
{
	
	$name=$_POST['txtname'];
	$Register_as=$_POST['Register_as'];
	$Fno=$_POST['Fno'];
	$mno=$_POST['Contact'];
	$email=$_POST['Email'];
	$pwd=$_POST['pwd'];

	$gender=$_POST['gender'];
	
	
		
		$query="insert into Owner_Details values('$OID','$name','$gender','$Register_as','$Fno','$mno','$email','$pwd')";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Registration Successfull');";
			echo "window.location.href='Owner_Details.php';";
			echo "</script>";
		}
	
}

if(isset($_REQUEST['dOid']))
{
	$OID=$_REQUEST['dOid'];
	$query="delete from Owner_details where Owner_ID='$OID'";
	if(mysqli_query($con,$query))
	{
		echo "<script type='text/javascript'>";
		echo "alert('Owner Details Deleted');";
		echo "window.location.href='Owner_Details.php';";
		echo "</script>";
	}
}
?>
<script type="text/javascript" src="D:\wamp64\www\SocietyManagementSystem\jquery-3.5.1.js"></script>
<script type="text/javascript">
	function showTables()
{  		
    var tbl = document.getElementById("showTbl"); 	
    	
    if(tbl.style.display = "none")   		
    {  			
		tbl.style.display = "inherit";  		
    }
	else {  			
		tbl.style.display = "none";  		
    }
}
	 $(document).ready(function()
        {
             $("form").css({"border-style":"solid","border-color":"white","width":"300px"});
             $("input").css({});
            $("th").css({"color":"black","background-color":"red"});
             $("tr").css({"color":"black","background-color":"white","border":"1px black"});
              $(".aa").css({"color":"red"});
        
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

	radio
	{
		color:white;
	}


	table
	{
		border-style:solid;
		border-color: white;
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
                <h2 class="mb-4 tm-section-title"><font color="white"><br><br><b>Owner/Tenants Details</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			<br>
                <input name="OID" type="text"  value="<?php echo $OID; ?>" class="tm-input-admin" readonly /><br><br>
				 <input name="txtname" type="text" placeholder="Name" class="tm-input-admin" required /><br><br>
				 <br>
				 <input type="radio" class="tm-input-admin" value="MALE" name="gender"  /><font color="white"> MALE

				<input type="radio" class="tm-input-admin" value="FEMALE" name="gender" /> FEMALE</font>
				 <br><br>
				   <select name="Register_as"  class="tm-input-admin" required><option value="0">---Registering As---</option>
				 <option>Owner</option>
				 <option>Tenant</option>
				 
				 </select><br><br>
					     <select name="Fno" class="tm-input-admin">
    <option value="0">--Select Flat Number--</option>
    <?php
    $res1=mysqli_query($con,"select * from flat_details");
    
	while($r1=mysqli_fetch_array($res1))
	{
	?>
	<option value="<?php echo $r1[0]; ?>"  ><?php echo $r1[0]; ?></option>
	<?php
	}
	?>
	</select><br><br>
					    <input name="Contact" type="text" placeholder="Contact Number" class="tm-input-admin" required /><br><br>
						<input name="Email" type="email" placeholder="Email" class="tm-input-admin" required /><br><br>
				 <input name="pwd" type="password" placeholder="Password" class="tm-input-admin" required /><br><br>
               <button type="submit" class="btn tm-btn-submit" name="btnregis">Add Details</button>
              </form>
			  </div>
			  <button style="color:red;" ID="showTable" onClick="showTables()" class="btn btn-primary">Show Table Records</button>
        </div>
      </div>
	  <?php
					$qur=mysqli_query($con,"select * from owner_details");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='black'><table id='showTbl' class='table table-bordered' border ='2px ' style='background-color:grey;display: none;'>
								<tr>
									<th>Owner ID</th>
									<th>Owner Name</th>
									<th>Gender</th>
									<th>Register As</th>
									<th>Flat Number</th>
									<th>Contact</th>
									<th>Email</th>
									
									
									<th>DELETE</th>
								</tr></font>";
						while($q=mysqli_fetch_array($qur))
						{
							echo "<tr>";
							echo "<td>$q[0]</td>";
							echo "<td>$q[1]</td>";
							echo "<td>$q[2]</td>";
							echo "<td>$q[3]</td>";
							echo "<td>$q[4]</td>";
							echo "<td>$q[5]</td>";
							echo "<td>$q[6]</td>";
							
							
							
						
							
							echo "<td><a href='Owner_Details.php?dOid=$q[0]' class='aa'>DELETE</a></td>";
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