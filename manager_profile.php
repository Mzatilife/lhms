<?php
		  require 'includes/config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>User Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Consultancy Profile Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<script src="../web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
<script type="text/javascript" src="../web_profile/js/sliding.form.js"></script>

<script type="application/x-javascript">
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

<!-- css files -->
<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->

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
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true" style='z-index:100000;'>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Update Profile</h5>
      
      </div>
      <div class="modal-body w3l-form-group">
        <form action="#" method="post">
		<div class='form-group'>
		
		<label form="">First Name</label>
		<input type="" class='form-control form-control-md ' name="fname" id="" placeholder="<?php echo $_SESSION['fname']; ?>">
		</div>
		</form>
		<form action="#" method="post">
		<div class='form-group'>
		<label form="">Last Name</label>
		<input type="" class='form-control form-control-md ' name="lname" id="" placeholder="<?php echo $_SESSION['lname']; ?>">
		</div>
		<form action="#" method="post">
		<div class='form-group'>
		<label form="">Email Address</label>
		<input type="" class='form-control form-control-md ' name="email" id="" placeholder="<?php echo $_SESSION['email']; ?>">
		</div>
		<form action="#" method="post">
		<div class='form-group'>
		<label form="">Phone Number</label>
		<input type="" class='form-control form-control-md ' name="mobile_no" id="" placeholder="<?php echo $_SESSION['mob_no']; ?>">
		</div>
		
		<form action="" method="post">
			<div class='form-group'>
			<label form="">Upload profile Picture</label>
			<form method="post" action="" enctype='multipart/form-data'>
									<input type='file' name='file' />
</div>	
    </div>
	<?php
									if(isset($_POST['submit'])){
									
									$name = $_FILES['file']['name'];
									$target_dir = "photo/";
									$target_file = $target_dir . basename($_FILES["file"]["name"]);

									
									$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

									
									$extensions_arr = array("jpg","jpeg","png","gif");

									if( in_array($imageFileType,$extensions_arr) ){
									
									
										$image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
										$image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
										$file='file';
										$query = "insert into student(image) values('".$image."')";
										mysqli_query($con,$query);
									
								
										move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
									}
									
									}
									?>

							

				<div class="modal-footer">
					
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="submit" name='submit' class="btn btn-primary">Save</button>

      </div>

			</div>
			

      </div>
    
  </div>
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
                <a class="nav-link display-4" href="#" style='font-weight: bolder;font-size:55px'><img src="logo2.png" width="150" dclass="img-logo">UNILIA LAWS CAMPUS </a>
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

			<h1><a class="navbar-brand" href="home.php"> <span class="display"></span></a></h1>	
<div class="container">
<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy" enctype="multipart/form-data">
		<div class="row justify-content-md-center" >
            <div class="col-md-3">
                
            </div>
            <div class="col-md-6 card p-5 " style='margin-top:5em;'>
                
              <div class ='text-center ' style='border-radius:0px;'>
            <img src="./img/default.jpg" width='150' style='border-radius:200px;position:relative; margin-top:-9em; border-style: groove;'> 
       
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
            
              <button type="button" class='btn btn-info'  name="button" data-toggle="modal" data-target="#modelId">Update_profile</button>
              </div>
            </div>
            <div class="col-md-3">
                
                </div>


        </div>
</form>


</div>




</body>



	

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

</html>
