<?php


include_once('includes/config.inc.php');
$output1 = "";
$bedno ="";
$roomno="";
$myarray = array();
$myarray2 = array();
if(isset($_POST['id'])){
    $id = $_POST['id'];
    $select  = "SELECT * FROM hostel WHERE Hostel_id = '$id' AND is_full = 0 ;";
    $selectdb = mysqli_query($conn,$select);
    $fetch = mysqli_fetch_row($selectdb);
  
    $count = mysqli_num_rows($selectdb);
    if($count == 1){
        $room = "SELECT * FROM room WHERE Hostel_id = '$id' AND is_full = 0;";
        $roomdb = mysqli_query($conn,$room);
        $countroom = mysqli_num_rows($roomdb);
        if($countroom > 0){
       while($row = mysqli_fetch_array($roomdb)){
            $myarray[] = $row['Room_No'];

       }

       
shuffle( $myarray );

     foreach($myarray as $key){

               $start1 = "SELECT * FROM beds WHERE Room_No = '$key' AND Hostel_id = '$id' AND Is_taken = 0 ;";
               $start1db = mysqli_query($conn,$start1);
               $startcounting =mysqli_num_rows($start1db);
              if($startcounting == 0){
                   
                continue;
                
              }else if($startcounting > 0){
        
                
                  while($row = mysqli_fetch_array($start1db)){
                      $myarray2[]=$row['Bed_No'];
                  }
                shuffle($myarray2);
                foreach($myarray2 as $key2){
                   
                    $search = "SELECT * FROM beds WHERE Bed_No = '$key2' AND Hostel_id = '$id' AND Is_taken = 0 AND Room_No = '$key' ;";
                    $searchdb = mysqli_query($conn,$search);
                    $searchcount = mysqli_num_rows($searchdb);
                    if($searchcount !=0){
                        $find = mysqli_fetch_row($searchdb);
                        $bedno = $find[4];
                        $roomno = $find[3];
                    break;

                    }else{
                        continue;

                    }
               
                }
            
              }
   
           }
           
            
            

        }else{
            $output1 .= 'Rooms are full';
        }
        
    }else{
        $output1 .= 'No Available Hostels (Hostels full)';
    }
   

    $data = array(
        'hostelno' => $output1,
        'bedno'    => $bedno,
        'roomno'    => $roomno,
  
    );
    
   
    echo json_encode($data);
}




?>