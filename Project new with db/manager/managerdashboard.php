<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Manager Dashboard</title>
</head>
<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
<body>

<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="75" width="195" border="1"><b><center>PHP RESTAURANT</center></b><br>
     
<a href="managerdashboard.php">Home |</a>
<a href="../index.php">Logout </a>
</td>
</tr>
<tr>
<td>
<br>
<center><div><h1>Welcome! <b><?php echo $_SESSION['name']; ?></b> and ID: <b><?php echo $_SESSION['userid'];?></b> Have a nice day.</h1></div> </center>
<br>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
	<p><b>DESHBOARD :</b></p>
			<hr>
			<ul>
		
			<?php
                include '../dbcon.php';

                $selectquery = "select * from user";
                $query = mysqli_query($con,$selectquery);
                $nums = mysqli_num_rows($query);

                if($res = mysqli_fetch_array($query))
                    {
                ?>
			<li><a href="managerprofile.php?userid=<?php echo $res['userid'] ?>">View Profile</a></li>
			<?php
                        }
            ?>
            <li> <a href="manageinformation.php">Staff information</a></li>
            <li> <a href="managerresponsibility.php">Manager responsibilities</a></li>
			
      <!--      <li> <a href="admininformation.php">Admin Information</a></li> -->
			<li> <a href="supplierpreserve.php">Supplier preserve</a></li>
            <li> <a href="deliverypreserve.php">Delivery preserve</a></li>
            <li> <a href="oderlist.php">Orderlist</a></li>
			<li> <a href="account.php">Account</a></li>
			<li> <a href="inventory.php">Inventory</a></li>
			
					</ul>
</form>			
<br>
<br>


<br>

</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>

</body>


</html>

















