<?php
require 'includes/config.inc.php';
 
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
             <span class="text-info">'.$row['Student_id'].': '.$row['subject_h'].'</span> 
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
     echo json_encode($data); 
    

?>