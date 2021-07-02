<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("admin_header.php");


?>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Notice Board</title>
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
   <br><br><center><h3><font color='white'><b>Feedbacks!</b></font></h3></center>
  <?php
					$qur=mysqli_query($con,"select * from Feedback order by flat_no asc LIMIT 10");
					if(mysqli_num_rows($qur)>0)
					{
						echo "<br><br><center><font color='white'><table border ='0px' style='background-color:rgba(0,0,0,0.5)'>
								
								";
						while($q=mysqli_fetch_array($qur))
						{
							echo "<tr>";
							echo"<td><marquee><font color='Yellow'>Feedback!</font></marquee></td>";
							echo "</tr>";
							echo "<tr>";
							
							echo "<th><font color='Pink'>$q[0] :</font></th>";
							
							
							echo "<td>$q[1]</td>";
							echo "</tr>";
							
							
						
							
							
						}
						echo "</table></center></font>";
					}else{
						echo "<h2>No Record Found</h2>";
					}
					 

 
?>
   
 
      <footer class="text-center small tm-footer">
          <p class="mb-0"><font color="black">
            Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer>
    </section>
  
  </body>
</html>