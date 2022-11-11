<!DOCTYPE html>
<html>
<head>
	<title>Public Home</title>
</head>
<body>
<?php
	
	$title = "Home Page";
	include('header.php');
?>


	<table border="1" align="center" width="790px">
		<tr>
			<td colspan="2">
             <center><img src="../K.png" height="100px" width="150px">
<table  align="right"  ><br> This is an Admin Panel.Please proceed with caution!</center>
	<tr>
		

</td>
</tr>
	</table>
</td>
</tr>
			</td>
		</tr>

		<tr>
			<td width="35%">
				<label><b><center>Menubar</center></b></label>
<hr>
				<table>	
				<tr>
					<td>
				<ul>
					<ol>
					<li><a href="AdminDashboard.php">Dashboard</a></li>
	<li><a href="UserList.php">User List</a></li>
	<li><a href="OrderList.php">Order List</a></li>
	<li><a href="SupplierList.php">Supplier List</a></li>
	<li><a href="DeliveryTeam.php">Delivery Team</a></li>
	<li><a href="logout.php">LogOut</a></li>
</ol>
</ul>
</td>
</table>
			<td>
		
		<center><h3>Welcome Back, <?php echo $_SESSION['current_user']['username']; ?></h3></center>
</td>
         <tr>
			<td colspan="2" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>