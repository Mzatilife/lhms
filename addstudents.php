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
								<td scope="row">Name:  <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></td>
								
								
                                
                            </tr>
                            <tr>
								<td scope="row">Role:  <?php echo $_SESSION['username']; ?></td>
								
								
                                
                            </tr>
							<tr>
                                <td scope="row">Phone Number: <?php echo $_SESSION['mob_no']; ?></td>
                                
							</tr>
							<tr>
                                <td scope="row">Email : <?php echo $_SESSION['email']; ?></td>
                                
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

<nav class="navbar navbar-expand-lg navbar-dark bg-info border-top animated fadeIn py-2 sticky-top" style="background-color:transparent;" >
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tog" aria-controls="tog" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-lg-center" id="tog">
        
                    <ul class="navbar-nav " style="font-size: 15px;">
        
        
					<li class="nav-item">
						<a class="nav-link" href="warden-home1.php">Home <span class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="addstudents.php">Add Students</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="students1.php">View Students</a>
					</li>
					
                   
        
        
                    </ul>

                   
        
                </div>
        
        
				<ul class="navbar-nav " style=" font-size: 13px;">
			 		
				<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <a class="dropdown-item" href="includes/logout.inc.php" style='font-weight:board;'> Logout</a>
                        
                    </div>
                </li>
			 
			 </ul>

        
                
                    
        
                   
        
                   
                      
                       
                 
                    
        
                
        
        
            </nav>


</header>

<!--Header-->

    </body>

<h1><a class="navbar-brand" href="home.php"> <span class="display" ></span></a></h1>	

<div class="container">

  
    <div class="row">
    <div class="col-md-2">
            
            </div>
        <div class="col-md-8 p-5 card" >
            <div class="text-center">
                <h1 class="lead display-5">Add Student</h1>
            </div>
        <form action="students1.php" method="post" class="display-0">
            <div class="form-group">
              <label for="">Student ID</label>
              <input type="text" name="studentid" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
           
            <div class="form-group">
              <label for="">First Name</label>
              <input type="text" name="fname" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Last Name</label>
              <input type="text" name="lname" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <div class="form-group">
                <label for="">Gender</label>
                  
                </div>

              <div class="form-check form-check-inline">
                  <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="gender" value="Male" id="" checked> Male 
                  </label>
                  <label class="form-check-label">
                      <input class="form-check-input ml-2" type="radio" name="gender" value="Female" id="" > Female 
              </div>
            </div>
            <div class="form-group">
              <label for="">Mobile Number</label>
              <input type="text" name="mobnum" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="email" name="email" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>  
            <div class="form-group">
              <label for="">Department</label>
              <input type="text" name="dep" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="form-group">
              <label for="">Year</label>
              <input type="text" name="year" id="" class="form-control form-control-lg" placeholder="" aria-describedby="helpId">
            </div>
            <div class="text-center">
                <button type="submit" name='addstudents' class="btn btn-info">Submit</button>
            </div>
        </form>
        </div>
        <div class="col-md-2">
            
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
</body>

	<footer>
<div class="container-fluid ">
    <div class="row mt-2" style="">
        <div class="col-md-12 text-center jumbotron jumbotron-fluid bg-info" style="color:white; margin-bottom:0px; background-size:cover;background-repeat:no-repeat;">



		<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
            
        </div>
    </div>
</div>

</footer>
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

<!-- //js-scripts -->

</html>
