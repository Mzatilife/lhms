<?php
require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>LHMS</title>
	
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
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->
	<!-- Button trigger modal -->
   
    
    <!-- Modal -->
    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style='z-index:100000;'>
		<div class="modal-dialog" role="document">
		  <div class="modal-content">
			<div class="modal-header">
			  <h5 class="modal-title" style='font-weight:board;'>Payment Details</h5>
			
			</div>
			<div class="modal-body w3l-form-group">
				<form action="#" method="post">
					<div class='form-group'>
					
					<label form="">Date Paid</label>
					<input type="date" class='form-control form-control-md b4-date_add' name="datepaid" id="" placeholder="Date of Transaction">
					</div>
					
				
				
					<form action="#" method="post">
						<div class='form-group'>
							<label>Bank</label>
							
							<select type="text" class="form-control form-control-md " name="bank" id="" placeholder="Bank"  >
									<option value="FDH Bank">FDH Bank</option>
									<option value="Standard">Standard Bank</option>
									
									</select>
							   
							</div>
					
				
					<form action="#" method="post">
					<div class='form-group'>
					<label form="">Transaction ID</label>
					<input type="text" class='form-control form-control-md ' name="transid" id="" placeholder="Transaction ID.">
					</div>
					<form action="#" method="post">
					<div class='form-group'>
					<label form="">Amount</label>
					<input type="" class='form-control form-control-md ' name="amount" id="" placeholder="Amount paid (MWK)">
					</div>
                </div>
    </form>

					
							<div class="modal-footer">
								
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" name='submit' class="btn btn-primary">Submit</button>
			
				</div>
				
	
		  </div>
		
	  </div>
	</div>
	
</head>

<body>
<!-- banner -->

			<div class="cd-radial-slider-wrapper">
			
	<!--Header-->
	<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link display-4" href="#" style='font-weight: bolder;font-size:34px'><img src="logo2.png" width="70" dclass="img-logo">UNILIA LAWS CAMPUS</a>
            </li>
          
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-info border-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
        <li class="nav-item active">
						<a class="nav-link" href="home1.php">Home <span class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="book-hostel.php">Book Hostel</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="contact1.php">File Complaints</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="message_user1.php">Complaint feedback</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['roll']; ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <a class="dropdown-item" href="includes/logout.inc.php"> Logout</a>
                        
                    </div>
                </li>
				
        </ul>
    </div>
</nav>	</div>
</header>
	<!--Header-->

<!-- services -->




<body>
			<h1><a class="navbar-brand" href="home.php"> <span class="display"></span></a></h1>	
<div class="container">
<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy" enctype="multipart/form-data">
		<div class="row justify-content-md-center" >
	
            <div class="col-md-12 card p-10 " style='margin-top:1em;'>
                
  	<h2 class="heading text-capitalize mb-sm-5 mb-4 " style='margin-top:1em;' > Boys Complex </h2>


			<section class="services py-5">
			<div class="row service-grids">
        <div class="container py-lg-5 py-3" >
		<div class="row service-grids">
			<div class="col-md-4 ">
			<div class="card bg-danger">
                <div class="card-body">
                    <h1 class="text-light">Thore</h1>
                </div>
                <div class="card-footer">
                    <nav class="nav justify-content-center">
                    
                      <a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                    </nav>
                  
                </div>


            </div>
				
                </div>
                <div class="col-md-4 ">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h1 class="text-light ">C. Nkhata</h1>
                        </div>
                        <div class="card-footer">
                            <nav class="nav justify-content-center">
                            
                              <a href="#" class="nav-link text-light" data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                            </nav>
                          
                        </div>
        
        
                    </div>
                        
                        </div>

                        <div class="col-md-4 ">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <h1 class="text-light">Brown-Lee</h1>
                                </div>
                                <div class="card-footer">
                                    <nav class="nav justify-content-center">
                                    
									<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                                    </nav>
                                  
                                </div>
                
                
                            </div>
                                
                                </div>


            </div>
            <div class="row service-grids mt-3 ">
                <div class="col-md-4 ">
                <div class="card bg-success">
                    <div class="card-body">
                        <h1 class="text-light">F. Chunga</h1>
                    </div>
                    <div class="card-footer">
                        <nav class="nav justify-content-center">
                        
						<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                        </nav>
                      
                    </div>
    
    
                </div>
                    
                    </div>
                    <div class="col-md-4 ">
                        <div class="card bg-info">
                            <div class="card-body">
                                <h1 class="text-light">C. Mghogho</h1>
                            </div>
                            <div class="card-footer">
                                <nav class="nav justify-content-center">
								<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                                </nav>
                              
                            </div>
            
            
                        </div>
                            
                            </div>
    
                            <div class="col-md-4 ">
                                <div class="card bg-secondary">
                                    <div class="card-body">
                                        <h1 class="text-light">A. Kaila</h1>
                                    </div>
                                    <div class="card-footer">
                                        <nav class="nav justify-content-center">
                                        
										<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                                        </nav>
                                      
                                    </div>
                    
                    
                                </div>
                                    
                                    </div>
                                    
                        
                </div>
				<div class="row service-grids mt-3 ">
                <div class="col-md-4 ">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h1 class="text-light">U. Chirwa</h1>
                    </div>
                    <div class="card-footer">
                        <nav class="nav justify-content-center">
                        
						<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                        </nav>
                      
                    </div>
    
    
                </div>
                    
                    </div>
                    <div class="col-md-4 ">
                        <div class="card bg-info">
                            <div class="card-body">
                                <h1 class="text-light">M. Nkhoma</h1>
                            </div>
                            <div class="card-footer">
                                <nav class="nav justify-content-center">
                                
								<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                                </nav>
                              
                            </div>
            
            
                        </div>
                            
                            </div>
    

	

</section>


<section class="services py-5">

                
  	<h2 class="heading text-capitalize mb-sm-5 mb-4 " > Others </h2>
			
                

			<section class="services py-5">
			<div class="row service-grids">
	
        <div class="container py-lg-5 py-3">
		<div class="row service-grids">
			<div class="col-md-4 ">
			<div class="card bg-danger">
                <div class="card-body">
                    <h1 class="text-light">B. John</h1>
                </div>
                <div class="card-footer">
                    <nav class="nav justify-content-center">
                    
					  <a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
					  
                    </nav>
				
                </div>


            </div>
				
                </div>
                <div class="col-md-4 ">
                    <div class="card bg-warning">
                        <div class="card-body">
                            <h1 class="text-light " style="font-weight:bold;">Old Library</h1>
                        </div>
                        <div class="card-footer">
                            <nav class="nav justify-content-center">
                            
                              <a href="#" class="nav-link text-light" data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                            </nav>
                          
                        </div>
        
        
                    </div>
                        
                        </div>

                        <div class="col-md-4 ">
                            <div class="card bg-success">
                                <div class="card-body">
                                    <h1 class="text-light">Rocks-Burgh</h1>
                                </div>
                                <div class="card-footer">
                                    <nav class="nav justify-content-center">
                                    
									<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                                    </nav>
                                  
                                </div>
                
                
                            </div>
                                
                                </div>


            </div>
            <div class="row service-grids mt-3 ">
                <div class="col-md-4 ">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h1 class="text-light">Mzembe</h1>
                    </div>
                    <div class="card-footer">
                        <nav class="nav justify-content-center">
                        
						<a href="#" class="nav-link text-light"  data-toggle="modal" data-target="#modelId">Fill Payment Details</a>
                        </nav>
                      
                    </div>
    
    
                </div>
                    
                    </div>
                  


		</div>
		</div>
</section>
<!-- services -->
    </div>
</body>
<footer class=" navbar-dark bg-info" style="margin-top:100px; text-align:center">
			
	<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
		</footer>	
	


<!-- footer -->

<!-- footer -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- banner js -->
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> <!-- Resource jQuery -->  
	<!-- //banner js --> 

	<!-- flexSlider --><!-- for testimonials -->
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