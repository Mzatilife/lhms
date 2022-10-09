<?php
  require 'includes/config.inc.php';
  include('data.php');


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> complaints</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	
	

<!-- css files -->
<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- css files -->
<link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="DataTables/Buttons-1.6.3/css/buttons.bootstrap4.min.css">




<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->


<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">

		</style>
	
</head>

	<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link display-4" href="#" style='font-weight: bolder;font-size:54px'><img src="logo2.png" width="70" dclass="img-logo">UNILIA LAWS CAMPUS </a>
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
        <ol class="breadcrumb bg-info mb-1 ">
                           <li class="breadcrumb-item"><a href="warden-home1.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Replied_complaints</li>
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
                <div class="col-md-6 mt-2">
                    <?php
                    if(isset($_POST['reply'])){
                    
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
            <div class="col-md-3">
                
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
					STUDENT COMPLAINT DETAILS
				</div>
				<div class="card-body">
	<div class="table-responsive">
                <div class="table-responsive">
   <table id="comp" class="table table-hover table-inverse  table-bordered table-center table-striped mt-2 border-top" style="font-size:24px; align-content:center;">  

			<thead class="thread-inverse">
					<tr class="text-secondary">
					<th>#</th>
							<th>Registration #</th>
							<th>Hostel name</th>
							<th>Room #</th>
							<th>Subject </th>
							<th>Complaint</th>
							<th>Fault_type</th>
							<th >Date/Time</th>
							<th >status</th>

		</tr>
		</tr>
						</thead>
		<tbody>
				<?php
					$select = "SELECT * FROM messages WHERE Is_reply = 1 ";
					$sdb = mysqli_query($conn,$select);
					
					$number = 1;
					while($row = mysqli_fetch_array($sdb)){
					echo'	
					<tr>
					<td>'.$row['Message_id'].'</td>
					<td>'.$row['Student_id'].'</td>
					<td>'.$row['Hostel_name'].'</td>
					<td>'.$row['Room_No'].'</td>
					<td>'.$row['subject_h'].'</td>
					<td>'.$row['C_description'].'</td>
					<td>'.$row['Fault_type'].'</td>
					<td>'.$row['msg_dateTime'].'</td>
					';
					
				?>

					
<td><span  class="badge badge-pill badge-success"  style="border-radius:10%;font-size:20px;">Replied<i class="fas fa-reply"></i></td>
				
					<?php
					}
					?>

	</tbody>
	<tfoot>
					<thead class="thread-inverse">
							<tr class="text-secondary">

							<th>#</th>
							<th>Registration #</th>
							<th>Hostel name</th>
							<th>Room #</th>
							<th >Subject </th>
							<th>Complaint</th>
							<th>Fault_type</th>
							<th >Date/Time</th>
							<th >Status</th>
        </tfoot>

						</table>

			</div>
					</div>
				</div>
					
		</div>
		<!-- Main -->
	</div>
</div>
</div>
</div>

                            </div>
	
    
</body>
<section>
<!-- Modal -->
<div class="modal lg fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Reply</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
		
				<div class="row">
					<div class="col-md-6">
							<div class="form-group">
             					<label for="">Student ID</label>
            			 	<input type="text" name="studID" id="studID" class="form-control" readonly placeholder="ID here..." aria-describedby="helpId">
           						</div>
					</div>
					<div class="col-md-6">
						  
		 
  
		   <div class="form-group">
             <label for="">Student Name</label>
             <input type="text" name="studN" id="studN" class="form-control" readonly placeholder="Name here..." aria-describedby="helpId">
            
           </div> 

					</div>
					
				</div>
			
				<div class="form-group d-none">
             <label for="">message ID</label>
             <input class="form-control" name="msg" id="msg" rows="5" readonly placeholder='Type description here...'>
           </div> 

           <div class="form-group">
             <label for="">Description</label>
             <textarea class="form-control" name="repdes" id="" rows="5" placeholder='Type description here...'></textarea>
           </div> 

           <div class="text-center">
           <button type="submit" class="btn btn-info" name='reply'>Reply</button>
           </div>
				</form>
			</div>
			
		</div>
	</div>
</div>

</main>
</div>
</div>

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
</html>
<script type="text/javascript" src="web_home/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> 
	<script src="web_home/js/snap.svg-min.js"></script>
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	</script>
	<!-- //flexSlider --><!-- for testimonials -->

	<!-- start-smoth-scrolling -->
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			*/

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
<script>
          $(document).ready(function(){
               $('#comp').DataTable();
          });
          </script>
		  <script src="js/nels.js"></script>