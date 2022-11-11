<?php
include("connection.php");
error_reporting(0);

$user_id=$_GET['ui'];
$query = "DELETE FROM users WHERE user_name = 'user_name'";

$result=mysqli_query($con,$query); 

if($result)
{
	echo "Record Successfully Deleted";
}
else
{
	echo "Action Failed";
}
?>