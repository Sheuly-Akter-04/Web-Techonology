<?php 
include_once('connection.php');  

if(isset($_POST['update']))
{

	$query = "UPDATE users SET user_name = '$_POST[user_name]',password = '$_POST[password]',repass = '$_POST[repass]',email = '$_POST[email]' WHERE user_name = '$_POST[user_name]'";
	$result=mysqli_query($con,$query); 

if($result)
{
	echo "Record Successfully Updated";
}
else
{
	echo "Action Failed";
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>EDIT</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>Update</legend>

			USERNAME: <input id="text" type="text" name="user_name"><br><br>
			PASSWORD: <input id="text" type="password" name="password"><br><br>
			RE-PASSWORD: <input id="text" type="password" name="repass"><br><br>
			E-MAIL: <input id="text" type="email" name="email"><br><br>

			<input id="button" type="submit" name="update" value="Update"><br><br>

			<a href="userlist.php">Back</a><br><br>
		</fieldset>
		</form>
		<br>
<center>Copyright@2021</center>

</body>
</html>