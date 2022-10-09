<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $roll = $_POST['user_id'];
  $password = $_POST['pwd'];

  if (empty($roll) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else if ($roll == 'warden')
          {
            $sql = "SELECT *FROM warden WHERE Username = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = $password;
      if($pwdCheck == false){
        header("Location: ../login-warden-home.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        //session_start();
        $_SESSION['warden_id'] = $row['Warden_id'];
        $_SESSION['fname1'] = $row['Fname'];
        $_SESSION['lname1'] = $row['Lname'];
        $_SESSION['mob_no1'] = $row['Mob_no'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['email1'] = $row['Email'];
        $_SESSION['PSWD1'] = $row['Pwd'];

        //Just for checking if session variables are working properly
        if(isset($_SESSION['username'])){
          header("Location: ../warden-home1.php?login=success");
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
       
        //echo $_SESSION['lname'];
       
        
      }
          }}

          else if ($roll == 'accountant@unilia')
          {
            $sql = "SELECT *FROM accountant WHERE Username = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = $password;
      if($pwdCheck == false){
        header("Location: ../login-accountant-home.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        //session_start();
        $_SESSION['accountant_id'] = $row['Accountant_id'];
        $_SESSION['fname2'] = $row['Fname'];
        $_SESSION['lname2'] = $row['Lname'];
        $_SESSION['mob_no2'] = $row['Mob_no'];
        $_SESSION['username2'] = $row['Username'];
        $_SESSION['email12'] = $row['Email'];
        $_SESSION['PSWD'] = $row['Pwd'];

        //Just for checking if session variables are working properly
        if(isset($_SESSION['username2'])){
          header("Location: ../accountant-home.php?login=success");
        }
    
       
      }
    
          }}
  else {
    $sql = "SELECT *FROM Student WHERE Student_id = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = $password;
      if($pwdCheck == false){
        header("Location: ../index.php?error=wrongpwd");
        exit();
      }
      else if($pwdCheck == true) {

        session_start();
        $_SESSION['roll'] = $row['Student_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['gender'] = $row['Gender'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['department'] = $row['Dept'];
        $_SESSION['year_of_study'] = $row['Year_of_study'];
        $_SESSION['s_image'] = $row['image'];
        $_SESSION['hostel_name'] = $row['Hostel_name'];
        $_SESSION['room_id'] = $row['Room_No'];
        $_SESSION['bed_no'] = $row['Bed_No'];

        if(isset($_SESSION['Student_id'])){
          echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        //echo $_SESSION['lname'];
        header("Location: ../home1.php?login=success");
        //exit();
      }
      else {
        header("Location: ../index.php?error=strangeerr");
        exit();
      }
    }
    else{
      header("Location: ../index.php?error=nouser");
      exit();
    }
    
  }

}
else {
  header("Location: ../index.php");
  exit();
}
