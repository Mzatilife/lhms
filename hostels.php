<?php
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
 require 'includes/config.inc.php';
 include('data.php');
 header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control:post-check=0, pre-check=0',false);
header("Pragma:no-cache");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Warden Home</title>

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
	<!-- //css files -->


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
                           <li class="breadcrumb-item active">Application_details</li>
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
            <script>
// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var hostelname = document.addHostel.hostelname.value;
    var type = document.addHostel.type.value;
    var rooms = document.addHostel.rooms.value;
    var beds = document.addHostel.beds.value;

    
   
    
	// Defining error variables with a default value
    var hostelnameErr= typeErr =roomsErr =  bedsErr  = true;
    
    // Validate name
    if(hostelname == "") {
        printError("hostelnameErr", "Please enter hostel name");
    } else {
        var regex = /^[[a-zA-Z_]+$/;                
        if(regex.test(hostelname) === false) {
            printError("hostelnameErr", "Please enter a valid Hostelname");
        } else {
            printError("hostelnameErr", "");
            hostelnameErr = false;
        }
    }
    if(type == "") {
        printError("typeErr", "Please select hostel type");
    } else {
        printError("typeErr", "");
        typeErr = false;
    }

    if(rooms == "") {
        printError("roomsErr", "Please enter Number of rooms");
    } else {
        var regex = /^[0-9]\d{1}$/;               
        if(regex.test(rooms) === false) {
            printError("roomsErr", "please enter more than 1 (01-10)");
        } else {
            printError("roomsErr", "");
            roomsErr= false;
        }
    }

    
    if(beds == "") {
        printError("bedsErr", "Please enter Number of beds");
    } else {
        var regex = /^[1-4]\d{0}$/;               
        if(regex.test(beds) === false) {
            printError("bedsErr", "please enter more than 1");
        } else {
            printError("bedsErr", "");
            bedsErr= false;
        }
    }
    
    

   
    // Validate gender
    
    
    // Prevent the form from being submitted if there are any errors
    if((hostelnameErr || typeErr|| roomsErr || bedsErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
    
       
        // Display input data in a dialog box before submitting the form
        
    }
};
</script>



            <div class="container-fluid mt-4 mb-3">

            <div class="panel panel-default">
							
						
<div id="container" class="row justify-content-md-center">

                 <div class="card mb-4" style="width:90%">
                            <div class="card-header">
                                <i class="fas fa-table mr-1 mb-0"></i>
                                ADD HOSTELS
                            </div>
                            <div class="card-body">
             
            <div class="container"  style="margin-top:2%;margin-bottom: 2%;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card shadow p-2" style="">
                <form action="hostels2.php" method="post" name="addHostel" onkeyup="return validateForm()" style="margin-left:40px; margin-right:40px; margin-bottom: 5%;">
                <h1 style="font-size: 55px;"class="lead display-5">Add Hostel</h1>
            
       
            <div class="form-group" style="margin-top:2%;">
              <label style="font-size:27px"for="">Name of hostel</label>
              <input type="text" style="font-size: 22px;font-style: italic;" name="hostelname" id="hostelname" class="form-control form-control-lg" placeholder="Enter Hostel name No white space" aria-describedby="helpId">
            </div>
            <div class="error "  id="hostelnameErr"></div>
     
            <div class="form-group">
                <div class="form-group">
                <label style="font-size:27px" for="">Select type of hostel</label>
                  
                </div>
                <div class="error "  id="typeErr"></div>
     
              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="hosteltype" value="Boys" id="type" checked> Boys 
                  </label>
                  <label class="form-check-label">
                      <input class="form-check-input ml-2" type="radio" name="hosteltype" value="Girls" id="" > Girls 
              </div>
            </div>
            <div class="form-group">
              <label style="font-size:27px"for="">Number of Rooms</label>
              <input type="text" style="font-size: 22px;font-style: italic;" name="hostelroom" id="rooms" class="form-control form-control-lg" placeholder=" Enter Number of rooms(--)" aria-describedby="helpId">
            </div>
            <div class="error "  id="roomsErr"></div>
            <div class="form-group">
              <label style="font-size:27px" for="">Number of beds/room</label>
              <input type="text" style="font-size: 22px;font-style: italic;"name="hostelbeds" id="beds" class="form-control form-control-lg" placeholder="Enter number of bed/room" aria-describedby="helpId">
            </div>
            <div class="error "  id="bedsErr"></div>
            <div class="text-center">
                <button type="submit" name='addhostel' class="btn-lg btn-info">Submit</button>
            </div>
        </form>
        </div>
        <div class="col-md-2">
            
            </div>
    </div>
</div>
</br>
</br></br></br></br>

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
			</div>
</div>
</section>
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
<!-- footer -->

<!-- js-scripts -->

	</body>
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> 
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> 
	<script defer src="web_home/js/jquery.flexslider.js"></script>
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
      <script>
        $(function () {
            
    //not go back
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
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
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	<script src="js/nels.js"></script>
<!-- //js-scripts -->

</html>
