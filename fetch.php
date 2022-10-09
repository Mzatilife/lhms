<?php

include_once('includes/config.inc.php');
if(isset($_POST['id'])){
  $id =  $_POST['id'];
   $select  = "SELECT * FROM student_application WHERE Student_id = '$id';";
   $selectdb = mysqli_query($conn,$select);
   $count = mysqli_num_rows($selectdb);

   echo $count;
}





?>