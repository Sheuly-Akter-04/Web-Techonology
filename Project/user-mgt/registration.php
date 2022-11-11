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
	<title>Registration</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>Registration</legend>

			User name: <input id="text" type="text" name="user_name"><br><br>
			Password: <input id="text" type="password" name="password"><br><br>
			Re-password: <input id="text" type="password" name="repass"><br><br>
			E-mail: <input id="text" type="email" name="email"><br><br>

			<input id="button" type="submit" value="Register"><br><br>

			<a href="login.php">Login</a><br><br>
		</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>