<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("owner_header.php");



$Oid=$_SESSION['Oid'];
if(isset($_REQUEST['PMid']))
{
	$MID=$_REQUEST['PMid'];
	if(isset($_POST['Pay']))
	{
		
	$tdate=date("Y/m/d");

	
	$query="Update Maintenance_Bill set Status=1 where MB_ID='$MID'";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Payment successfull');";
			echo "window.location.href='owner_header.php';";
			echo "</script>";
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Nope');";
			echo "window.location.href='Paynow.php';";
			echo "</script>";
		}
	}
}

?>



   <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 class="mb-4 tm-section-title"><font color="black"><b>Maintenance Bill</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<br><br><br>
			<form action="" method="Post">
			
               <label for="date"><font color="black"><b> Maintenance Bill ID: </b><font></label><input name="MID" type="text" placeholder="Maintenance Bill" value="<?php echo $MID ?>" class="tm-input-admin" readonly /><br><br>
				 <label for="date"><font color="black"><b> Card Number: </b><font></label><input name="Card_no" type="text" placeholder="Card Number" class="tm-input-admin" required /><br><br>
				  <label for="date"><font color="black"><b> Name on the card: </b><font></label><input name="NameCard" type="text" placeholder="Name on the card" class="tm-input-admin" required /><br><br>
				   <label for="date"><font color="black"><b> Cvv Number: </b><font></label><input name="Cvv" type="password" placeholder="Cvv Number" class="tm-input-admin" required /><br><br>
				    <label for="date"><font color="black"><b> Expiry Date: </b><font></label>
					  <input name="Exdate" type="date" placeholder=""  class="tm-input-admin" required />
				 <br><br>
               <button type="submit"  name="Pay">Pay!</button>
              </form>
			  </div>
			  
        </div>
      </div>
     
      
  
  </body>
</html>