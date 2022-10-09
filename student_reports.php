<?php
 require 'includes/config.inc.php';
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Students report</title>

	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<!--// Meta tag Keywords -->


	<!-- css files -->
	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- css files -->
    <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="DataTables/Buttons-1.6.3/css/buttons.bootstrap4.min.css">




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
<nav class="navbar navbar-expand-lg navbar-dark bg-info border-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>


<div id="content">

<button class="btn btn-link btn-lg order-1 order-lg-1 bg-dark"  style="font-weight:20px" id="sidebarToggle" href="#"><i class="fas fa-bars" style="color: white; font-size:large; cursor:pointer"></i></button>
              
              <span class="sr-only">Toggle Menu</span>
            </button>
       
            </div>
  <div class="collapse navbar-collapse justify-content-md-center"  style="margin-left:42%;" id="navbarsExample08">
        <ul class="navbar-nav">
            <li class="nav-item active">

            <li class="nav-item active">
				<a class="nav-link display-3" href="warden-home1.php" style='font-weight:30px;font-size:29px'>Go to  DASHBOARD</a>
				
				
            </li>
           
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
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="midium">Logged in as: <?php echo $_SESSION['username']; ?></div>
						
                    </div>
				</nav>
			</div>

			<div id="layoutSidenav_content">
			<div class="container-fluid mt-4 mb-3">
		
<h3 class="panel-heading-secondary dispray-5 border-bottom text-center pops3" style="color:#000;">STUDENT REPORT DETAILS</h3>
<div class="panel panel-default">
							
						
<div id="container" class="row justify-content-md-center">
<div class="row" style="width:95%;"> 
                <div class="table-responsive">

						
										<div class="table-responsive">
						<table id="example" class="table table-hover table-inverse  table-bordered table-center table-striped mt-2 border-top" style="font-size:24px; align-content:center;width:100%;">  
							<thead class="thread-inverse">
							<tr class="text-secondary">
							
													<th>Date</th>
													<th>Students Registered</th>
													<th>Male Students</th>
													<th>Female Students</th>
													<th>Level 1</th>
													<th>Level 2</th>
													<th>Level 3</th>
													<th>Level 4</th>
													<th>Applicants </th>
													<th>Vaccated </th>
												</tr>
							</thead>
							<tbody>
								<?php
									$select = "SELECT * FROM Student_report";
									$sdb = mysqli_query($conn,$select);
								
										while($row = mysqli_fetch_array($sdb)){
											echo'	
												<tr>
												<td>'.$row['Report_date'].'</td>
												<td>'.$row['Students_Registered'].'</td>
												<td>'.$row['Male'].'</td>
												<td>'.$row['Female'].'</td>
												<td>'.$row['L1'].'</td>
												<td>'.$row['L2'].'</td>
												<td>'.$row['L3'].'</td>
												<td>'.$row['L4'].'</td>
												<td>'.$row['Applications'].'</td>
												<td>'.$row['Evictions'].'</td>
												</tr>
												';
										}
									?>	
									
						
                            </tbody>
                                            <tfoot>
                                            <thead class="thread-inverse">
							                        <tr class="text-secondary">
               
                                                    <th>Date</th>
													<th>Students Registered</th>
													<th>Male Students</th>
													<th>Female Students</th>
													<th>Level 1</th>
													<th>Level 2</th>
													<th>Level 3</th>
													<th>Level 4</th>
													<th>Applicants </th>
													<th>Vaccated </th>
        </tfoot>
 					 </table> 

    </table>
                      <br>
<br>
									


                </main>
						
						
                </div>			
		


                     
   
</body>
<footer class=" navbar-dark bg-info" style="margin-top:60px; text-align:center">
			
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>


				<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/dataTables.buttons.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.bootstrap4.min.js"></script>
    <script src="DataTables/JSZip-2.5.0/jszip.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
    <script src="DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.html5.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.print.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.colVis.min.js"></script>
    <script src="DataTables/Buttons-1.6.3/js/buttons.colVis.js"></script>
    <script src="DataTables/Responsive-2.2.5/js/dataTables.responsive.min.js"></script>
    <script src="DataTables/Responsive-2.2.5/js/responsive.bootstrap4.min.js"></script>
    
    
	
    



<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'csv' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>



	<script src="js/nels.js"></script>



