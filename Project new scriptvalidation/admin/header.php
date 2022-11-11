<?php
	session_start();
	if(!isset($_SESSION['flag'])){
		header('location: ../AdminLogin.html');
		header('location: ../registration.php');
		
	}
?>