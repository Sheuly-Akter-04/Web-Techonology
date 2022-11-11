<?php
include_once("connection.php");
error_reporting(0);

$p_id=$_GET['pi'];
$query = "DELETE FROM products WHERE p_id = 'p_id'";

$result=mysqli_query($con,$query); 

if($result)
{
	echo "Deleted from the record";
}
else
{
	echo "Fail to delete";
}
?>