<?php

	session_start();
	unset($_SESSION['flag']);
	
	session_unset();
	session_destroy();
	header('location: ../index.php');

?>