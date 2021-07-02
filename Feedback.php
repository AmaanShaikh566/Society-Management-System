<!DOCTYPE html>
<?php
session_start();

include("connect.php");
include("owner_header.php");
$Oid=$_SESSION['Oid'];


?>
<html lang="en">
 <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Feedback</title>
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
<?php 

if(isset($_POST['FB']))
{
	
	
	$Fno=$_POST['Fno'];
	$Fbdesc=$_POST['Fbdesc'];
	
	
	
	
	

	
	
		
		$query="insert into feedback values('$Fno','$Fbdesc')";
		if(mysqli_query($con,$query))
		{
			echo "<script type='text/javascript'>";
			echo "alert('Sent successfully');";
			echo "window.location.href='Feedback.php';";
			echo "</script>";
		}
		else{
			echo "<script type='text/javascript'>";
			echo "alert('Process Failed');";
			echo "window.location.href='Feedback.php';";
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

   
  <body> 
 
	<section class="tm-section-pad-top tm-parallax-2">
     <div class="container tm-container-contact">
        <div class="row" style="justify-content: space-evenly">
            <div class="col-12" 
            style="display: flex; justify-content: center; flex-direction: column; align-items: center;">
                <h2 class="mb-4 tm-section-title"><font color="white"><b>Give Feedback/Complaint!</b></font></h2>
              
			
            <div class="col-sm-12 col-md-6 d-flex align-items-center tm-contact-item" style="justify-content: space-evenly">
			<form action="" method="Post">
			
               
				  <br><br>
			<select name="Fno" >
                 
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
				   <br><br><textarea  placeholder="Description..." name="Fbdesc"></textarea><br><br>
					  
               <button type="submit" class="btn tm-btn-submit" name="FB">Send!</button>
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