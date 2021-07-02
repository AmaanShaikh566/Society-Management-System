<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Owner Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
</head>

<body>
    <center>
         <h3><b><font color="white" size="9px">WELCOME OWNER</font></b></h3>
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
                <a href="owner_header.php"><i class="fas fa-desktop"></i>Owner Dashboard</a>
            </div>

            <div class="item">

                <a class="sub-btn"><i class="fas fa-table"></i>Details<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="cust_update_detail.php" class="sub-item">Update My Details</a>
                    <a href="PayMaintenanceBill.php" class="sub-item">Pay Maintenance Bill</a>
					 <a href="MaintenanceBillStatus.php" class="sub-item">View Maintenance Bill</a>
                    <a href="ViewNoticeBoardO.php" class="sub-item">Notice Board</a>
                    <a href="Feedback.php" class="sub-item">Give Feedbacks</a>
                    <a href="Logout.php" class="sub-item">Logout</a>
                </div>
            </div>
			 <div class="item">
                <a href="Logout.php"><i class="fas fa-desktop"></i>Logout</a>
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

</body>

</html>