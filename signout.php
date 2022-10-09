<?php

	

	if(isset($_POST['logout'])){


		unset($_SESSION['username']);
	
	header('location:index.php');
			}


			if(empty($_SESSION['username'])){
					
	header('location:index.php');
			}
?>
	