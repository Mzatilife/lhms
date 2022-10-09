<?php
 require 'includes/config.inc.php';
 


 $Date=date('Y-m-d');

 if(isset($_POST['nels'])){

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

    

 }
 echo $students;
 echo $app;
 echo $evict;
 echo $female;
 echo $L2;
 echo $male;
?>
<script src="js/nels.js"></script>