<?php 
include_once('connection.php');  

if(isset($_POST['update']))
{

	$query = "UPDATE products SET pname = '$_POST[pname]',buy_price = '$_POST[buy_price]',sel_price = '$_POST[sel_price]' WHERE pname = '$_POST[pname]'";
	$result=mysqli_query($con,$query); 

if($result)
{
	echo "Successfully Updated";
}
else
{
	echo "Fail to update";
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
			<legend>EDIT PRODUCT</legend>

			Name <br><input id="text" type="text" name="pname"><br><br>
			Buying Price <br><input id="text" type="price" name="buy_price"><br><br>
			Selling Price <br><input id="text" type="price" name="sel_price"><br><br>

			<input id="button" type="submit" name="update" value="Update"><br><br>

			<a href="product.php">Back</a><br><br>
		</fieldset>
		</form>

</body>
</html>