<?php
 require 'includes/config.inc.php';

 include('Pnote.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Accountant Home</title>

	<!-- Meta tag Keywords -->
	<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
	

        <link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->


	
    <link rel="stylesheet" href="DataTables/DataTables-1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="DataTables/Buttons-1.6.3/css/buttons.bootstrap4.min.css">




	<link rel="stylesheet" href="web_home/css_home/flexslider.css" type="text/css" media="screen" property="" /><!-- flexslider css -->


    <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
</head>
<!-- Modal -->

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

<button class="btn btn-link btn-lg order-1 order-lg-1 "  style="font-weight:20px" id="sidebarToggle" href="#"><i class="fas fa-bars" style="color: white; font-size:large; cursor:pointer"></i></button>
              
              <span class="sr-only">Toggle Menu</span>
            </button>
       
            </div>
            <div class="collapse navbar-collapse justify-content-md-center"  style="margin-left:15%;" id="navbarsExample08">
        <ul class="navbar-nav">
        <ol class="breadcrumb bg-info mb-1 ">
                          <li class="breadcrumb-item"><a href="Accountant-home.php">Dashboard</a></li>
                           <li class="breadcrumb-item active">Payments</li>
                       </ol>
           
        </ul>
       
       
    </div>
		<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->

<div class="topbar-divider d-none d-sm-block"></div>
  <li class="nav-item">
  <li class="nav-item dropdown">
   
	 
   <li class="nav-item dropdown no-arrow">
   <a class="nav-link dropdown-toggle " href="#"  id="notic" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	 <i class="fa fa-bell"  style="font-size:25px"></i><span class="badge badge-pill badge-danger count2 badge-counter"></span>
   </a>
					
					 <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in " aria-labelledby="notifications" >
					 <h2 class="dropdown-header bg-light text-center   ">New Payements</h2>
					<div id="there">
					</div>
						 
					<h5 class="dropdown-footer bg-info text-center  m-0 ">
					<a class="nav-link m-0" href="payments.php"> 
					View all notifications
   </a>  
					</h5>
					
					 </div>
				   

   </li>
  

    <div style="margin-right:2%;" id="navbarsExample08">
        <ul class="navbar-nav">
					
                    <li class="nav-item dropdown">
					 <a class="nav-link dropdown-toggle" href="#" id="dropdown07XL" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-user-circle" style="font-size:30px"></i> <?php echo $_SESSION['username2']; ?>
                    <div class="dropdown-menu" aria-labelledby="dropdown07XL">
                        <a class="dropdown-item" href="includes/logout.inc.php" style='font-weight:board;'> Logout</a>
                        
                    </div>
                </li>
				
        </ul>
    </div>
	</div>
</nav>
</header>


<div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light " id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                       
                            <a class="nav-link" href="Accontant-home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">FEATURES</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#manageP" aria-expanded="false" aria-controls="manageP">
                                <div class="sb-nav-link-icon"><i class="fas fa-user" ></i></div>
									Manage payments
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="manageP" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="payments.php">check payments</a>
									<a class="nav-link" href="approved.php">Approved</a>
							
                                </nav>
							</div>
							
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Preport" aria-expanded="false" aria-controls="Preport">
                                <div class="sb-nav-link-icon"><i class="fas fa-bed"></i></div>
									Payment report
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="Preport" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="payment_report.php">View report</a>
								
                                </nav>
							</div>
							<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#messages" aria-expanded="false" aria-controls="messages">
                                <div class="sb-nav-link-icon"><i class="fas fa-frown"></i></div>
									Messages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="messages" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="AccMsg.php">View/reply</a> 
									<a class="nav-link" href="repliedMsg.php">View replied</a>
									
                                </nav>
							</div>
							
							
                          
                            <div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="midium">Logged in as: <?php echo $_SESSION['username2']; ?></div>
						
						</div>
                </nav>
            </div>
			
			<div id="layoutSidenav_content">
			<main>
			
  <div class="container">
<div class="row">
        <div class="col-md-3">
                
                </div>
                <div class="col-md-6 mt-2">
                    <?php
                    if(isset($_POST['remind'])){
                    
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
</div>				
	
<!-- Button trigger modal -->
<?php
  
   $query1 = "SELECT * FROM Student WHERE Is_delete=0";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
?>



<div id="container" class="row justify-content-md-center">


<div class="row" style="width:95%;"> 
<div class="container-fluid mt-4 mb-3">

<div class="panel panel-default">
				
			
<div id="container" class="row justify-content-md-center">

	 <div class="card mb-4" style="width:95%">
				<div class="card-header">
					<i class="fas fa-table mr-1"></i>
					HOSTEL PAYMENT DETAILS
				</div>
				<div class="card-body">
                <div class="table-responsive">
                <div class="table-responsive">
   <table id="example" class="table table-hover table-inverse  table-bordered table-center table-striped mt-2 border-top" style="font-size:24px; align-content:center;">  

			<thead class="thread-inverse">
					<tr class="text-secondary">
							<th>ID</th>
                            <th>Stud_name</th>
                            <th>Student Reg#</th>
							<th >Hostel Name</th>
							<th>Room_No</th>
							<th>Bed No</th>
							<th >Trans_Id</th>
                            <th >Amount paid(MWK)</th>
                            <th >Balance(MWK)</th>
                            <th >Date_paid</th>
                            <th >Remind</th>

		</tr>
						</thead>
		<tbody>
				<?php
					$select = "SELECT * FROM payments WHERE Is_approved=0  AND Amount< 85000 ";
                    $sdb = mysqli_query($conn,$select);
              
					while($row = mysqli_fetch_array($sdb)){
                        
                        $balance = 80000-$row['Amount'];
					echo'	<tr>
						<td>'.$row['Payment_id'].'</td>
						<td>'.$row['Stud_name'].'</td>
						<td>'.$row['Student_Id'].'</td>
						<td>'.$row['Hostel_name'].'</td>
						<td>'.$row['Room_no'].'</td>
                        <td>'.$row['Bed_No'].'</td>
                        <td>'.$row['TransId'].'</td>
                        <td>'.$row['Amount'].'</td>
                        <td>'.$balance.'</td>
						<td>'.$row['Date_added'].'</td>
						';
					
                ?>
              

					
<td><button type="button" class="btn btn-info remind" id='<?php echo $row['Student_Id'] ?>' data-toggle="modal" data-target="#balance" >Remind<i class="fas fa-bell" aria-hidden="true"></i></button></td>
			
					<?php
					}
					?>

	</tbody>
	<tfoot>
					<thead class="thread-inverse">
							<tr class="text-secondary">

                            <th>ID</th>
                            <th>Stud_name</th>
                            <th>Student Reg#</th>
							<th >Hostel Name</th>
							<th>Room_No</th>
							<th>Bed No</th>
							<th >Trans_Id</th>
                            <th >Amount paid(MWK)</th>
                            <th >Balance(MWK)</th>
                            <th >Date_paid</th>
                            <th >Remind</th>
        </tfoot>
      
						</table>
  
            </div>
            
					</div>
				</div>
					
        </div>
     
             
	</div>
</div>
</div>
</div>

                            </div>
	
      
    
      
			
    </tbody>

  </table> 
  

	</div>
	</div>
	
	</div>
	</div>
<!-- Modal -->


<div class="modal lg fade" id="balance" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Send Notice</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
		
				<div class="row">
					<div class="col-md-6">
							<div class="form-group d-none">
             					<label for="">Student ID</label>
            			 	<input type="text" name="SI" id="SI" class="form-control" readonly placeholder="ID here..." aria-describedby="helpId">
           						</div>
					

		   <div class="form-group ">
             <label for="">Balance(MWK) </label>
             <input type="text" name="PB" id="PB" class="form-control" placeholder="" aria-describedby="helpId">
            
           </div> 
        

					</div>
					
                </div>
                
                <div class="form-group">
             <label for="">Subject</label>
             <textarea class="form-control" name="NS" id="NS" rows="1" placeholder='Type description here...'></textarea>
           </div> 

           <div class="form-group">
             <label for="">Description</label>
             <textarea class="form-control" name="ND" id="ND" rows="5" placeholder='Type description here...'></textarea>
           </div> 

           <div class="text-center">
           <button type="submit" class="btn btn-info" name='remind'>Send</button>
           </div>
				</form>
			</div>
			
		</div>
	</div>
</div>


</main>
</div>
</div>

<br>
<br>



			<footer class=" navbar-dark bg-info" style="margin-top:60px; text-align:center">
			
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>
			</main>
</div>
</div>




</body>



<script type="text/javascript" src="DataTables/jQuery-3.3.1/jquery-3.3.1.js"></script>
    <script src="DataTables/DataTables-1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="DataTables/DataTables-1.10.21/js/dataTables.bootstrap4.min.js"></script>
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
    
    
	</script>


	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> 


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