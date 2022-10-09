<?php
 require 'includes/config.inc.php';
 include('data.php');
 include('signout.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Warden Home</title>

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
								<td scope="row">Name:  <?php echo $_SESSION['fname1']." ".$_SESSION['lname1']; ?></td>
								
								
                                
                            </tr>
                            <tr>
								<td scope="row">Role:  <?php echo $_SESSION['username']; ?></td>
								
								
                                
                            </tr>
							<tr>
                                <td scope="row">Phone Number: <?php echo $_SESSION['mob_no1']; ?></td>
                                
							</tr>
							<tr>
                                <td scope="row">Email : <?php echo $_SESSION['email1']; ?></td>
                                
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
				<a class="nav-link display-3" href="warden-home1.php" style='font-weight:30px;font-size:29px'>WARDEN DASHBOARD</a>
				
				
            </li>
           
		</ul>
		<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->

<div class="topbar-divider d-none d-sm-block"></div>
  <li class="nav-item">
  <li class="nav-item dropdown">
   
	 
   <li class="nav-item dropdown no-arrow">
   <a class="nav-link dropdown-toggle " href="#"  id="getnoti" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	 <i class="fa fa-bell"  style="font-size:25px"></i><span class="badge badge-pill badge-danger count2 badge-counter"></span>
   </a>
					
					 <div style="border-radius: 7px;" class="dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="notifications" >
					 <p class="dropdown-header bg-info text-center">Complaint notifications</p>
					<div id="there"  style="font-size:23px;font-style: italic;">
					</div>
						 
					<p style="bottom: 0px;font-size: 30;" class="dropdown-footer bg-info text-center  m-0 mb-0 ">
					<a class="nav-link m-0" href="message_hostel_manager1.php"  style="font-size:25px"> 
					View all notifications
   </a>  
</p>
					
					 </div>
				   

   </li>
  

    <div style="margin-right:2%;" id="navbarsExample08">
        <ul class="navbar-nav">
				
                    <li class="nav-item dropdown" >
					 <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle" style="font-size:30px"></i> <?php echo $_SESSION['username']; ?></a>
                    <div class="dropdown-menu"aria-labelledby="dropdown07XL">
					<a class="dropdown-item" href="changePass.php" style="font-size: 22px;font-weight:bold;"  >settings<i class="fas fa-user-key-alt"></i></a>
					<a class="dropdown-item" href="#" style="font-size: 22px;font-weight:bold;" data-toggle="modal" data-target="#logout" > signout <i class="fas fa-sign-out-alt"></i></a>
					
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
                       
                            <a class="nav-link" href="warden-home1.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt" style="font-size: 20px" ></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">FEATURES</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#managestudents" aria-expanded="false" aria-controls="managestudents">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" style="font-size: 20px" ></i></div>
									Manage students
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="managestudents" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="students.php">View/delete</a>
									<a class="nav-link" href="vacate_rooms.php">Allocated students</a>
									<a class="nav-link" href="archive.php">vacated students</a>
                                </nav>
							</div>
							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#managehostels" aria-expanded="false" aria-controls="managehostels">
                                <div class="sb-nav-link-icon"><i class="fas fa-bed" style="font-size: 20px" ></i></div>
									Manage hostels
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="managehostels" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="hostels.php">Add hostels</a>
									<a class="nav-link" href="hostels2.php">View Hostels</a>
									<a class="nav-link" href="availableR.php">Available rooms</a>
									<a class="nav-link" href="fullR.php">Full rooms</a>
									<a class="nav-link" href="emptybeds.php">Vacant beds</a>
                                    <a class="nav-link" href="occupiedbeds.php">Occupied beds</a>
                                </nav>
							</div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#complaints" aria-expanded="false" aria-controls="complaints">
                                <div class="sb-nav-link-icon"><i class="fas fa-frown" style="font-size: 20px" ></i></div>
									Complaints
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="complaints" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="message_hostel_manager1.php">View/reply</a> 
									<a class="nav-link" href="replied.php">View replied</a>
									
                                </nav>
							</div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#faults" aria-expanded="false" aria-controls="faults">
                                <div class="sb-nav-link-icon"><i class="fas fa-envelope" style="font-size: 20px" ></i></div>
									Mail faults
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="faults" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="electrician.php">Electrical flt</a>
									<a class="nav-link" href="furniture.php">Furniture flt</a>
									<a class="nav-link" href="plumber.php">Plumbing flt</a>
                                </nav>
							</div>

							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reports" aria-expanded="false" aria-controls="reports">
                                <div class="sb-nav-link-icon"><i class="fas fa-table" style="font-size: 20px" ></i></div>
									Reports
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="reports" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
									<a class="nav-link" href="student_report.php">Student report</a>
									<a class="nav-link" href="hostel_report.php">Hostel report</a>
                                    <a class="nav-link" href="complaint_report.php">Complaint_report</a>
                                </nav>
							</div>
							
							
                          
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            
					</div>
					</div>
                    <div class="sb-sidenav-footer" >
                        <div class="midium">Logged in as: <?php echo $_SESSION['username']; ?></div>
						
						</div>
                </nav>
            </div>
			
			<div id="layoutSidenav_content">
			<main>
<div class="container-fluid mt-4 mb-9">
<div class="row" style="margin-right: 10px;">
<div class="col-md-3">
			<div class="card ">
				
				<div class="card-body bg-info text-center">
			<a href="hostels.php" class="card-link"><i class="fas  fa-plus-circle     "></i>
			<p>Add Hostel</p>
			</a>
				</div>
				
			</div>		
	
		</div>


		<div class="col-md-3">
			<div class="card ">
				
				<div class="card-body bg-info text-center">
			<a href="hostel_report.php" class="card-link"><i class="fas fa-table   "></i>
			<p>Hostel report</p>
			</a>
				</div>
				
			</div>		
	
		</div>
		<div class="col-md-3">
			<div class="card ">
				
				<div class="card-body bg-info text-center">
			<a href="student_report.php" class="card-link"><i class="fas  fa-table"></i>
			<p>Student report</p>
			</a>
				</div>
				
			
				</div>
				</div>		
			<div class="col-md-3">
			<div class="card ">
				
				<div class="card-body bg-info text-center">
				<a href="complaint_report.php" class="card-link"><i class="fas  fa-table"></i>
			<p>Complaint report</p>
			</a>
				</div>
				</div>
				</div>
				</div>
</br>


						<div class="banner-bottom" >
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					<div class="col-lg-3 col-sm-6 banner_bottom_right_grid" style='border-radius:4px;'>
						<div class="view view-tenth">
							<div class="agile_text_box">
							<?php $sql_get=mysqli_query ($conn," SELECT * FROM student_application WHERE App_status=0");
							$count1 = mysqli_num_rows($sql_get);?>
								<i class="fas fa-archive" aria-hidden="true"></i>
								<h3><a class="nav-link" href="archive.php"class="responsive" alt="">Vaccated</a></h3>
								<span class="badge badge-danger" id="count" style="border-radius:50%;position:relative;top:-10px;"><?php echo $count1;?></span>

								
							</div>
							<div class="mask">
			
							</div>
						</div>
					</div>
					<?php $sql_get=mysqli_query ($conn," SELECT * FROM messages WHERE is_reply=0 ");
					$count = mysqli_num_rows($sql_get);
					?>
					<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
							
								<i class="fas fa-inbox" aria-hidden="true"></i>
								<h3><a class="nav-link" href="message_hostel_manager1.php">Student<br>Complaints</a></h3>
								<span class="badge badge-danger" id="count" style="border-radius:50%;position:relative;top:-10px;"><?php echo $count;?></span>

							</div>

						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-bed" aria-hidden="true"></i>
								<?php $sql_get=mysqli_query ($conn," SELECT * FROM room WHERE Is_full=1");
							$count1 = mysqli_num_rows($sql_get);
					?>
								<h3><a href="FullR.php">Full Rooms</a></h3>
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
								<i class="fas fa-users" aria-hidden="true"></i>
								<h3><a class="nav-link" href="students.php">Students</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count1;?></span>

							</div>
							<div class="mask">
	
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>


<br>
<br>

<div class="banner-bottom">
	
		<div class="container-fluid">
			<div class="banner_bottom_agile_grids">
				<div class="row wthree_banner_bottom_right_grids pr-sm-3">
					
				<div class="col-lg-3 col-sm-6 mt-sm-0 mt-3 banner_bottom_right_grid">
						<div class="view view1 view-tenth">
							<div class="agile_text_box">
							<?php $sql_get=mysqli_query ($conn," SELECT * FROM room WHERE Is_full=0");
							$count1 = mysqli_num_rows($sql_get);
					?>
								<i class="fas fa-bed" aria-hidden="true"></i>
								<h3> 	<a href="availableR.php">Available Rooms</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count1;?></span>
								
							</div>
							<div class="mask">

							</div>
						</div>
					</div>
				
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view2 view-tenth">
							<div class="agile_text_box">
							<?php $sql_get=mysqli_query ($conn," SELECT * FROM messages WHERE Is_mailed=0 AND deleted=0");
					$count5= mysqli_num_rows($sql_get);
					?>
								<i class="fas fa-envelope" aria-hidden="true"></i>
								<h3><a class="nav-link" href="fault.php">All faults</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count5;?></span>

								
							</div>
							<div class="mask">
								
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 mt-lg-0 mt-3 banner_bottom_right_grid">
						<div class="view view3 view-tenth">
							<div class="agile_text_box">
							<?php $sql_get=mysqli_query ($conn," SELECT * FROM student_application WHERE App_status=1");
							$count1 = mysqli_num_rows($sql_get);
					?>
								<i class="fas fa-times-circle" aria-hidden="true"></i>
								<h3><a href="vacate_rooms.php">Allocated Students</a></h3>
								<span class="badge badge-dark" id="count" style="border-radius:50%;position:relative;top:-10px;font-size:18px;"><?php echo $count1;?></span>

							</div>
							<div class="mask">
	
							</div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-sm-6 banner_bottom_right_grid">
						<div class="view view-tenth">
							<div class="agile_text_box">
								<i class="fas fa-user-circle" aria-hidden="true"></i>
								<h3><a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">My Profile</a></h3>
								<h3><a  href="changePass.php">Change password</a></h3>
								<div class="mask">
	
				</div>
					</div>
						</div>
							<div class="clearfix"> </div>
									</div>
									<div class="clearfix"> </div>
							</div>
					</div>
			</div>




			<footer class=" navbar-dark bg-info" style="margin-top:60px; text-align:center">
			
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>
			</main>
</div>
</div>

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
			    <div class="modal-dialog" role="document">
			        <div class="modal-content">
			            <div class="modal-header">
						<p style="font-size: 25px;font-weight:500;">signout</p>
			                   
			            </div>
			            <div class="modal-body text-center">
						<p style="font-size: 30px;font-weight:500;">Are you sure you want to signout?</p>
			            </div>
			            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
			            <div class="modal-footer">
			                <button type="button" class="btn btn-secondary btn-lg" data-dismiss="modal">No</button>
			                <button type="submit" name="logout" class="btn btn-primary btn-lg">Yes</button>
			            </div>
			             </form>

			        </div>
			       
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
