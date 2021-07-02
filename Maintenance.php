<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("admin_header.php");
include("connect.php");
//auto number code start...
		$res1=mysqli_query($con,"select max(MB_ID) from Maintenance_Bill");
		$MID=0;
		while($r1=mysqli_fetch_array($res1))
		{
			$MID=$r1[0];
		}
		$MID++;
	//auto number code end...
	
	

?>

 
	<?php
	if(isset($_POST['MCBill']))
{
	
	$MID=$_POST['MID'];
	
	$Electricity=$_POST['Electricity'];
	$Water=$_POST['Water'];
	$Cable=$_POST['Cable'];
	$Cultural=$_POST['Cultural'];
	$Extra=$_POST['Extra'];
	$Total=$_POST['Total'];
	$Fno=$_POST['Fno'];
	$Total=($Electricity+$Water+$Cable+$Cultural+$Extra);
	
	$tdate=date("Y/m/d");

	
		
		
		$query="insert into Maintenance_Bill values('$MID','$Fno','$Electricity','$Water','$Cable','$Cultural','$Extra','$Total','$tdate','0')";
		if(mysqli_query($con,$query))
		{
			
			echo "<script type='text/javascript'>";
			echo "alert('Maintenance Bill Updated');";
			echo "window.location.href='Maintenance.php';";
			echo "</script>";
			
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Process Unsucessfull');";
			echo "window.location.href='Maintenance.php';";
			echo "</script>";
		}
	
	
}
	

if(isset($_REQUEST['dMid']))
{
	$MID=$_REQUEST['dMid'];
	$query="delete from Maintenance_Bill where MB_ID='$MID'";
	if(mysqli_query($con,$query))
	{
		echo "<script type='text/javascript'>";
		echo "alert('Maintenance Bill Deleted');";
		echo "window.location.href='Maintenance.php';";
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
                <h2 class="mb-4 tm-section-title"><font color="white"><br><br><b>Maintenance Bill</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			<br>
                <input name="MID" type="text" placeholder="Maintenance ID" value="<?php echo $MID; ?>" class="tm-input-admin" readonly /><br><br>
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
					     
				 <input name="Electricity" type="text" placeholder="Electricity Bill" class="tm-input-admin" required /><br><br>
				  <input name="Water" type="text" placeholder="Water Bill" class="tm-input-admin" required /><br><br>
				   <input name="Cable" type="text" placeholder="Cable Bill" class="tm-input-admin" required /><br><br>
				    <input name="Cultural" type="text" placeholder="Cultural Funds" class="tm-input-admin" required /><br><br>
					 <input name="Extra" type="text" placeholder="Extra Charges" class="tm-input-admin" required /><br><br>
					  
					  
               <button type="submit" class="btn tm-btn-submit" name="MCBill">Calculate Bill</button>
			    
              </form>
			  </div>
			  <button style="color:red;" ID="showTable" onClick="showTables()" class="btn btn-primary">Show Table Records</button>
        </div>
      </div>
	  <?php
					$qur=mysqli_query($con,"select * from Maintenance_Bill");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='black'><table id='showTbl' class='table table-bordered' border ='1px' style='background-color:grey;display: none;'>
								<tr>
									<th>Maintenance ID</th>
									<th>Flat_No</th>
									<th>Electricity Bill</th>
									<th>Water Bill</th>
									<th>Cable Bill</th>
									<th>Cultural Funds</th>
									<th>Extra Charges</th>
									<th>Total</th>
									<th>Date</th>
									
									<th>DELETE</th>
								</tr></font>";
						while($q=mysqli_fetch_array($qur))
						{
							echo "<tr>";
							echo "<td>$q[0]</td>";
							echo "<td>$q[1]</td>";
							echo "<td>Rs.$q[2]</td>";
							echo "<td>Rs.$q[3]</td>";
							echo "<td>Rs.$q[4]</td>";
							echo "<td>Rs.$q[5]</td>";
							echo "<td>Rs.$q[6]</td>";
							echo "<td>Rs.$q[7]</td>";
							echo "<td>$q[8]</td>";
							
							
						
							
							echo "<td><a href='Maintenance.php?dMid=$q[0]' class='aa'>DELETE</a></td>";
							echo "</tr>";
						}
						echo "</table></center>";
					}else{
						echo "<h2>No Record Found</h2>";
					}
					
				?>
     <center><br><br> <footer class="text-center small tm-footer">
          <p class="mb-0"><font color="red">
            Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer></center>
    </section>
  
  </body>
</html>