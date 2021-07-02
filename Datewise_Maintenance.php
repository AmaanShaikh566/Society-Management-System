<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include("admin_header.php");
include("connect.php");
if(isset($_POST['btnview']))
{
	$fdate=date("Y-m-d",strtotime($_POST['txtfdate']));
	$tdate=date("Y-m-d",strtotime($_POST['txttdate']));
}

?>
<script type="text/javascript" src="D:\wamp64\www\SocietyManagementSystem\jquery-3.5.1.js"></script>
<script type="text/javascript">
 $(document).ready(function()
        {
             $("form").css({"border-style":"solid","border-color":"white","width":"300px","margin-top":"60px"});
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
             
					<font color="white">	Select From Date </font>
						<input type="date"  name="txtfdate" value="<?php if(isset($fdate)){ echo $fdate; }else{ echo date("Y-m-d"); } ?>">
						
				
						<div class="col-md-12">
			<font color="white">		Select To Date </font>
						<input type="date" name="txttdate" value="<?php if(isset($tdate)){ echo $tdate; }else{ echo date("Y-m-d"); } ?>">
						
					
						<br/><br/>
						
								<button type="submit" class="site-btn" style="width:80%;"  name="btnview" >VIEW REPORT</button>
						
						
			    
              </form>
			  </div>
			  
        </div>
      </div>
	  <?php
	  if(isset($_POST['btnview']))
				{
					$qur=mysqli_query($con,"select * from Maintenance_Bill where M_date>='$fdate' and M_date<='$tdate'");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='black'><table class='table table-bordered' border ='1px' style='background-color:white'>
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
									<th>Status</th>
									
									
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
							if($q['Status']=="1")
							{
								echo "<td style='color:green;'>PAID</td>";
								
							}else if($q['Status']=="0")
							{
								echo "<td style='color:red;'>PENDING</td>";
								
							}
							
							
							
						
							
							
							echo "</tr>";
						}
						echo "</table></center>";
					}else{
						echo "<h2>No Record Found</h2>";
					}
				}
				?>
     <center><br><br> <footer class="text-center small tm-footer">
          <p class="mb-0"><font color="red">
            Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer></center>
    </section>
  
  </body>
</html>