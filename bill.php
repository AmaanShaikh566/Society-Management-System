<?php
include("connect.php");
if(isset($_REQUEST['bMid']))
		{
			$MID=$_REQUEST['bMid'];
		}	
?>
<html>
<head>
</head>
<body onload="window.print();">
	
	<table border='1' align="center" width="80%">
		<tr>
			<td colspan="2" align="center">
		<br/>
			Orchid Housing Society<br/>
			27th Street, Koregaon Park, 
				   <br/>
			
			Pune(Maharastra)<br/>
			Pincode- 4411001
			</td>	
		</tr>
	</table>
	<table border='1' align="center" height="50%" width="80%">
		<tr>
			<td>Maintenance ID</td>
			<td>Flat No</td>
			<td>Total_Bill</td>
			
			
		</tr>
	<?php
		
		$qur=mysqli_query($con,"Select * from Maintenance_Bill where MB_ID='$MID'");
		while($q=mysqli_fetch_array($qur))
		{
			echo "<tr>";
			
			echo "<td><b>$q[0]</b></td>";
			echo "<td><b>$q[1]</b></td>";
			echo "<td><b>$q[7]</b></td>";
			
			$tot=$q[7];
			echo "</tr>";
			
		}
		
	?>
		<tr>
			<td colspan="3">This is system generated bill, No signature required.<br>
			</td>
			<td >Total Amount Rs.<b> <?php echo $tot; ?>/-</b></td>
		</tr>
	</table>
	
	<a href="MaintenanceBillStatus.php">BACK</a>
		
	
</body>

</html>