<?php


 require 'includes/config.inc.php';
 include('data.php');
 include('studSO.php');
 include('stripePf.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->


	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->


	<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">

<!-- Stripe JS library -->
<script src="https://js.stripe.com/v3/"></script>

<script src="js/jquery.min.js"></script>
	
	

	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->

	

		
	

	
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
                <a class="nav-link display-4" href="#" style='font-weight: bolder;font-size:45px'><img src="logo2.png" width="70" dclass="img-logo">UNILIA LAWS CAMPUS</a>
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
					
					<li class="nav-item">
						<a class="nav-link " href="home1.php" ><i class="fas fa-home"></i>.Home&nbsp&nbsp </a>
					</li>
					<li class="nav-item  active">
						<a class="nav-link" href="book-hostel.php"><i class="fas fa-bed"></i>.BookHostel&nbsp&nbsp<span class="sr-only">(current)</span></a>
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
	<!--Header-->

<!-- services -->




<body>
<div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6 mt-2">
                    <?php
                    if(isset($_POST['payBtn'])){
                    
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
		<div class="container"style="margin-top:25px; margin-bottom:25px;" >
        <div class="row justify-content-center">
            <div class="col-md-9" >
                <div class="card shadow p-2" >
				<h1 class="display-5 text-center ">Book Hostel</h1>
		<form action="stripe1.php" method="post" id='paymentFrm' style="margin-left:25px; margin-right:25px;margin-top:25px;margin-bottom:25px">
			
		
						<div class="form-group">
						  <label for="">Student ID</label>
						  <input type="text" name="SI" id="SI" class="form-control form-control-lg" readonly value="<?php echo $_SESSION['roll']; ?>" placeholder="" required aria-describedby="helpId">
						  <p class="form-text text-danger small" id="Serror"></p>
						</div>
				
					<div class="row">
						<div class="col-md-4">
						<div class="form-group">
						
							<select class="custom-select form-control form-control-lg d-none" readonly name="SH" id="SH" required>
							
							
								<?php
								 $select = "SELECT * FROM student WHERE Student_id ='{$_SESSION['roll']}';";
								 $selectdb = mysqli_query($conn,$select);
								 $count = mysqli_num_rows($selectdb);
								 if($count == 1){
								 
								 $fetch = mysqli_fetch_row($selectdb);
								 if($fetch[4]=='Male'){
									$searchhost = "SELECT * FROM hostel WHERE Hostel_type = 'Boys' AND Is_full=0;";
									$sdb = mysqli_query($conn,$searchhost);
									while($row=mysqli_fetch_array($sdb)){
										echo'<option value="'.$row['Hostel_id'].'">'.$row['Hostel_name'].'</option>';
									}
								 
								 }else if($fetch[4]=='Female'){
									$searchhost = "SELECT * FROM hostel WHERE Hostel_type = 'Girls' AND Is_full=0;";
									$sdb = mysqli_query($conn,$searchhost);
									while($row=mysqli_fetch_array($sdb)){
										echo'<option value="'.$row['Hostel_id'].'">'.$row['Hostel_name'].'</option>';
									}
								 
								 }
										
								}
									?>
							</select>
							<div class="form-group">
								<label for="my-input">Hostel</label>
								<input class="form-control form-control-lg" required readonly type="text" name="hos" id="hos">
							</div>
							<p class="form-text text-danger small" id="Herror"></p>
					

						</div>
						</div>
					

			
					<div class="col-md-4">
						<div class="form-group">
						  <label for="">Room Number</label>
						  <input type="text" name="RN" id="RoomNumber"  class="form-control form-control-lg" readonly placeholder=""  required aria-describedby="helpId">
						
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label for="">Bed Number</label>
							<input type="text" name="BN" id="BN" class="form-control form-control-lg"  readonly required placeholder="" aria-describedby="helpId">
						 
						</div>
					</div>
					
				</div>

				<div class="alert alert-warning text-center" id="remove">
					You have already  booked!
				</div>
	
					<div id="paymentResponse" class="text-center"></div>
<div class="show">
					<div class="form-group d-none">
                <label>Student Name</label>
                <input type="text" name="Rname" id="Rname" class="form-control form-control-lg" value=" <?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>"  readonly required="" autofocus="">
            </div>
            <div class="form-group d-none">
                <label>Email</label>
                <input type="email" name="email" id="email" class="form-control form-control-lg" value=" <?php echo $_SESSION['email']; ?>" required="">
			</div>
			
            <div class="form-group">
                <label>CARD NUMBER</label>
                <div id="card_number" class="form-control form-control-lg"></div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>EXPIRY DATE</label>
                        <div id="card_expiry" class="form-control form-control-lg"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Card Verification Code</label>
                        <div id="card_cvc" class="form-control form-control-lg"></div>
                    </div>
                </div>
            </div>
    
					
					<div class='form-group'>
					<label form="">Amount</label>
					<input type="" class='form-control form-control-lg ' name="amount" id="amount" placeholder="Amount paid (MWK)">
					</div>	

					<div class="form-group d-none">
								<label >Hostel ID</label>
								<input type="" class='form-control form-control-lg HID' name="hostelId" >
							
							</div>
					
					<div class="text-center md-3">
						<button type="submit" id="payBtn" class="btn btn-info">Submit</button>
						</div>
						</form>
						</div>
			</div>
			</div>
			</div>




			<script>
// Create an instance of the Stripe object
// Set your publishable API key
var stripe = Stripe('<?php echo STRIPE_PUBLISHABLE_KEY; ?>');

// Create an instance of elements
var elements = stripe.elements();

var style = {
    base: {
        fontWeight: 400,
        fontFamily: 'Roboto, Open Sans, Segoe UI, sans-serif',
        fontSize: '20px',
        lineHeight: '2em',
        color: '#555',
        backgroundColor: '#fff',
        '::placeholder': {
            color: '#888',
        },
    },
    invalid: {
        color: '#eb1c26',
    }
};

var cardElement = elements.create('cardNumber', {
    style: style
});
cardElement.mount('#card_number');

var exp = elements.create('cardExpiry', {
    'style': style
});
exp.mount('#card_expiry');

var cvc = elements.create('cardCvc', {
    'style': style
});
cvc.mount('#card_cvc');

// Validate input of the card elements
var resultContainer = document.getElementById('paymentResponse');
cardElement.addEventListener('change', function(event) {
    if (event.error) {
        resultContainer.innerHTML = '<div class="alert alert-danger" role="alert">'+event.error.message+'</div>';
    } else {
        resultContainer.innerHTML = '';
    }
});

// Get payment form element
var form = document.getElementById('paymentFrm');

// Create a token when the form is submitted.
form.addEventListener('submit', function(e) {
    e.preventDefault();
    createToken();
});

// Create single-use token to charge the user
function createToken() {
    stripe.createToken(cardElement).then(function(result) {
        if (result.error) {
            // Inform the user if there was an error
            resultContainer.innerHTML = '<div class="alert alert-danger" role="alert">'+result.error.message+'</div>';
        } else {
            // Send the token to your server
            stripeTokenHandler(result.token);
        }
    });
}

// Callback to handle the response from stripe
function stripeTokenHandler(token) {
    // Insert the token ID into the form so it gets submitted to the server
    var hiddenInput = document.createElement('input');
    hiddenInput.setAttribute('type', 'hidden');
    hiddenInput.setAttribute('name', 'stripeToken');
    hiddenInput.setAttribute('value', token.id);
    form.appendChild(hiddenInput);
	
    // Submit the form
    form.submit();
}
</script>
		</form>
		</div>
		
	</div>
</div>				


	<!-- js -->
	<script type="text/javascript" src="web_home/js/jquery-3.3.1.min.js"></script>
   <!-- //js -->
   <script type="text/javascript" src="web_home/js/nels.js"></script>
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
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap4.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
    
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
<div class="container-fluid ">
    <div class="row mt-2">
        <div class="col-md-12 text-center jumbotron jumbotron-fluid bg-info" style="color:white; margin-bottom:0px; background-size:cover;background-repeat:no-repeat;">




		<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
            
        </div>
    </div>
</div>

</footer>
<script>
          $(document).ready(function(){
               $('#hostels').DataTable();
          });
          </script>



<script src="js/nels.js"></script>

<script src="js/book.js"></script>



</html>