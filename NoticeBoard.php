<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("admin_header.php");


?>
<html lang="en">
 
<?php 

if(isset($_POST['notice']))
{
	
	$Ntype=$_POST['Ntype'];
	
	$Ndesc=$_POST['Ndesc'];
	$Ndate=date("Y/m/d");
	
	
	
	

	
	
		
		$query="insert into Notice_Board values('$Ndate','$Ntype','$Ndesc')";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Details added successfully');";
			echo "window.location.href='NoticeBoard.php';";
			echo "</script>";
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Process Failed');";
			echo "window.location.href='NoticeBoard.php';";
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

   
  <body> 
 
	<section class="tm-section-pad-top tm-parallax-2">
     <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 style="margin-top: 120px;" class="mb-4 tm-section-title"><font color="white"><b>Add New Notice</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			
               
				 
				 <select name="Ntype"  class="tm-input-admin"><option value="0">---Select Info Type---</option>
				 <option>Urgent</option>
				 <option>Festival</option>
				 <option>Maintenance Bill</option>
				  <option>Suvichar</option>
				  <option>Others</option>
				 </select>
				 <br><br>
				   <textarea class="tm-input-admin" placeholder="Notice Board Description..." name="Ndesc"></textarea><br><br>
					  
               <button type="submit" class="btn tm-btn-submit" name="notice">Inform!</button>
              </form>
			  </div>
			  
        </div>
      </div>
      <footer class="text-center small tm-footer">
          <p class="mb-0"><font color="black">
            Copyright & copy; 2020 Terms and Conditions Apply*  </font></p>
        </footer>
    </section>
  
  </body>
</html>