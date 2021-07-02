<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("owner_header.php");
include("connect.php");
$Oid=$_SESSION['Oid'];
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
                <h2 class="mb-4 tm-section-title"><font color="white"><br><br><b>Maintenance Details</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
   <form action="" method="Post">
   <br><br>
			<select name="Fno" class="tm-input-admin">
                 
    <?php
    $res1=mysqli_query($con,"select Flat_No from Owner_Details where Owner_ID='$Oid'");
    
	while($r1=mysqli_fetch_array($res1))
	{
	?>
	<option value="<?php echo $r1[0]; ?>"  ><?php echo $r1[0]; ?></option>
	<?php
	}
	?>
	
	</select>
	 <button type="submit" class="btn tm-btn-submit" name="Generate">Generate Maintenance Bill</button>
    </form>
			  </div>
			  
        </div>
      </div>
   
   <?php
  
	 
	if(isset($_POST['Generate']))
	  
{
	$Fno=$_POST['Fno'];
					$qur=mysqli_query($con,"select * from Maintenance_Bill where Flat_No='$Fno' and Status='0'");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><br><center><font color='black'><table class='table table-bordered' border='1px' style='background-color:white'>
								<tr>
									
								</tr></font>";
						while($q=mysqli_fetch_array($qur))
						{
							echo "<tr>";
							echo "<th>Maintenance ID:</th>";
							echo "<td>{$q['MB_ID']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Electricity Bill:</th>";
							echo "<td>{$q['Electricity_Bill']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Water Bill:</th>";
							echo "<td>{$q['Water_Bill']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Cable Bill:</th>";
							echo "<td>{$q['Cable_Bill']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Cultural Funds:</th>";
							echo "<td>{$q['Cultural_Funds']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Extra Charges:</th>";
							echo "<td>{$q['Extra_Charges']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Total Bill:</th>";
							echo "<td>{$q['Total_Bill']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Date:</th>";
							echo "<td>{$q['M_Date']}</td>";
							echo "</tr>";
							echo "<tr>";
							echo "<th>Payment:</th>";
							
							
					
							
							echo "<td><a href='Paynow.php?PMid=$q[0]' class='aa'>Pay Now</a></td>";
							
							
							
							echo "</tr>";
						}
						echo "</table></center>";
					}else{
						echo "<center><font color='white'><h2>Yay!You have no Maintenance to pay as of now!</h2></font></center>";
					}
}

					
				?>
     
       <center><br><br><footer class="text-center small tm-footer">
          <p class="mb-0"><font color="red">
            <font color='red'>Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer></center>
    </section>
  
  </body>
</html>	