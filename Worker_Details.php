<!DOCTYPE html>

<?php
session_start();

include("connect.php");
include("admin_header.php");
?>
<html lang="en" dir="ltr">
<?php
//auto number code start...
		$res1=mysqli_query($con,"select max(Worker_ID) from Worker_details");
		$WID=0;
		while($r1=mysqli_fetch_array($res1))
		{
			$WID=$r1[0];
		}
		$WID++;
	//auto number code end...

?>

 
	<?php 

if(isset($_POST['btnDetails']))
{
	
	$name=$_POST['txtname'];
	$Worker_Type=$_POST['Worker_Type'];
	$Holiday=$_POST['Holiday'];
	$mno=$_POST['Contact'];
	$Salary=$_POST['Salary'];
	$LastPaidDate=$_POST['LastPaidDate'];
	$tdate=date("Y/m/d");
	
	
	
		
		$query="insert into Worker_Details values('$WID','$Worker_Type','$name','$mno','$Holiday','$Salary','$LastPaidDate','1','$tdate')";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Details added Successfully');";
			echo "window.location.href='Worker_Details.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('Nope');";
			echo "window.location.href='Worker_Details.php';";
			echo "</script>";
		}
		
	
}

if(isset($_REQUEST['dWid']))
{
	$WID=$_REQUEST['dWid'];
	$query="delete from Worker_details where Worker_ID='$WID'";
	if(mysqli_query($con,$query))
	{
		echo "<script type='text/javascript'>";
		echo "alert('Details Deleted');";
		echo "window.location.href='Worker_Details.php';";
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
                <h2 class="mb-4 tm-section-title"><font color="white"><br><br><b>Workers Details</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			<br>
                <input name="WID" type="text"  value="<?php echo $WID; ?>" class="tm-input-admin" readonly /><br><br>
				 <input name="txtname" type="text" placeholder="Name" class="tm-input-admin" required /><br><br>
				 
				   <select name="Worker_Type"  class="tm-input-admin" required><option value="0">---Worker Type---</option>
				 <option>Watchman</option>
				 <option>Gardener</option>
				  <option>Liftman</option>
				  <option>Caretaker</option>
				 
				 </select><br><br>
					     
					    <input name="Contact" type="text" placeholder="Contact Number" class="tm-input-admin" required /><br><br>
						 <input name="Holiday" type="text" placeholder="No. of Holidays" class="tm-input-admin" required /><br><br>
						  <input name="Salary" type="text" placeholder="Salary" class="tm-input-admin" required /><br><br>
						   <input name="LastPaidDate" type="date" placeholder="Last Paid Date" class="tm-input-admin" required /><br><br>
						
               <button type="submit" class="btn tm-btn-submit" name="btnDetails">Add Details</button>
              </form>
			  </div>
			   <button style="color:red;" ID="showTable" onClick="showTables()" class="btn btn-primary">Show Table Records</button>
        </div>
      </div>
	  <?php
					$qur=mysqli_query($con,"select * from Worker_details");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='black'><table id='showTbl' class='table table-bordered' border ='1px' style='background-color:grey;display: none'>
								<tr>
									<th>Worker ID</th>
									<th> Worker Type</th>
									<th>Worker Name</th>
									<th>Contact</th>
									<th>Holidays</th>
									<th>Salary</th>
									<th>Last Paid Date</th>
									
									
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
							echo "<td>Rs.$q[5]</td>";
							echo "<td>$q[6]</td>";
							
							
							
						
							
							echo "<td><a href='Worker_Details.php?dWid=$q[0]' class='aa'>DELETE</a></td>";
							echo "</tr>";
						}
						echo "</table></center>";
					}else{
						echo "<h2><font color='white'>No Record Found</h2>";
					}
					
				?>
      <center><br><br><footer class="text-center small tm-footer">
          <p class="mb-0"><font color="red">
            Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer></center
    </section>
  
  </body>
</html>