<?php
require 'includes/config.inc.php';
$student_id='';
$S=0;
if(isset($_POST['student'])){
    
    $SI= mysqli_real_escape_string($conn, $_POST['student']);;

    $select = "SELECT * FROM student_application WHERE Student_id ='$SI' AND App_status = 1";
    $checkdb = mysqli_query($conn,$select);

    $count = mysqli_num_rows($checkdb);
    if($count == 1){
        $S=1;

    }
    else{
        $S=0;
    }
}
$data = array(
     
    'booked' => $S,
    
    );
    echo json_encode($data);

?>