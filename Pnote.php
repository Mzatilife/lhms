<?php
$error = "";
$success = "";

 $date_time = date('Y-m-d H:i:s', time());
 $Date=date('Y-m-d');


    if(isset($_POST['remind'])){
 
        $SI= mysqli_real_escape_string($conn,$_POST['SI']);
        $PB= mysqli_real_escape_string($conn,$_POST['PB']);
        $NS= mysqli_real_escape_string($conn,$_POST['NS']);
        $ND = mysqli_real_escape_string($conn,$_POST['ND']);

    $select = "INSERT INTO paymentnotice(N_subject,N_description,Balance,Student_id,Is_note,Date_sent) VALUES('$NS','$ND','$PB','$SI',1,'$date_time')";
    $selectdb = mysqli_query($conn,$select);

    $set3  = "UPDATE  payments SET Is_note=1 WHERE Student_id='$SI' AND Is_approved=0";
    $set3db = mysqli_query($conn,$set3);

           if($selectdb){
               $success = 'Notice sent successfully';
            
     }
    else{
        $error = "something went wrong with the notice";
    }
    echo $SI;
    }
   

     ?>
     

