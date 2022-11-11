<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>
	<fieldset>
		<legend>Index</legend>

<center>
<h1> Hello, <?php echo $user_data['user_name']; ?></h1>

	<br>
	<a href="create.php">Create New User |</a>
	<a href="userlist.php">View User List |</a>
	<a href="logout.php">Logout</a>


	</center>
</fieldset>	
<br>
<center>Copyright@2021</center>
		
</body>
</html>