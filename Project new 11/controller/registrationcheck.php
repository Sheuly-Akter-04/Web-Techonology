  
<?php
	session_start();

	if(isset($_POST['signup'])){

		$name = $_POST['name'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$dob = $_Post['dob'];

		//validation 1 [Is value is null or not?]
		if($name == "" || $username == "" || $password == "" || $email == "" || $gender == "" || $dob = ""){
			echo "null value found...";
		}else{
			//validation 2 [Password and confirm passowrd are same or not?]
			if($password == $repass){

				$user = ['name' => $name, 'username'=> $username, 'password'=> $password, 'email'=>$email, 'gender'=>$gender, 'dob'=>$dob];
				$formdata = array(
					'name' => $_POST["name"],
					'username'=> $_POST["username"],
					'password'=> $_POST["password"],
					'email'=> $_POST["email"],
					'gender'=> $_POST["gender"],
					'dob' =>$_post["dob"]
					
				 );
				//validaiton 3 [Is Data is existing or not]
				$existingdata = file_get_contents('../model/userdata.json');
				$tempJSONdata = json_decode($existingdata);
				$tempJSONdata[] =$formdata;
				//validation 4 [Convert updated array to JSON]
				$jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
				
				//validation 5 [write json data into data.json file]
				if(file_put_contents("../model/userdata.json", $jsondata)) {
					 echo "Data successfully saved <br>";
				 }
				else 
					 echo "no data saved";
				
				$data = file_get_contents("../model/userdata.json");
				$mydata = json_decode($data);
				
						$_SESSION['username'] = '';
						$_SESSION['password'] = "";
						$_SESSION['name'] = "";
				
						echo "User Id is: " . $_SESSION['username'];
						echo "<br>";
						echo "Password is: " . $_SESSION['password'];
						echo "<br>";
						echo "Name is" .$_SESSION['name'];

			//using session for preview user name
				$_SESSION['current_user'] = $user;

				header('location: ../login.php');
			}else{
				echo "password & confirm password mismatch...";
			}
		}
	}


?>