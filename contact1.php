<?php
 require 'includes/config.inc.php';
 include('data.php');
 include('studSO.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Complaint portal</title>
   
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
   <link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
    <script src="js/jquery.min.js"></script>
	
	<link rel="stylesheet" href="js/bootstrap.min.js">

	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->


	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
   
</head>


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
                <a class="nav-link display-4" href="#" style='font-weight: bolder;font-size:55px'><img src="logo2.png" width="70" dclass="img-logo">UNILIA LAWS CAMPUS</a>
            </li>
          
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-info border-top">
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tog" aria-controls="tog" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-lg-center" id="tog">
        
                  
				<ul class="navbar-nav " style="font-size: 20px; margin-right:-8%; ">
					
					<li class="nav-item">
						<a class="nav-link " href="home1.php" ><i class="fas fa-home"></i>.Home&nbsp&nbsp </a>
					</li>
					<li class="nav-item  ">
						<a class="nav-link" href="book-hostel.php"><i class="fas fa-bed"></i>.BookHostel&nbsp&nbsp</a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link " href="contact1.php"><i class="fas fa-frown"></i>.Complaints&nbsp&nbsp<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="message_user1.php"><i class="fas fa-envelope"></i>.Feedback&nbsp&nbsp</a>
                    </li>
					<li class="nav-item">
						<a class="nav-link" href="notification.php"><i class="fas fa-bell"></i>.notice</a>
                    </li>
                   
        
                    </ul>

                   
        
                </div>

				<div style="margin-right:2%;" id="navbarsExample08">
        <ul class="navbar-nav">
				
                    <li class="nav-item dropdown">
					 <a class="nav-link dropdown-toggle" style="font-size: 18px;" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle" style="font-size:20px"></i> <?php echo $_SESSION['roll']; ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
					<a class="dropdown-item" href="#" style="font-size: 18px;font-weight:bold;" data-toggle="modal" data-target="#logout" > signout <i class="fas fa-sign-out-alt"></i></a>
					
                    </div>
                </li>
				
        </ul>
    </div>
	</div>
</nav>

   </div>
</header>
   <!--Header-->

<!-- //banner --> 
<body>



<div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6 mt-2">
                    <?php
                    if(isset($_POST['send'])){
                    
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
        <div class="container"  style="margin-top:25px; margin-bottom:25px;">
        <div class="row justify-content-center">
            <div class="col-md-9" >
                <div class="card shadow p-2" >
    <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  style="margin-left:25px; margin-right:25px;margin-top:25px;margin-bottom:25px">
    <h1 class="display-5 text-center">Complaint particulars</h1>

    <form action="#" method="post" id="msg">
           <div class="form-group "  >
             <label for="">Subject</label>
             <input type="text" name="subject" id="subject" class="form-control form-control-lg" placeholder="Subject here..." required="required" aria-describedby="helpId">
            
           </div>   
           
          
						<div class='form-group'>
							<label>Fault type</label>
							
							<select type="text" class="form-control form-control-lg" name="fault_type" id="fault_type" placeholder="fault_type " required="required" >
									<option value="electrical">Electrical</option>
                                    <option value="furniture">Furniture</option>
                                    <option value="plumber">Plumber</option>
									
									</select>
							   
							
					
           </div>  
           <div class="form-group">
             <label for="">Description</label>
             <textarea class="form-control form-control-lg" name="description" id="description" rows="5" placeholder='Type description here...' required="required"></textarea>
           </div> 

           <div class="text-center">
           <button type="submit" class="btn btn-info" name='send' id='send'>Submit</button>
           </div>
              
        </form>

    </div>
</div>
        

</div>
</div>
</div>
        

</div>


<!-- //contact -->
</body>

</script>


<footer>
<div class="container-fluid ">
    <div class="row mt-2" style="">
        <div class="col-md-12 text-center jumbotron jumbotron-fluid bg-info" style="color:white; margin-bottom:0px;  background-size:cover;background-repeat:no-repeat;">



		<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
            
        </div>
    </div>
</div>

</footer>

   <!-- js -->
   <script type="text/javascript" src="web_home/js/jquery-3.3.1.min.js"></script>
   <script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
   <!-- //js -->
   <script type="text/javascript" src="web_home/js/nels.js"></script>
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




</body>

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
			    <div class="modal-dialog" role="document">
			        <div class="modal-content">
			            <div class="modal-header">
						<p  style="font-size: 23px;font-weight:bold; text-align: center;">signout</p>
			                   
			            </div>
			            <div class="modal-body text-center">
						<p style="font-size: 23px;font-weight:500;">Are you sure you want to signout?</p>
			            </div>
			            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
			            <div class="modal-footer">
			                <button type="button" class="btn btn-secondary btn-md" data-dismiss="modal">No</button>
			                <button type="submit" name="logout" class="btn btn-primary btn-md">Yes</button>
			            </div>
			             </form>

			        </div>
			       
			    </div>
			</div>

<footer>
</html>
