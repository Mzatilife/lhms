
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php

 require 'includes/config.inc.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Intrend Interior Category Flat Bootstrap Responsive Website Template | Contact : W3layouts</title>
	
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
		<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">
	<!-- css files -->
	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" />
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
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

    <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
        <ul class="navbar-nav">
        <li class="nav-item active">
						<a class="nav-link" href="warden-home1.php">Home <span class="sr-only">(current)</span></a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="book-hostel1.php">Re-Allocate-student</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="message_hostel_manager.php">Complaints</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="message_user1.php">Evacute student</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" href="message_user1.php">Vaccate rooms</a>
                    </li><li class="nav-item">
						<a class="nav-link" href="message_user1.php">Vaccant rooms</a>
                    </li><li class="nav-item">
						<a class="nav-link" href="message_user1.php">Applicants</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION['username']; ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <a class="dropdown-item" href="includes/logout.inc.php" style='font-weight:board;'> Logout</a>
                        
                    </div>
                </li>
				
        </ul>
    </div>
</nav>
		

</header>
<body>

	<!--Header-->
</div>
<!-- //banner --> 
<!-- contact -->

<br><br>


<div class="container">

			
<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy" enctype="multipart/form-data">
		<div class="row justify-content-center" >
            <div class="col-md-5">
                
            </div>
            <div class="col-md-8 card p-3 " style='margin-top:2em;'>
                
              <div class ='text-center ' style='border-radius:1px;'>
            <img src="./img/default.jpg" width='150' style='border-radius:200px;position:relative; '>
            
           <div class="mail_grid_w3l"> 
       
            <div class ='mt-1' style='border-radius:0px;'>
         
            <h1 class="heading text-capitalize mb-sm-5 mb-4"> Feedback</h1>

       
               <form action="reply_students.php" method="post" style='width:100px'>
			   <div class="form-group">
					<div class="col-md-20 contact_center_grid"data-aos="fade-center">
							<div class="contact-fields-w3ls">
							<?php
					
					$select = "SELECT * FROM message";
					$result = $conn->query($select);
					$row = $result->fetch_assoc();
				
				?>
						<input action="reply_students"type="text"  id="td" class="form-control" name="Sender_id" value="<?php echo $row['sender_id']; ?>">
					</div>
				</div>
                  
                       <div class="col-md-20 contact_center_grid" data-aos="fade-center">
                       <div class="contact-fields-w3ls">
                               <input type="text"  class="form-control" name="subject" placeholder="Subject" required="">
                           </div>
                           <div class="contact-fields-w3ls">
                           <textarea name="long-text" class="form-control" placeholder="type complaints here...." required=""></textarea>
                           </div>
                           
                           <input type="submit" name="submit" value="Submit">
                       </div>
                 </div>
			</div>
</form>


</div>
</div>

</div>
</div>		
</div>
</div>	
	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->

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


</body>

<footer class=" navbar-dark bg-info" style="margin-top:10%; text-align:center">
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>	
</html>

<?php
if(isset($_POST['submit'])){
	/*echo "<script type='text/javascript'>alert('hello')</script>";*/
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$roll = $_POST['student_roll_no'];
    $man_id = $_SESSION['warden_id'];

    $today_date =  date("Y-m-d");
    $time = date("h:i A");

	$query = "INSERT INTO Message (sender_id,receiver_id,subject_h,message,msg_date,msg_time) VALUES ('$man_id','$roll','$subject','$message','$today_date','$time')";
    $result = mysqli_query($conn,$query);
    if($result){
         echo "<script type='text/javascript'>alert('Message sent Successfully!')</script>";
    }
    else{
         echo "<script type='text/javascript'>alert('Error in sending message!!! Please try again.')</script>";
   }
  }


?>