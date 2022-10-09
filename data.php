<?php
$error = "";
$success = "";
$error1 = "";
$success1 = "";
 $date_time = date('Y-m-d H:i:s', time());
 $Date=date('Y-m-d');

if(isset($_POST['addhostel'])){
    $hostelname = mysqli_real_escape_string($conn, $_POST['hostelname']);
    $hosteltype = mysqli_real_escape_string($conn, $_POST['hosteltype']);
    $hostelroom = mysqli_real_escape_string($conn, $_POST['hostelroom']);
    $hostelbeds = mysqli_real_escape_string($conn, $_POST['hostelbeds']);


$null = 0;
 

    $select = "SELECT * FROM hostel WHERE Hostel_name = '$hostelname';";
    $selectdb = mysqli_query($conn,$select);
    $numberrows = mysqli_num_rows($selectdb);
    if($numberrows > 0){
        $error= 'Hostel already exists';
       
    }else if($numberrows == 0){
        $insert = "INSERT INTO hostel (Hostel_name,Hostel_type,No_of_rooms,No_of_beds,Date_added) VALUES('$hostelname','$hosteltype','$hostelroom','$hostelbeds','$date_time')";
        $insertdb = mysqli_query($conn,$insert);
        $select1 = "SELECT * FROM hostel WHERE Hostel_name = '$hostelname';";
        $select1db = mysqli_query($conn,$select1);
        $fetch = mysqli_fetch_row($select1db);
        $houseid = $fetch[0];
        $rhname = $fetch[1];
        for ($i=1; $i <=$hostelroom ; $i++) { 
            # code...
            $inserthostel = "INSERT INTO room(Hostel_id,Room_No,Hostel_name,Date_added) VALUES('$houseid','$i','$rhname','$date_time')";
            $inserthosteldb = mysqli_query($conn,$inserthostel);

            for ($g=1; $g <=$hostelbeds ; $g++) { 
                # code...
                $beds = "INSERT INTO beds(Hostel_id,Room_No,Bed_No,Hostel_name,Date_added) VALUES('$houseid','$i','$g','$hostelname','$date_time')";
                $bedsdb = mysqli_query($conn,$beds);
            }
     
        }
       
        

        if($insertdb == true){
            $success = "Hostel added successfully";

        }else{
            $error= 'something went wrong';
        }


    }
}




if(isset($_POST['payBtn-'])){
    
    $studentid = mysqli_real_escape_string($conn, $_POST['SI']);
    $studenthostel = mysqli_real_escape_string($conn, $_POST['SH']);
    $studentroom = mysqli_real_escape_string($conn, $_POST['RN']);
    $studentbed = mysqli_real_escape_string($conn, $_POST['BN']);
    $bank = mysqli_real_escape_string($conn, $_POST['bank']);
    $Transaction = mysqli_real_escape_string($conn, $_POST['transid']);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);

    $select = "SELECT * FROM student WHERE Student_id ='$studentid';";
    $selectdb = mysqli_query($conn,$select);
    $count = mysqli_num_rows($selectdb);
    if($count == 1){
        $check = "SELECT * FROM student_application WHERE Student_id ='$studentid' AND App_status = 1";
        $checkdb = mysqli_query($conn,$check);
            $find = mysqli_num_rows($checkdb);
            if($find == 1){
               $error = "You already booked a hostel";
            }else{

                $set = "UPDATE beds SET Is_taken = 1 WHERE Bed_No = '$studentbed' AND Room_No = '$studentroom' AND Hostel_id = '$studenthostel';";
                $setdb = mysqli_query($conn,$set);
                $all = "SELECT * FROM hostel WHERE Hostel_id='$studenthostel';";
                $alldb = mysqli_query($conn,$all);
                $c = mysqli_num_rows($alldb);
                
                if($c==1){
                    $fe = mysqli_fetch_row($alldb);
                    $hostelname = $fe[1];
               
                
                  
                    $set2 = "UPDATE student SET Hostel_id = '$studenthostel', Room_No ='$studentroom', Bed_No ='$studentbed', Hostel_name ='$hostelname' WHERE Student_id ='$studentid';";
                    $set2db = mysqli_query($conn,$set2);
    
    
                }
                $name = $_SESSION['fname'].' '.$_SESSION['lname'];
                $insert  = "INSERT INTO student_application (Student_id,Student_name,Hostel_id,Bed_No,Room_No,Confirm_Message,App_date,App_status,Rep_date) VALUES ('$studentid','$name','$studenthostel','$studentbed','$studentroom','Transaction ID:$Transaction,$bank','$date_time',1,'$Date')";
                $insertdb = mysqli_query($conn,$insert);
    
                if($insertdb){
                    $success = "Hostel booked successfully";
                }else{
                    $error = "something went wrong";
                }

            }
          
    
    
}


    
}


if(isset($_POST['send'])){

 
$subject = mysqli_real_escape_string($conn,$_POST['subject']);
$description = mysqli_real_escape_string($conn,$_POST['description']);
$fault_type = mysqli_real_escape_string($conn,$_POST['fault_type']);

$id = $_SESSION['roll'];
$search = "SELECT * FROM student WHERE Student_id ='$id';";
$searchdb = mysqli_query($conn,$search);
$fetch = mysqli_fetch_row($searchdb);
$hostel = $fetch[15];
$name = $fetch[2].' '.$fetch[3];
$room = $fetch[13];
$bed = $fetch[14];
 $select = "INSERT INTO messages(subject_h,Fault_type,C_description,Student_id,msg_dateTime,Hostel_name,Room_No,Student_name,Msg_date,Alert) VALUES('$subject','$fault_type','$description','$id','$date_time','$hostel','$room','$name','$Date',1)";
 $selectdb = mysqli_query($conn,$select);
        if($selectdb){
            $success = 'Complaint sent successfully';
        }
  }

  if(isset($_POST['reply'])){

 
    $id = mysqli_real_escape_string($conn,$_POST['studID']);
    $reply = mysqli_real_escape_string($conn,$_POST['repdes']);
    $msg = mysqli_real_escape_string($conn,$_POST['msg']);
   $search = "SELECT * FROM messages WHERE Student_id ='$id';";
   $searchdb = mysqli_query($conn,$search);
   $fetch = mysqli_fetch_row($searchdb);
   $subject = $fetch[5];
   $name = $fetch[2];
   
   
    $select = "INSERT INTO message_feedback(Student_desc,Feedback,Date_time,Student_id,Student_name,Message_id) VALUES('$subject','$reply','$date_time','$id','$name','$msg')";
    $selectdb = mysqli_query($conn,$select);
           if($selectdb){
               $success = 'Feedback sent successfully';

               $update = "UPDATE messages SET Is_reply =1, Alert=0 WHERE Message_id = '$msg' AND Student_id='$id';";
               $updade = mysqli_query($conn,$update);
           }else{
               $error = "something went wrong";
           }
     }

 
     				     
     if(isset($_POST['vacate'])){
         $studentid = mysqli_real_escape_string($conn, $_POST['StudId']);
         $studenthostel = mysqli_real_escape_string($conn, $_POST['HostelId']);
         $studentroom = mysqli_real_escape_string($conn, $_POST['RoomNo']);
         $studentbed = mysqli_real_escape_string($conn, $_POST['BedNo']);
         $search = "SELECT * FROM  student_application WHERE Student_id ='$studentid';";
         $searchdb = mysqli_query($conn,$search);
         $fetch = mysqli_fetch_row($searchdb);
         $applID=$fetch[0];
         $studentname=$fetch[2];
     
         $select = "SELECT * FROM student WHERE Student_id ='$studentid';";
         $selectdb = mysqli_query($conn,$select);
         $count = mysqli_num_rows($selectdb);
         if($count == 1){
             $check = "SELECT * FROM student_application WHERE Student_id ='$studentid' AND App_status = 1";
             
             $checkdb = mysqli_query($conn,$check);
                 $find = mysqli_num_rows($checkdb);
                 if($find == 1){
     
                     $set = "UPDATE beds SET Is_taken = 0 WHERE Bed_No = '$studentbed' AND Room_No = '$studentroom' AND Hostel_id = '$studenthostel';";
                     $setdb = mysqli_query($conn,$set);
                     $all = "SELECT * FROM hostel WHERE Hostel_id='$studenthostel';";
                     $alldb = mysqli_query($conn,$all);
                     $c = mysqli_num_rows($alldb);
                     
                     if($c==1){

                         $fe = mysqli_fetch_row($alldb);
                         $hostelname = $fe[1];
                        
                     
                         $set2 = "UPDATE student SET Hostel_id = '', Room_No =0, Hostel_name ='none', Bed_No =0 WHERE Student_id ='$studentid';";
                         $set2db = mysqli_query($conn,$set2);

                         $set3 = "UPDATE hostel SET  Is_full =0 WHERE Hostel_id='$studenthostel';";
                         $set3db = mysqli_query($conn,$set3);
         
                     }
                     
                     $set3  = "UPDATE  student_application SET App_status=0, Rep_date='$Date' WHERE Student_id='$studentid'";
                     $set3db = mysqli_query($conn,$set3);
                    
                     if($set3db){
                         $success = "Student Vaccated successifully";
                         
                     }else{
                         $error = "something went wrong";
                     }

                    
                     $select = "INSERT INTO notice(Student_id,N_subject,N_description,Date_sent,View_status) VALUES( '$studentid','Eviction Notice','Dear $studentname You have been evicted from your current room contact warden for more details!','$date_time',0)";
                     $selectdb = mysqli_query($conn, $select);
                      
                     if($selectdb){
                        $success1 = "eviction notice sent successifully";
                        
                    }else{
                        $error1 = "something went wrong with the eviction notice!!";
                    }
                 }
                }
            }
                    

              
                 if(isset($_POST['delete'])){
                    $studentid = mysqli_real_escape_string($conn, $_POST['StudId']);
                    $studenthostel = mysqli_real_escape_string($conn, $_POST['HostelId']);
                    $studentroom = mysqli_real_escape_string($conn, $_POST['RoomNo']);
                    $studentbed = mysqli_real_escape_string($conn, $_POST['BedNo']);
                  
                
                    $select = "SELECT * FROM student WHERE Student_id ='$studentid';";
                    $selectdb = mysqli_query($conn,$select);
                    $count = mysqli_num_rows($selectdb);
                    if($count == 1){
                        $check = "SELECT * FROM student WHERE Student_id ='$studentid' ";
                        $checkdb = mysqli_query($conn,$check);
                            $find = mysqli_num_rows($checkdb);
                            if($find == 1){
                
                                $set = "UPDATE beds SET Is_taken = 0 WHERE Bed_No = '$studentbed' AND Room_No = '$studentroom' AND Hostel_name = '$studenthostel';";
                                $setdb = mysqli_query($conn,$set);
                                $all = "SELECT * FROM hostel WHERE Hostel_id='$studenthostel';";
                                $alldb = mysqli_query($conn,$all);
                                $c = mysqli_num_rows($alldb);
                              
                                   
                                
                                    $set2 = "UPDATE student SET Is_delete =1 WHERE Student_id ='$studentid';";
                                    $set2db = mysqli_query($conn,$set2);
                                    if($set2db){
                                        $success = "Student deleted Successifully";
                                        
                                    }else{
                                        $error = "something went wrong";
                                    }
                    
                                
                                
                                $set3  = "UPDATE  student_application SET App_status=0 WHERE Student_id='$studentid'";
                                $set3db = mysqli_query($conn,$set3);
                    
                             
                            }
                        
                    }   
                }
     
   
                    if(isset($_POST['approve'])){
                        $studentid = mysqli_real_escape_string($conn, $_POST['StudId']);
                        $paymentId = mysqli_real_escape_string($conn, $_POST['PaymentId']);
                        $select = "SELECT * FROM payments WHERE Payment_id ='$paymentId';";
                        $selectdb = mysqli_query($conn,$select);
                        $count = mysqli_num_rows($selectdb);
                        if($count == 1){
                            $check = "SELECT * FROM payments WHERE Payment_id ='$paymentId'; ";
                            $checkdb = mysqli_query($conn,$check);
                                $find = mysqli_num_rows($checkdb);
                                if($find == 1){
                    
  
                                        $set2 = "UPDATE payments SET Is_approved =1 WHERE Payment_id ='$paymentId';";
                                        $set2db = mysqli_query($conn,$set2);
                                        if($set2db){
                                            $success = "Student Payment Approved Successifully";
                                            
                                        }else{
                                            $error = "something went wrong";
                                        }
                        
                                    
                                    $set3  = "UPDATE  student_application SET Is_approved=1 WHERE Student_id='$studentid' AND App_status=1";
                                    $set3db = mysqli_query($conn,$set3);

                                    $insertDate = "INSERT INTO payments(Date_approved) VALUES('$Date')";
                                    $inserthosteldb = mysqli_query($conn,$insertDate);
                        
                                 
                                }
                            
                        }   
       
   
    
     $number = 0;
        $c = 1;
        $people = "";
        $output ="";
  
     if(isset($_POST['view'])){
     
       
         $result = "SELECT * FROM messages WHERE Alert = 1 ;";
         $resultDb = mysqli_query($conn,$result);
     
         $count = mysqli_num_rows($resultDb);
         $number = $count;
        
         while($row=mysqli_fetch_array($resultDb)){
             $output .=' <a class="dropdown-item border-bottom" href="#">
             '.$c++.'
             <span class="text-info">'.$row['subject_h'].' '.$row['C_description'].'</span> 
           </a> ';
          
           if($c == 6){
           break;
           }
         }
     
     }
     
     $data = array(
     
     'number' => $number,
     'getnoti' => $output,
     );
     
    }

    if(isset($_POST['edit_h'])){
        $HI = mysqli_real_escape_string($conn, $_POST['hostel_id']);
        $HN = mysqli_real_escape_string($conn, $_POST['hostelname']);
        $HT = mysqli_real_escape_string($conn, $_POST['type']);
        $NR = mysqli_real_escape_string($conn, $_POST['rooms']);
        $NB= mysqli_real_escape_string($conn, $_POST['beds']);
      
    
        $insert = "UPDATE hostel SET Hostel_name='$HN',Hostel_type='$HT',No_of_rooms='$NR', No_of_beds='$NB', Date_added='$Date' WHERE Hostel_id='$HI'";
        $insertdb = mysqli_query($conn,$insert);
        $select1 = "SELECT * FROM hostel WHERE Hostel_name = '$HN';";
       
        for ($i=1; $i <=$NR ; $i++) { 
            # code...
            $inserthostel = "UPDATE room set  Room_No='$i' Hostel_name='$HN',Date_added='$Date' WHERE Hostel_id='$HI'";
            $inserthosteldb = mysqli_query($conn,$inserthostel);

            for ($g=1; $g <=$NB; $g++) { 
                # code...
                $beds = "UPDATE  beds SET Room_No='$i'Bed_No='$g',Hostel_name='$HN',Date_added='$Date' WHERE Hostel_id='$HI'";
                $bedsdb = mysqli_query($conn,$beds);
            }
     
        }
       
        

        if($insertdb == true){
            $success = "Hostel Updated successifully";

        }else{
            $error= 'something went wrong';
        }

   
    }

    if(isset($_POST['delete_h'])){
        $HI = mysqli_real_escape_string($conn, $_POST['D_HI']);
        $HN = mysqli_real_escape_string($conn, $_POST['D_HN']);
      
    
        $insert = "UPDATE hostel SET archived=1 WHERE Hostel_id='$HI'";
        $insertdb = mysqli_query($conn,$insert);
        $select1 = "SELECT * FROM hostel WHERE Hostel_name = '$HN';";

        if($insertdb == true){
            $success = "Hostel deleted successifully";

        }else{
            $error= 'something went wrong';
        }

   
    }

    if(isset($_POST['delete_m'])){
        $MI = mysqli_real_escape_string($conn, $_POST['MSG']);
        
      
    
        $insert = "UPDATE messages SET deleted=1 WHERE Message_id='$MI'";
        $insertdb = mysqli_query($conn,$insert);
       

        if($insertdb == true){
            $success = "Message deleted successifully ";

        }else{
            $error= 'something went wrong';
        }

   
    }
    if (isset($_POST['changePass'])) {

        $result ="SELECT *from student WHERE Student_id='" . $_SESSION["roll"] . "'";
        $selectdb = mysqli_query($conn,$result);
        $row = mysqli_fetch_array($selectdb);
        if ($_POST["currentPassword"] == $row["Pwd"]) {
            mysqli_query($conn, "UPDATE student set Pwd='" . $_POST["newPassword"] . "' WHERE Student_id='" . $_SESSION["roll"] . "'");
            $message = "Password Changed";
        } else
            $error = "Current Password is not correct";
    }

    if (isset($_POST['changePassW'])) {

        $result ="SELECT *from warden WHERE Warden_id ='" . $_SESSION["warden_id"] . "'";    
        $selectdb = mysqli_query($conn,$result);
        $row = mysqli_fetch_array($selectdb);
        if ($_POST["currentPassword"] == $row["Pwd"]) {
            mysqli_query($conn, "UPDATE warden set Pwd='" . $_POST["newPassword"] . "' WHERE Warden_id='" . $_SESSION["warden_id"]. "'");
            $message = "Password Changed";
        } else
            $error = "Current Password is not correct";
    }
    ?>

    
  
     

