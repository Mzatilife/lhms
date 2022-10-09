<?php
include_once('includes/config.inc.php');

if(isset($_POST['none'])){
$select = "SELECT * FROM hostel";
$mysqli = mysqli_query($conn,$select);
$count = mysqli_num_rows($mysqli);

$hostel = array();
$room = array();
$full = array();
$keep = 0;
$countnums = 0;
while($row = mysqli_fetch_array($mysqli)){
    $hostel[] = $row['Hostel_id'];
    
   
}
foreach($hostel as $key){
    $selectroom = "SELECT * FROM hostel WHERE Hostel_id = '$key';";
    $selectroomdb = mysqli_query($conn,$selectroom);
    $fetch = mysqli_fetch_row($selectroomdb);
    $keep = $fetch[6]; //room count
    $getroom = $fetch[4];
    $take = "SELECT * FROM room WHERE Hostel_id = '$key';";
    $takedb = mysqli_query($conn,$take);
    while($row = mysqli_fetch_array($takedb)){
        $room[] = $row['Room_No'];
          

        }
     
     
  
        foreach ($room as $keyr) {
            # code...
            $final  = "SELECT * FROM beds WHERE Hostel_id = '$key' AND Room_No = '$keyr' AND Is_taken = 1 ;";
            $finaldb = mysqli_query($conn,$final);
            $f = mysqli_num_rows($finaldb);
            if($f == $keep){
                $update = "UPDATE room SET Is_full = 1 WHERE Hostel_id = '$key' AND Room_No = '$keyr';";
                $updatedb = mysqli_query($conn,$update);


                
            }else{
                // do nothing its free 
            }
       
        }
   
        $finfout = "SELECT * FROM room WHERE Hostel_id = '$key' AND Is_full = 1 ";
        $db = mysqli_query($conn,$finfout);
        $value = mysqli_num_rows($db);
       if($value == $getroom){
        $update = "UPDATE hostel SET Is_full = 1 WHERE Hostel_id = '$key' AND No_of_rooms = '$value';";
        $updatedb = mysqli_query($conn,$update);

       }
    }
   

}


?>