<?php

	session_start();

	if(isset($_POST['submit'])){

		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$user = ['username'=> $username, 'password'=> $password];
		$formdata = array(
			'username'=> $_POST["username"],
			'password'=> $_POST["password"]
			
		 );

		$userFile = fopen("../model/userdata.json", "r");
		$userData = fread($userFile, filesize('../model/userdata.json'));
		//$data = file_get_contents('../model/data.json');
		$existingdata[]= json_decode($userData, true);
      
		if($username == "" || $password == ""){
			echo "null input...";
		}else{

			foreach ($existingdata as $key => $value) {
				foreach ($value as $k => $v) {	
			 
			if($v['username'] == $_POST['username'] && $v['password'] == $_POST['password']){
				$_SESSION['flag'] = true;
				//print_r($value['username']);
								
				$_SESSION['current_user'] =$formdata;
				header('location: ../supplier/frontPage(MenueBar).php');
			}else{
				echo "invalid user, Please registration first";
				
			}
		  }
		 }	

		}
	}


?>