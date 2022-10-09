<?php
require 'includes/config.inc.php';
 
     $number = 0;
        $c = 1;
      
  
     if(isset($_POST['view1'])){
     
       
         $result = "SELECT * FROM payments WHERE Is_note = 1;";
         $resultDb = mysqli_query($conn,$result);
     
         $count = mysqli_num_rows($resultDb);
         $number = $count;
        
         while($row=mysqli_fetch_array($resultDb)){
             $output .=' <a class="dropdown-item border-bottom" href="#">
             '.$c++.'
             <span class="text-info">'.$row['Student_Id'].': '.$row['TransId'].'</span> 
           </a> ';
          
           if($c == 6){
           break;
           }
         }
     
     }
     
     $data = array(
     
     'number' => $number,
     'payment' => $output,
     );
     echo json_encode($data); 
    

?>