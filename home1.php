<?php

 require 'includes/config.inc.php';
 include('studSO.php');
 include('data.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>LCHMS HOMEPAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>



<!--// Meta tag Keywords -->

<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

<!-- css files -->
<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->

<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<!-- testimonials css -->
<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->
<!-- //testimonials css -->

<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
<!-- //web-fonts -->

	<!-- //web-fonts -->

<!-- Modal -->
<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
} 	
return output;
}
</script>
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style='z-index:100000;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
	  <p  style="font-size: 23px;font-weight:bold; text-align: center;">Change password</p>
      
      </div>
	  <div class="modal-body">
        <form style="margin-left:60px; margin-right:60px; margin-bottom: 5%;" action="#" method="post">
		<div class='form-group d-none'>
		
		<label form="">First Name</label>
		<input type="" class='form-control form-control-md ' name="fname" id="" placeholder="<?php echo $_SESSION['fname']; ?>">
		</div>
		<form name="frmChange" method="post" action="" onsubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">

</tr>
<tr>
<td width="60%"><label>Current Password</label></td>
<td width="50%"><input type="password" name="currentPassword" class="form-control form-control-lg"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td width="50%"><label>New Password</label></td>
<td ><input style="width: 400px;" type="password" name="newPassword" class="form-control form-control-lg"/><span id="newPassword" class="required"></span></td>
</tr>
<td ><label>Confirm Password</label></td>
<td ><input width="60%" type="password" name="confirmPassword" class="form-control form-control-lg"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>

</tr>
</table>
</div>
<div class="modal-footer" >
				
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" name='changePass' class="btn btn-primary">Save</button>
					
		  </div>
</form>

		
							

			

			</div>
			

      </div>
    
  </div>
</div>

<!--Header-->
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class=" navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link display-4 justify-content-lg-center" href="home1.php" style='font-weight: bolder;font-size:46px;'><img src="logo2.png" width="70" dclass="img-logo">UNILIA LAWS CAMPUS </a>
            </li>
          
        </ul>
    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-info border-top">
 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tog" aria-controls="tog" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
        
                <div class="collapse navbar-collapse justify-content-lg-center" id="tog">
        
                    <ul class="navbar-nav " style="font-size: 18px; margin-right:-8%; ">
					
					<li class="nav-item active">
						<a class="nav-link " href="home1.php" ><i class="fas fa-home"></i>.Home&nbsp&nbsp <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item ">
						<a class="nav-link" href="book-hostel.php"><i class="fas fa-bed"></i>.BookHostel&nbsp&nbsp</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link " href="contact1.php"><i class="fas fa-frown"></i>.Complaints&nbsp&nbsp</a>
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
		

</header>


						<body>
							
<div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6 mt-2">
                    <?php
                    if(isset($_POST['changePass'])){
                    
                        if($error!=""){
                           
                                echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <div class="text-center">'.$error.'</div>
                                
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                               
                                </button>
                              
                            </div>';
                        }else{
                            echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <div class="text-center">'.$message.'</div>
                            
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
			</div> </div>
            
        
							
						<div class="container " style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-7" >
                <div class="card shadow p-5" >
                   
                    <div class="card-body">
                
              <div class ='text-center ' style='border-radius:0px;'>
            <img src="./img/default.jpg" width='150px'class="img-thumbnail" style='border-radius:200px;position:relative; margin-top:-7em; '> 
       
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
								<td scope="row">Registration Number:  <?php echo $_SESSION['roll']; ?></td>
								
								
                                
                            </tr>
							<tr>
                                <td scope="row">Phone Number: <?php echo $_SESSION['mob_no']; ?></td>
                                
							</tr>
							<tr>
                                <td scope="row">Email : <?php echo $_SESSION['email']; ?></td>
                                
							</tr>
							<tr>
                                <td scope="row">Department: <?php echo $_SESSION['department']; ?></td>
                                
							</tr>
							<tr>
                                <td scope="row">Year of Study: <?php echo $_SESSION['year_of_study']; ?></td>
                                
							</tr>
							<tr>
							
                                <td scope="row">Current Hostel:<?php echo $_SESSION['hostel_name']; ?></td>
                                
							</tr>
							<tr>
							
							<td scope="row">Room #: <?php echo $_SESSION['room_id']; ?></td>
                                
                            </tr>
							<tr>
                                <td scope="row">Bed #: <?php echo $_SESSION['bed_no']; ?></td>
                                
							</tr>
                        </tbody>
                    </table>   
              </div>
            
              <button type="button" style="width:80%;"class='btn btn-info'  name="button" data-toggle="modal" data-target="#modelId">Change Password</button>
              </div>
            </div>
            <div class="col-md-3">
                
                </div>


        </div>
</form>


</div>
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

	

	<script type="text/javascript" src="web_home/js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.min.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap -->
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
			
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};
			

			$().UItoTop({ easingType: 'easeOutQuart' });

			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->

<!-- //js-scripts -->


</html>
