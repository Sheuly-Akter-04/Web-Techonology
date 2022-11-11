<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into users (user_name,password,repass,email) values ('$user_name','$password','$repass','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>Signup</legend>

			USERNAME: <input id="text" type="text" name="user_name"><br><br>
			PASSWORD: <input id="text" type="password" name="password"><br><br>
			RE-PASSWORD: <input id="text" type="password" name="repass"><br><br>
			E-MAIL: <input id="text" type="email" name="email"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>
© 2021 GitHub, Inc