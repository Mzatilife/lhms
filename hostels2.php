<?php

 require 'includes/config.inc.php';
 include('data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> View Hostels</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->



	<!-- css files -->
	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- css files -->
    <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="DataTables/Buttons-1.6.3/css/buttons.bootstrap4.min.css">




	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->


	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">









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

</nav><nav class="navbar navbar-expand-lg navbar-dark bg-info border-top">
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
        <ol class="breadcrumb bg-info mb-1 ">
                           <li class="breadcrumb-item"><a href="warden-home1.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Hostel_details</li>
                       </ol>
           
        </ul>
       
       
    </div>
       
  
    <div style="margin-left:35%;" id="navbarsExample08">
        <ul class="navbar-nav">
					
                    <li class="nav-item dropdown">
					 <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle" style="font-size:30px"></i> <?php echo $_SESSION['username']; ?>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <a class="dropdown-item" href="includes/logout.inc.php" style='font-weight:board;'> Logout</a>
                        
                    </div>
                </li>
				
        </ul>
    </div>
	</div>
</nav>  

</header>
<body>
	
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
									<a class="nav-link" href="vacate_rooms.php">vacate student</a>
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
			

<div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6">
                    <?php
                    if(isset($_POST['addhostel'])){
                    
                        if($error!=""){
                           
                                echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="text-center">'.$error.'</div>
                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                               
                                </button>
                              
                            </div>';
                        }else{
                            echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="text-center">'.$success.'</div>
                            
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                           
                            </button>
                          
                        </div>';

                        }
                        


                    }
                    ?>
                </div>
                
                </div>
                
            </div>
            
            <div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6">
                    <?php
                    if(isset($_POST['edit_h'])){
                    
                        if($error!=""){
                           
                                echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="text-center">'.$error.'</div>
                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                               
                                </button>
                              
                            </div>';
                        }else{
                            echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="text-center">'.$success.'</div>
                            
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                           
                            </button>
                          
                        </div>';

                        }
                        


                    }
                    ?>
               
            </div>
                
            </div>
            
        </div>
        <div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6">
                    <?php
                    if(isset($_POST['delete_h'])){
                    
                        if($error!=""){
                           
                                echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="text-center">'.$error.'</div>
                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                               
                                </button>
                              
                            </div>';
                        }else{
                            echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="text-center">'.$success.'</div>
                            
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                           
                            </button>
                          
                        </div>';

                        }
                        


                    }
                    ?>
               
            </div>
                
            </div>
            
        </div>
    
<div id="container" class="row justify-content-md-center">


<div class="row" style="width:95%;"> 
<div class="container-fluid mt-4 mb-3">

<div class="panel panel-default">
				
			
<div id="container" class="row justify-content-md-center">

	 <div class="card mb-4" style="width:95%">
				<div class="card-header">
					<i class="fas fa-table mr-1"></i>
					View hostels
				</div>
				<div class="card-body">
                <div class="table-responsive">
            <table class="table table-hover table-inverse  table-bordered table-center table-striped mt-2 border-top " id="example">
            <thead class="thread-inverse">
							<tr class="text-secondary">
                            <tr>
                        <th>Hostel ID</th>
                        <th>Hostel Name</th>
                        <th>Hostel type</th>
                        <th>Number of rooms</th>
                        <th>Number of Beds/room</th>
                        <th>Hostel capacity</th>
                        <th>Action</th>
                        
                        
                      
                    </tr>
                    </thead>
                    <tbody>
                       <?php 
                          
                            $search = "SELECT * FROM hostel WHERE archived=0";
                            $searchdb = mysqli_query($conn,$search);

                            while($row = mysqli_fetch_array($searchdb)){
                                $Capacity = $row['No_of_rooms'] * $row['No_of_beds'];

                                echo'<tr>
                                    <td>'.$row['Hostel_id'].'</td>
                                    <td>'.$row['Hostel_name'].'</td>
                                    <td>'.$row['Hostel_type'].'</td>
                                    <td>'.$row['No_of_rooms'].'</td>
                                    <td>'.$row['No_of_beds'].'</td>
                                    <td>'.$Capacity.'</td>
                                ';
                            

                        ?>
                        <td><button type="button" class="btn btn-info edit_h" id='<?php echo $row['Hostel_id'].'-'.$row['Hostel_name'].'-'.$row['Hostel_type'].'-'.$row['No_of_rooms'].'-'.$row['No_of_beds']?>' data-toggle="modal" data-target="#edit_h" >Edit<i class="fa fa-edit" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger delete_h" id='<?php echo $row['Hostel_id'].'-'.$row['Hostel_name']?>' data-toggle="modal" data-target="#delete_h">Delete<i class="fa fa-trash" aria-hidden="true"></i></button></td>
 				
					<?php
					}
					?>
                    </tbody>
            </table>
      
        </div>
        
    </div>
</div>
	

		<div class="banner-bottom">
		<div class="container-fluid">
					<div class="banner_bottom_agile_grids">
						<div class="row wthree_banner_bottom_right_grids pr-sm-3">
							
							<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
						</li>
						</div>
</div>
</section>
</div>
</div>

</main>
</div>
</div>

<!-- Button trigger modal -->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="edit_h" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 30px;font-weight:500;margin-left: 1em;">Edit Hostel Details</h5>
                    <button type="button"  class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="hostels2.php" method="post" name="editHostel" style="margin-left:40px; margin-right:40px; margin-bottom: 5%;">

            <div class="form-group" style="margin-top:2%;">
              <label style="font-size:25px" for="">Hostel id</label>
              <input type="text" readonly style="font-style:italic;font-size:25px"  name="hostel_id" id="hostel_id" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label style="font-size:25px"  for="">Name of hostel</label>
              <input type="text" style="font-style:italic;font-size:25px"name="hostelname" id="hostelname" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="error "  id="hostelnameErr"></div>
     
            <div class="form-group">
              <label style="font-size:25px"  for="">Hostel type</label>
              <input type="text" style="font-style:italic;font-size:25px"  name="type" id="type" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
                <div class="error "  id="typeErr"></div>
     
            
           
            <div class="form-group" >
              <label style="font-size:25px" for="">Number of Rooms</label>
              <input type="text" style="font-style:italic;font-size:25px" name="rooms" id="rooms" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="error "  id="roomsErr"></div>
            <div class="form-group">
              <label style="font-size:25px"  for="">Number of beds/room</label>
              <input type="text" style="font-style:italic;font-size:25px" name="beds" id="beds" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="error "  id="bedsErr"></div>
            
        
            <div class="modal-footer">
                <button type="button"  class="btn btn-secondary btn-lg" data-dismiss="modal">Close</button>
                <button type="submit" name="edit_h" class="btn btn-primary btn-lg ">Save</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div> 

<!-- Delete modal -->
<div class="modal fade" id="delete_h" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" style="font-size: 30px;font-weight:500;margin-left: 1em;">Delete Hostel Details</h5>
                    <button type="button"  class="close " data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">
            <form action="hostels2.php" method="post" name="deleteHostel" style="margin-left:40px; margin-right:40px; margin-bottom: 5%;">

            <div class="form-group" style="margin-top:2%;">
              <label style="font-size:25px" for="">Hostel id</label>
              <input type="text" readonly style="font-style:italic;font-size:25px"  name="D_HI" id="D_HI" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label style="font-size:25px"  for="">Name of hostel</label>
              <input type="text" style="font-style:italic;font-size:25px"name="D_HN" id="D_HN" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="error "  id="hostelnameErr"></div>
     
           
            <p style="font-size: 30px;font-weight:500;">Do want to delete hostel?</p>
        
            <div class="modal-footer">
                <button type="button"  class="btn btn-secondary btn-lg" data-dismiss="modal">No</button>
                <button type="submit" name="delete_h" class="btn btn-primary btn-lg ">Yes</button>
            </div>
            </form>
            </div>
        </div>
    </div>
</div>

<script>
	$('#edit_h').on('show.bs.modal', event => {
		var button = $(event.relatedTarget);
		var modal = $(this);
		// Use above variables to manipulate the DOM
		
	});
</script>
<script>
	$('#delete_h').on('show.bs.modal', event => {
		var button = $(event.relatedTarget);
		var modal = $(this);
		// Use above variables to manipulate the DOM
		
	});
</script>
<footer>
<div class="container-fluid ">
    <div class="row mt-2" style="">
        <div class="col-md-12 text-center jumbotron jumbotron-fluid bg-info" style="color:white; margin-bottom:0px; background-size:cover;background-repeat:no-repeat;">




		<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
            
        </div>
    </div>
</div>

</footer>
	</body>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> 
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/dataTables.buttons.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.bootstrap4.min.js"></script>
    <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.html5.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.print.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.colVis.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.colVis.js"></script>
    <script src="DataTables/Responsive-2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="DataTables/Responsive-2.2.5/js/responsive.bootstrap4.min.js"></script>

    <script src="js/nels.js"></script>
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'csv' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>

      


</html>
