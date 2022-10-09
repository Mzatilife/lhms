<?php
  require 'includes/config.inc.php';
  include('data.php');
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> RE-ALLOCATE STUDENTS</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Intrend Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	
	
	<!-- css files -->
	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->

	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	

		</style>
	
</head>
<!-- banner -->
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
       
						<a class="nav-link" href="warden-home1.php">Home </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" href="evicted_archive.php">evicted-archive</a>
					</li>
					
					<li class="nav-item">
										<li class="nav-item">
						<a class="nav-link" href="message_hostel_manager.php">Complaints</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link active" href="empty_rooms.php">Vaccate rooms<span class="sr-only">(current)</span></a>
                    </li><li class="nav-item">
						<a class="nav-link" href="empty_rooms.php">Vaccant rooms</a>
                    </li><li class="nav-item">
						<a class="nav-link" href="students1.php">Applicants</a>
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
</div>
					
<h3 class="panel-heading dispray-5 border-bottom text-center pops3" style="color:#000;">MANAGE ROOM VACATION</h3>
<div class="panel panel-default">
							
							<div class="panel-body">
<div id="container" class="row justify-content-md-center">
<div class="row" style="width:60%;"> 
                <div class="table-responsive">
   <table id="student_app" class="table table-hover table-inverse  table-bordered table-center table-striped mt-2 border-top" style="font-size:22px; align-content:center;">  

			<thead class="thread-inverse">
					<tr class="text-secondary">
							
							<th>Registration#</th>
							<th>Student_name</th>
							<th>Hostel_ID</th>
							<th>Room #</th>
							<th>Bed #</th>
							<th>App_Date</th>
							<th>Action</th>
							

		</tr>
						</thead>
		<tbody>
				<?php
					$select = "SELECT * FROM student_application WHERE App_status = 0 ";
					$sdb = mysqli_query($conn,$select);
					
					while($row = mysqli_fetch_array($sdb)){
					echo'	<tr>
						
						<td>'.$row['Student_id'].'</td>
						<td>'.$row['Student_name'].'</td>
						<td>'.$row['Hostel_id'].'</td>
						<td>'.$row['Room_No'].'</td>
						<td>'.$row['Bed_No'].'</td>
						<td>'.$row['App_date'].'</td>
						
						';
					
						?>

					
						<td><button type="button"  class="btn btn-danger vacate"  id="<?php echo $row['Student_id'].'-'.$row['Hostel_id'].'-'.$row['Bed_No'].'-'.$row['Room_No'];?>" data-toggle="modal" data-target="#vacateModal">Vaccate <i class="fa fa-trash" aria-hidden="true"></i></button></td>
					
						
					
				
					<?php
					}
					?>

	</tbody>

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
	
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="vacateModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
				<div class="modal-header">
						<h5 class="modal-title">Vacate student </h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
					
					<div class="row">
					<div class="col-md-6">
							<div class="form-group d-none">
							<form action="vacate_rooms.php" method="post">
			<input type="text" name="StudId" id="StudId" class="form-control"  aria-describedby="helpId">
			</div>
			
			
							</div>
							<div class="row">
					<div class="col-md-6">
							<div class="form-group d-none">
		
			<input type="text" name="HostelId" id="HostelId" class="form-control"  aria-describedby="helpId">
			</div>
			
			
							</div>
							
					<div class="col-md-6">
							<div class="form-group d-none">
			<input type="text" name="BedNo" id="BedNo" class="form-control"  aria-describedby="helpId">
			</div>
			
			
							</div>
						
					<div class="col-md-6">
							<div class="form-group d-none">
			<input type="text" name="RoomNo" id="RoomNo" class="form-control"  aria-describedby="helpId">
			</div>
			
			
							</div>
			
			<div class="modal-body">
				<div class="container-fluid">
					<p>&nbsp&nbsp Do you want to vacate? </p> 
				</div>
				</div>
			</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
				<button type="submit" name="vacate" class="btn btn-primary">Yes</button>
			</div>
			</form>
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
</div>
</section>


<footer class=" navbar-dark bg-info" style="margin-top:10%; text-align:center;">
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>
<!-- footer -->

<!-- js-scripts -->

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
               $('#student_app').DataTable();
          });
          </script>
		  <script src="js/nels.js"></script>
