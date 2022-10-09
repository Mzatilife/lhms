<?php

include_once('includes/config.inc.php');

$output = "";

if(isset($_POST['take2'])){
   
    $id = $_POST['take2'];


    $select = "SELECT * FROM messages WHERE Message_id ='$id';";
    $selectdb = mysqli_query($conn,$select);

    $fetching = mysqli_fetch_row($selectdb);
    echo $fetching[0];

}


?>