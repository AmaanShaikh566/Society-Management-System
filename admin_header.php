<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
	 
</head>

<body>
    <center>
        <h3><b><font color="white" size="9px">WELCOME TO ADMIN DASHBOARD</font></b></h3>
    </center>

    <div class="menu-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="side-bar">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu">

            <div class="item">
                <a href="admin_header.php"><i class="fas fa-desktop"></i>Admin Dashboard</a>
            </div>

            <div class="item">

                <a class="sub-btn"><i class="fas fa-table"></i>Add Details<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="flat_details.php" class="sub-item">Flat Details</a>
                    <a href="Owner_Details.php" class="sub-item">Owner Details</a>
                    <a href="Maintenance.php" class="sub-item">Maintenance Bill</a>
					 <a href="Worker_Details.php" class="sub-item">Worker Details</a>
                    <a href="NoticeBoard.php" class="sub-item">Notice Board</a>
                   
                    
                </div>
            </div>
			
			<div class="item">

                <a class="sub-btn"><i class="fas fa-table"></i>View Details<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="ViewFlats.php" class="sub-item">Flat Details</a>
                    <a href="ViewOwners.php" class="sub-item">All Owner Details</a>
					<a href="ViewTenants.php" class="sub-item">All Tenants Details</a>
                    <a href="Maintenance_admin.php" class="sub-item">Maintenance Bill</a>
					<a href="ViewWorkerDetails.php" class="sub-item">Worker Details</a>
                    <a href="ViewNoticeBoard.php" class="sub-item">Notice Board</a>
                    <a href="ViewFeedback.php" class="sub-item">Feedbacks</a>
                </div>
            </div>
			
			<div class="item">

                <a class="sub-btn"><i class="fas fa-table"></i>Reports<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="Datewise_Maintenance.php" class="sub-item">Date-wise Maintenance Bill</a>
                    <a href="Datewise_Worker.php" class="sub-item">Date-wise Worker Salary</a>
					 <a href="Pending.php" class="sub-item">View Maintenance Pending Bills</a>
					  <a href="Paid.php" class="sub-item">View Paid Maintenance Bills</a>
                    
                    
                </div>
            </div>
			 <div class="item">
                <a href="Logout.php"><i class="fas fa-desktop"></i>Logout</a>
            </div>
                    
            </div>
        </div>
		
    </div>



    <script type="text/javascript">
        $(document).ready(function() {
            //jquery for toggle sub menus
            $('.sub-btn').click(function() {
                $(this).next('.sub-menu').slideToggle();
                $(this).find('.dropdown').toggleClass('rotate');
            });

            //jquery for expand and collapse the sidebar
            $('.menu-btn').click(function() {
                $('.side-bar').addClass('active');
                $('.menu-btn').css("visibility", "hidden");
            });

            $('.close-btn').click(function() {
                $('.side-bar').removeClass('active');
                $('.menu-btn').css("visibility", "visible");
            });
        });
    </script>