<?php

include_once('includes/config.inc.php');

$output = "";

if(isset($_POST['take'])){
   
    $id = $_POST['take'];


    $select = "SELECT * FROM Student WHERE Student_id ='$id';";
    $selectdb = mysqli_query($conn,$select);

    $fetching = mysqli_fetch_row($selectdb);
    echo $fetching[2].' '.$fetching[3];

}


?>