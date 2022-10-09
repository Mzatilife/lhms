<?php
 require 'includes/config.inc.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Allocated Rooms</title>

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
	<!--bootsrap -->

	<!--// Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="web_warden/css_home/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

     <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
               <script type="text/javascript" src="DataTables/datatables.min.js"></script>
<link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!-- //web-fonts -->

</head>





	<!--Header-->
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
	
      
      <body>  
           <br /><br />  
           <div class="container">  
                <br />  
                
                     <?php
   if (isset($_POST['search'])) {
   	   $search_box = $_POST['search_box'];
   	   echo "<script type='text/javascript'>alert('<?php echo $search_box; ?>')</script>";
   	   $hostel_id = $_SESSION['hostel_id'];
   	   $query_search = "SELECT * FROM student WHERE Student_id like '$search_box%'";
   	   $result_search = mysqli_query($conn,$query_search);
   	   //select the hostel name from hostel table
       $query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
      $result6 = mysqli_query($conn,$query6);
      $row6 = mysqli_fetch_assoc($result6);
     $hostel_name = $row6['Hostel_name'];
   	   ?>
   	   <div class="container">
   	   <div class="table-responsive">  
                     <table id="students" class="table table-striped table-bordered table-hover">  
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th>
        <th>Hostel</th>
        <th>Room Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
   	   if(mysqli_num_rows($result_search)==0){
   	   	  echo '<tr><td colspan="4">No Rows Returned</td></tr>';
   	   }
   	   else{
   	   	  while($row_search = mysqli_fetch_assoc($result_search)){
      		//get the name of the student to display
            $room_id = $row_search['Room_id'];
            $studentHID = $row_search['Hostel_id'];
            $query7 = "SELECT * FROM Room WHERE Room_id = '$room_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $query88 = "SELECT * FROM Hostel WHERE Hostel_id = '$studentHID'";
            $result88 = mysqli_query($conn,$query88);
            $row88 = mysqli_fetch_assoc($result88);
            $room_no = $row7['Room_No'];
            $hostel_name = $row88['Hostel_name'];
            //student name
            $student_name = $row_search['Fname']." ".$row_search['Lname'];

      		echo "<tr><td>{$student_name}</td><td>{$row_search['Student_id']}</td><td>{$row_search['Mob_no']}</td><td>{$hostel_name}</td><td>{$room_no}</td></tr>\n";
   	   }
   }
   ?>
   </tbody>
  </table>
</div>
<?php
}
  ?>
<?php
   $hostel_id = $_SESSION['hostel_id'];
   $query1 = "SELECT * FROM Student";
   $result1 = mysqli_query($conn,$query1);
   //select the hostel name from hostel table
   $query6 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
   $result6 = mysqli_query($conn,$query6);
   $row6 = mysqli_fetch_assoc($result6);
   $hostel_name = $row6['Hostel_name'];
?>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Name</th>
        <th>Student ID</th>
        <th>Contact Number</th>
        <th>Hostel</th>
		<th>Room Number</th>
		<th>Programe</th>
		<th>Level</th>
		
		
      </tr>
    </thead>
    <tbody>
    <?php
      if(mysqli_num_rows($result1)==0){
         echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }
      else{
      	while($row1 = mysqli_fetch_assoc($result1)){
      		//get the room_no of the student from room_id in room table
            $room_id = $row1['Room_id'];
            $HID = $row1['Hostel_id'];
            $query7 = "SELECT * FROM Room WHERE Room_id = '$room_id'";
            $result7 = mysqli_query($conn,$query7);
            $row7 = mysqli_fetch_assoc($result7);
            $room_no = $row7['Room_No'];
            $query99 = "SELECT * FROM Hostel WHERE Hostel_id = '$HID'";
            $result99 = mysqli_query($conn,$query99);
            $row99 = mysqli_fetch_assoc($result99);
            $HNM = $row99['Hostel_name'];
            if (!$HNM) {
              $HNM='None';
            }
            if(!$room_no){
              $room_no='None';
            }
            //student name
            $student_name = $row1['Fname']." ".$row1['Lname'];

      		echo "<tr><td>{$student_name}</td><td>{$row1['Student_id']}</td><td>{$row1['Mob_no']}</td><td>{$HNM}</td><td>{$room_no}</td><td>{$row1['Dept']}</td><td>{$row1['Year_of_study']}</td></tr>\n";
      	}
      }
    ?>
    </tbody>
  </table> 
</body>
<footer class=" navbar-dark bg-info" style="margin-top:10%; text-align:center">
			
			<p class="copyright-agileinfo"> &copy; <b>2020 LHMS Project. All Rights Reserved  by <a href="#">University of Livingstonia<b></a></p>
				</footer>	
</html>

