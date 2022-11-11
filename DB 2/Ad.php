<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$pname = $_POST['pname'];
		$buy_price = $_POST['buy_price'];
		$sel_price = $_POST['sel_price'];

		if(!empty($pname) && !empty($buy_price) && !is_numeric($pname))
		{

			//save to database
			//$user_id = random_num(20);
			$query = "insert into products (pname,buy_price,sel_price) values ('$pname','$buy_price','$sel_price')";

			mysqli_query($con, $query);

			header("Location: Ad.php");
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
	<title>ADD PRODUCT</title>
</head>
<body>

	
	
		
		<form method="post">
			<fieldset>
			<legend>ADD PRODUCT</legend>

			Name <br><input id="text" type="text" name="pname"><br><br>
			Buying Price <br><input id="text" type="price" name="buy_price"><br><br>
			Selling Price <br><input id="text" type="price" name="sel_price"><br><br>
			<input type="checkbox" ><span>Display</span><br><br>

			<input id="button" type="submit" value="Save"><br><br>
			<a href="product.php">Product List</a><br><br>

		</fieldset>
		</form>
		

</body>
</html>