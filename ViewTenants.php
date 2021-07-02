<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("admin_header.php");


?>
<html lang="en" dir="ltr">
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

 <body>
 <br><br><center><h3><font color="white">Tenants Details</font></h3></center>
 
	  
    
	  <?php
					$qur=mysqli_query($con,"select * from owner_details where Register_As='Tenant' order by Flat_No");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><br><br><center><font color='black'><table class='table table-bordered' border ='1px' style='background-color:white'>
								<tr>
									<th>Tenant ID</th>
									<th>Tenant Name</th>
									<th>Gender</th>
									<th>Register As</th>
									<th>Flat Number</th>
									<th>Contact</th>
									<th>Email</th>
									
									
									
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