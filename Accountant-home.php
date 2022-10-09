<?php
 require 'includes/config.inc.php';
 include('data.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Accountant Home</title>

	<!-- Meta tag Keywords -->
	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
	

	<!-- css files -->
	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->

	<script src="js/jquery.min.js"></script>
	
	<link rel="stylesheet" href="js/bootstrap.min.js">

</head>
	<!-- //css files -->


	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->


	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">

<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content"style="width:150%" >
				<div class="modal-header">
						<h5 class="modal-title">My profile</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
			<div class="modal-body">
				<div class="container-fluid">
						
<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy" enctype="multipart/form-data">
		<div class="row justify-content-md-center" >
              
            </div>
            <div class="col-md-12 card p-5 " style='margin-top:2em;'>
                
              <div class ='text-center ' style='border-radius:0px;'>
            <img src="./img/default.jpg" width='150' style='border-radius:200px;position:relative; margin-top:-4em; border-style: groove;'> 
       
            <div class ='mt-1' style='border-radius:0px;'>
                    <table class=" table dd table-hover">
                        <thead class=''> 
                            <tr>
                                <th>Profile</th>
								
                            </tr>
                        </thead>
                        <tbody>
						<tr>
								<td scope="row">Name:  <?php echo $_SESSION['fname2']." ".$_SESSION['lname2']; ?></td>
								
								
                                
                            </tr>
                            <tr>
								<td scope="row">Role:  <?php echo $_SESSION['username2']; ?></td>
								
								
                                
                            </tr>
							<tr>
                                <td scope="row">Phone Number: <?php echo $_SESSION['mob_no2']; ?></td>
                                
							</tr>
							<tr>
                                <td scope="row">Email : <?php echo $_SESSION['email12']; ?></td>
                                
							</tr>
							
							</tr>
							<tr>
							
							</tr>
                        </tbody>
                    </table>   
              </div>
            
              
            <div class="col-md-3">
                
                </div>


        </div>
</form>							

				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" style="width:150%">Update</button>
				<button type="button" class="btn btn-secondary" style="width:150%;">Change password</button>
			</div>
		</div>
	</div>
</div>

<script>
	$('#exampleModal').on('show.bs.modal', event => {
		var button = $(event.relatedTarget);
		var modal = $(this);
		// Use above variables to manipulate the DOM
		
	});
</script>

</div>

</head>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">

            <li class="nav-item active">
                <a class="nav-link display-4" href="#" style='font-weight: bolder;font-size:55px'><img src="logo2.png" width="150" dclass="img-logo">UNILIA LAWS CAMPUS </a>
            </li>
           
        </ul>
       
       
    </div>

</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-info border-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<div id="content">

<button class="btn btn-link btn-lg order-1 order-lg-1 "  style="font-weight:20px" id="sidebarToggle" href="#"><i class="fas fa-bars" style="color: white; font-size:large; cursor:pointer"></i></button>
              
              <span class="sr-only">Toggle Menu</span>
            </button>
       
            </div>
  <div class="collapse navbar-collapse justify-content-md-center"  style="margin-left:42%;" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">

            <li class="nav-item active">
				<a class="nav-link display-3" href="Accountant-home.php" style='font-weight:25px;font-size:27px'>ACCOUNTANT DASHBOARD</a>
				
				
            </li>
           
		</ul>
		<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->

<div class="topbar-divider d-none d-sm-block"></div>
  <li class="nav-item">
  <li class="nav-item dropdown">
   
	 
   <li class="nav-item dropdown no-arrow">
   <a class="nav-link dropdown-toggle " href="#"  id="payments" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	 <i class="fa fa-bell"  style="font-size:25px"></i><span class="badge badge-pill badge-danger count badge-counter"></span>
   </a>
					
					 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="notifications" >
					 <h2 class="dropdown-header bg-light text-center   " style="font-size:25px">Payments</h2>
					<div id="here"  style="font-size:25px">
					</div>
						 
					<h5 class="dropdown-footer bg-info text-center  m-0 ">
					<a class="nav-link m-0" href="payments.php"> 
					View all notifications
   </a>  
					</h5>
					
					 </div>
				   

   </li>
  

    <div style="margin-right:2%;" id="navbarsExample08">
        <ul class="navbar-nav">
					
                    <li class="nav-item dropdown">
					 <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle" style="font-size:30px"></i> <?php echo $_SESSION['username2']; ?>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <a class="dropdown-item" href="includes/logout.inc.php" style='font-weight:board;'> Logout</a>
                        
                    </div>
                </li>
				
        </ul>
    </div>
	</div>
</nav>
</header>


<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                       
                            <a class="nav-link" href="Accountant-home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">FEATURES</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manageP" aria-expanded="false" aria-controls="manageP">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" ></i></div>
									Manage payments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="manageP" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="payments.php">check payments</a>
									<a class="nav-link" href="balances.php1">Approved</a>
							
                                </nav>
							</div>
							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Preport" aria-expanded="false" aria-controls="Preport">
                                <div class="sb-nav-link-icon"><i class="fas fa-bed"></i></div>
									Payment report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Preport" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="payment_report.php">View report</a>
								
                                </nav>
							</div>
					
							
                          
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="midium">Logged in as: <?php echo $_SESSION['username']; ?></div>
						
						</div>
                </nav>
            </div>
			
			<div id="layoutSidenav_content">
			<main>



						<div class="banner-bottom" >
		<div class="container-fluid mt-5">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
			
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fab fa-cc-stripe" aria-hidden="true"></i>
								<?php $sql_get=mysqli_query ($conn," SELECT * FROM payments WHERE Is_approved=0 ");
							$count1 = mysqli_num_rows($sql_get);
					?>
								<h3><a href="payments.php">Payments</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count1;?></span>

							</div>
							<div class="mask">
								<a href="fullR.php?id=C"><img src="" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>

					<?php $sql_get=mysqli_query ($conn," SELECT * FROM student WHERE Is_delete=0");
					$count1 = mysqli_num_rows($sql_get);
					?>
					<a><div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid" href="students1.php"></a>
						<div class="view view3 view-tenth " >
							<div class="agile_text_box">
								<i class="fas fa-balance-scale" aria-hidden="true"></i>
								<h3><a class="nav-link" href="balances.php">Payment balances</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count1;?></span>

							</div>
                        
							<div class="mask">
	
							</div>
						</div>
					</div>
                    <?php $sql_get=mysqli_query ($conn," SELECT * FROM payments WHERE Is_approved=1 ");
					$count1 = mysqli_num_rows($sql_get);
					?>
					<a><div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid" href="students1.php"></a>
						<div class="view view4 view-tenth " >
							<div class="agile_text_box">
							<i class="fas fa-check" aria-hidden="true"></i>
								<h3><a class="nav-link" href="approvedP.php">Approved payments</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count1;?></span>

							</div></div></div>
		
		
<a><div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid" href="payment_report.php"></a>
						<div class="view view5 view-tenth " >
							<div class="agile_text_box">
							<i class="fas fa-table" aria-hidden="true"></i>
								<h3><a class="nav-link" href="payment_report.php">Payment report</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"></span>

							</div>
							
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		

	</div>
</div>


<br>
<br>



			<footer class=" navbar-dark bg-info" style="margin-top:60px; text-align:center">
			
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>
			</main>
</div>
</div>




</body>


	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> 
	<script src="web_home/js/snap.svg-min.js"></script>
	
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
	
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		
	</script>
	
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

	<script src="js/nels.js"></script>


</html>
