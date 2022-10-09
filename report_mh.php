<?php
 require 'includes/config.inc.php';
 


 $Date=date('Y-m-d');

 if(isset($_POST['studReport'])){

    $query1 = ("SELECT * FROM Student WHERE Is_delete=0 AND Date_registered='$Date'");
    $result1 = mysqli_query($conn,$query1);
    $StudCount = mysqli_num_rows($result1);
    $students = $StudCount;
    
 
    $query2 = "SELECT * FROM Student WHERE Gender='Male' AND Is_delete=0 AND Date_registered='$Date'";
    $result2 = mysqli_query($conn,$query2);
    $MaleCount = mysqli_num_rows($result2);
    $male =$MaleCount;
    
 
    $query3=  "SELECT * FROM Student WHERE Gender='Female' AND Date_registered='$Date'";
    $result3 = mysqli_query($conn,$query3);
    $FemaleCount= mysqli_num_rows($result3);
    $female =$FemaleCount;

 
 
    $query4=  "SELECT * FROM Student WHERE Year_of_study=1 AND  Date_registered='$Date'";
    $result4 = mysqli_query($conn,$query4);
    $L1Count= mysqli_num_rows($result4);
    $L1 =$L1Count;
 
    $query5=  "SELECT * FROM Student WHERE Year_of_study='2' AND Date_registered='$Date'";
    $result5 = mysqli_query($conn,$query5);
    $L2Count= mysqli_num_rows($result5);
    $L2 =$L2Count;
  
 
    $query6=  "SELECT * FROM Student WHERE Year_of_study='3' AND Date_registered='$Date'";
    $result6 = mysqli_query($conn,$query6);
    $L3Count= mysqli_num_rows($result6);
    $L3 =$L3Count;
 
 
    $query7=  "SELECT * FROM Student WHERE Year_of_study='4' AND Is_delete=0 AND Date_registered='$Date'";
    $result7 = mysqli_query($conn,$query7);
    $L4Count= mysqli_num_rows($result7);
    $L4 = $L4Count;
 
 
    $query8=  "SELECT * FROM student_application WHERE App_status = 1 AND Rep_date='$Date'";
    $result8 = mysqli_query($conn,$query8);
    $Applied= mysqli_num_rows($result8);
    $app =$Applied;
 
 
    $query9=  "SELECT * FROM student_application WHERE App_status = 0 AND Rep_date='$Date'";
    $result9 = mysqli_query($conn,$query9);
    $Evicted= mysqli_num_rows($result9);
    $evict = $Evicted;


   
    $selectall="SELECT * FROM student_report WHERE Report_date= '$Date' ";
    $sdball= mysqli_query($conn, $selectall);
    $countall= mysqli_num_rows($sdball);
    if($countall == 1){
        $insert= "UPDATE student_report  SET Students_Registered='$students',Male='$male',Female='$female', L1='$L1',L2='$L2', L3='$L3',L4='$L4',Applications='$app',Evictions='$evict' WHERE Report_date='$Date'";
        $insertdb= mysqli_query ($conn, $insert);
  
        if($insertdb == true){
         echo "report updated successfully";
  
      }else{
         echo 'with the updATE went wrong';
      }
    }
    else{
    $insert1="INSERT INTO student_report(Students_Registered,Male,Female,L1,L2,L3,L4,Applications,Evictions,Report_date) VALUES ('$students','$male','$female','$L1','$L2','$L3','$L4','$app','$evict','$Date')";
    $insert1db=mysqli_query($conn,$insert1);

    if($insert1db == true){
       echo "report added successfully";

    }else{
       echo 'something went wrong';
    }
 
    }

    echo $students;
 echo $app;
 echo $evict;
 echo $female;
 echo $L2;
 echo $male; 

 }

    if(isset($_POST['compReport'])){

    $select1 = ("SELECT * FROM messages WHERE  Msg_date='$Date'");
    $result1 = mysqli_query($conn,$select1);
    $msgCount = mysqli_num_rows($result1);
    $msg = $msgCount;

    $select2 = ("SELECT * FROM messages WHERE  Fault_type='electrical' AND Msg_date='$Date'");
    $result2 = mysqli_query($conn,$select2);
    $eleCount = mysqli_num_rows($result2);
    $ele = $eleCount;

    $select3 = ("SELECT * FROM messages WHERE  Fault_type='furniture'  AND Msg_date='$Date'");
    $result3 = mysqli_query($conn,$select3);
    $fntrCount = mysqli_num_rows($result3);
    $fntr = $fntrCount;
    
    $select4 = ("SELECT * FROM messages WHERE  Fault_type='plumber'  AND Msg_date='$Date'");
    $result4 = mysqli_query($conn,$select4);
    $plmCount = mysqli_num_rows($result4);
    $plm = $plmCount;

    $select5 = ("SELECT * FROM messages WHERE  Is_reply=1    AND Msg_date='$Date'");
    $result5 = mysqli_query($conn,$select5);
    $repliedCount = mysqli_num_rows($result5);
    $replied = $repliedCount;

    $select6 = ("SELECT * FROM messages WHERE  Is_reply=0   AND Msg_date='$Date'");
    $result6 = mysqli_query($conn,$select6);
    $unrepliedCount = mysqli_num_rows($result6);
    $unreplied = $unrepliedCount;

    $select7 = ("SELECT * FROM messages WHERE  Is_mailed=1   AND Msg_date='$Date'");
    $result7 = mysqli_query($conn,$select7);
    $mailedcount = mysqli_num_rows($result7);
    $mailed =  $mailedcount;

    $select8 = ("SELECT * FROM messages WHERE  Is_mailed=0  AND Msg_date='$Date'");
    $result8 = mysqli_query($conn,$select8);
    $unmailedcount = mysqli_num_rows($result8);
    $unmailed = $unmailedcount;

    $selectall="SELECT * FROM complaint_report WHERE Creport_date= '$Date' ";
    $sdball= mysqli_query($conn, $selectall);
    $countall= mysqli_num_rows($sdball);

    if($countall == 1){
        $insert= "UPDATE complaint_report  SET complaintsFiled='$msg',electricalFaults='$ele', furnitureFaults='$fntr', plumberFaults='$plm',repliedmsg='$replied', unrepliedmgs='$unreplied',mailed='$mailed',unmailed='$unmailed' WHERE Creport_date='$Date'";
        $insertdb= mysqli_query ($conn, $insert);
  
        if($insertdb == true){
         echo "comp report updated successfully";
  
      }else{
         echo 'with the comp updATE went wrong';
      }
    }
    else{
    $insert2="INSERT INTO complaint_report(Creport_date,complaintsFiled,electricalFaults,furnitureFaults,plumberFaults,repliedmsg,unrepliedmgs,mailed,unmailed) VALUES ('$Date','$msg','$ele','$fntr','$plm','$replied','$unreplied','$mailed','$unmailed')";
    $insert2db=mysqli_query($conn,$insert2);

    if($insert2db == true){
       echo "report added successfully";

    }else{
       echo 'something went wrong with c report';
    }
 
    }

   echo $msg;
 echo $ele;
 


    
    }

      if(isset($_POST['hstlreport'])){

         $select1 = ("SELECT * FROM hostel WHERE  Date_added='$Date'");
         $result1 = mysqli_query($conn,$select1);
         $hostelCount = mysqli_num_rows($result1);
         $hostel= $hostelCount;

         $select2 = ("SELECT * FROM hostel WHERE  Hostel_type='Boys' AND Date_added='$Date'");
         $result2 = mysqli_query($conn,$select2);
         $boysCount = mysqli_num_rows($result2);
         $boys= $boysCount;

         $select3 = ("SELECT * FROM hostel WHERE  Hostel_type='Girls' AND Date_added='$Date'");
         $result3 = mysqli_query($conn,$select3);
         $girlsCount = mysqli_num_rows($result3);
         $girls= $girlsCount;

         $select4 = ("SELECT * FROM beds WHERE  Is_taken=1 ");
         $result4 = mysqli_query($conn,$select4);
         $occupiedBCount = mysqli_num_rows($result4);
         $occupiedB= $occupiedBCount;

         $select5 = ("SELECT * FROM beds WHERE  Is_taken=0");
         $result5 = mysqli_query($conn,$select5);
         $emptyBCount = mysqli_num_rows($result5);
         $emptyB= $emptyBCount;
         
         $select6= ("SELECT * FROM room WHERE  Is_full=0");
         $result6 = mysqli_query($conn,$select6);
         $availableRCount = mysqli_num_rows($result6);
         $availableR=  $availableRCount;

         $select7= ("SELECT * FROM room WHERE  Is_full=1");
         $result7 = mysqli_query($conn,$select7);
         $unavailableRCount = mysqli_num_rows($result7);
         $unavailableR=  $unavailableRCount;

         $selectall="SELECT * FROM hostel_report WHERE Hreport_date= '$Date' ";
         $sdball= mysqli_query($conn, $selectall);
         $countall= mysqli_num_rows($sdball);

         if($countall == 1){
            $insert= "UPDATE hostel_report  SET Hostels_added='$hostel',Bhostels_added='$boys', Ghostels_added='$girls', Occupied_beds='$occupiedB',Empty_beds='$emptyB', Available_rooms='$availableR',Full_rooms='$unavailableR' WHERE Hreport_date='$Date'";
            $insertdb= mysqli_query ($conn, $insert);
      
            if($insertdb == true){
             echo "hostel report updated successfully";
      
          }else{
             echo 'with the hostel updATE went wrong';
          }
        }
        else{
        $insert2="INSERT INTO hostel_report(Hreport_date,Hostels_added,Bhostels_added,Ghostels_added,Occupied_beds,Empty_beds,Available_rooms,Full_rooms) VALUES ('$Date','$hostel','$boys','$girls','$occupiedB','$emptyB','$availableR','$unavailableR')";
        $insert2db=mysqli_query($conn,$insert2);
    
        if($insert2db == true){
           echo "hostel report  added successfully";
    
        }else{
           echo 'something went wrong with hostel report';
        }
     

      }
      echo $hostel;
      echo $boys;





      }

      if(isset($_POST['pmntreport'])){

 

         $select1 = ("SELECT * FROM payments WHERE  Date_added='$Date'");
         $result1 = mysqli_query($conn,$select1);
         $paymentCount = mysqli_num_rows($result1);
         $pcount= $paymentCount;
 
         $select2 = ("SELECT  SUM(Amount) FROM payments WHERE Date_added='$Date'");
         $result2 = mysqli_query($conn,$select2);
         $amountpaid =  mysqli_fetch_row($result2);
         $amount= $amountpaid[0];

         $select3 = ("SELECT Bed_no FROM payments WHERE  Date_added='$Date'");
         $result3 = mysqli_query($conn,$select3);
         $bedCount = mysqli_num_rows($result3);
         $beds= $bedCount;

         $select4 = ("SELECT * FROM payments WHERE  Is_approved=1 ");
         $result4 = mysqli_query($conn,$select4);
         $approvedCount = mysqli_num_rows($result4);
         $approved=  $approvedCount;

         $select5 = ("SELECT * FROM payments WHERE  Is_approved=0 ");
         $result5 = mysqli_query($conn,$select5);
         $unapprovedCount = mysqli_num_rows($result5);
         $unapproved=  $unapprovedCount;

         $select6= ("SELECT * FROM Beds WHERE  Is_taken=0 ");
         $result6 = mysqli_query($conn,$select6);
         $emptyCount = mysqli_num_rows($result6);
         $empty= $emptyCount;
         
         $selectall="SELECT * FROM payment_report WHERE Preport_date= '$Date' ";
         $sdball= mysqli_query($conn, $selectall);
         $countall= mysqli_num_rows($sdball);

         if($countall == 1){
            $insert= "UPDATE payment_report  SET Payments='$pcount',Amount_total='$amount', Beds_booked='$beds', Approved='$approved',Unproved='$unapproved', Empty_beds='$empty' WHERE Preport_date='$Date'";
            $insertdb= mysqli_query ($conn, $insert);
      
            if($insertdb == true){
             echo "Payment report updated successfully";
      
          }else{
             echo 'with the payment updATE went wrong';
          }
        }
        else{
        $insert2="INSERT INTO payment_report(Preport_date,Payments,	Amount_total,	Beds_booked,Approved,Unproved,Empty_beds) VALUES ('$Date','$pcount','$amount','$beds','$approved','$unapproved','$empty')";
        $insert2db=mysqli_query($conn,$insert2);
    
        if($insert2db == true){
           echo "payment report  added successfully";
    
        }else{
           echo 'something went wrong with payment report';
        }
     

      }
   }    
?>
