<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("admin_header.php");


?>
<html lang="en" dir="ltr">

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


<?php 

if(isset($_POST['btnfdetails']))
{
	
	$Fno=$_POST['Fno'];
	$Fblock=$_POST['Fblock'];
	$Ftype=$_POST['Ftype'];
	$Fdesc=$_POST['Fdesc'];
	$FtotMem=$_POST['FtotMem'];
	
	
	
	

	
	$res2=mysqli_query($con,"select * from Flat_Details where Flat_No='$Fno'");
	if(mysqli_num_rows($res2)>0){
		echo "<script type='text/javascript'>";
		echo "alert('Flat Already Exists');";
		echo "window.location.href='Flat_Details.php';";
		echo "</script>";
	}else{
		
		$query="insert into Flat_Details values('$Fno','$Fblock','$Ftype','$Fdesc','$FtotMem')";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Details added successfully');";
			echo "window.location.href='Flat_Details.php';";
			echo "</script>";
		}
	}
	
	
}

if(isset($_REQUEST['dfid']))
{
	$Fno=$_REQUEST['dfid'];
	$query="delete from flat_details where Flat_No='$Fno'";
	if(mysqli_query($con,$query))
	{
		echo "<script type='text/javascript'>";
		echo "alert('FLat Details Deleted');";
		echo "window.location.href='Flat_Details.php';";
		echo "</script>";
	}
}



?>

	  
     <section  class="tm-section-pad-top tm-parallax-2">
     <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 class="mb-4 tm-section-title"><font color="white"><br><br><b>Flat Details</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly" >
			<form action="" method="Post" id="f" >
			<br>
                <input name="Fno" type="text" placeholder="Flat Number"  class="tm-input-admin" required /><br><br>
				 
				 <select name="Fblock"  class="tm-input-admin"  class="option" required><option value="0">---Select Flat's Block---</option>
				 <option>Block A</option>
				 <option>Block B</option>
				 <option>Block C</option>
				 
				 </select><br><br>
				 <select name="Ftype"  class="tm-input-admin" class="option" required><option value="0">---Select Flat's Type---</option>
				 <option>1BHK</option>
				 <option>2BHK</option>
				 <option>3BHK</option>
				 </select>
				 <br><br>
				   <textarea class="tm-input-admin" placeholder="Flat's Description..." name="Fdesc" ></textarea><br><br>
					  <input name="FtotMem" type="text" placeholder="Total Members" class="tm-input-admin"   required /><br><br>
					  
							<button type="submit" class="btn tm-btn-submit" name="btnfdetails" >Add Details</button>
						
              </form>
			  </div>
			  <button style="color:red;" ID="showTable" onClick="showTables()" class="btn btn-primary">Show Table Records</button>
        </div>
        
      </div>
	  <?php
					$qur=mysqli_query($con,"select * from flat_details");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='black'><table id='showTbl' class='table table-bordered' border ='2px'  style='background-color:grey; display: none; ' >
								<tr>
									<th>FLat Number</th>
									<th>Flat Block Number</th>
									<th>Flat Type</th>
									<th>Flat Description</th>
									<th>Total Members</th>
									
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
							
						
							
							echo "<td><a href='Flat_Details.php?dfid=$q[0]' class='aa'>DELETE</a></td>";
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