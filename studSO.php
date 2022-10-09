<?php

	

	if(isset($_POST['logout'])){


		unset($_SESSION['roll']);
	
	header('location:index.php');
			}


			if(empty($_SESSION['roll'])){
					
	header('location:index.php');
			}
?>
	