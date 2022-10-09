<?php

  session_start();
  session_destroy($_SESSION['roll']);
  session_destroy($_SESSION['warden_id']);
  session_destroy($_SESSION['accountant_id']);
  header("Location: ../index.php")

 ?>
