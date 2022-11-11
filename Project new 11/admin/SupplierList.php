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
             <center><img src="../C.png" height="100px" width="150px">
<table  align="right"  ><br> This is a Supplier List</center>
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
		
		<center><form method="POST" action="../controller/supcheck.php" >
		<fieldset >
			<legend >Supplier Info</legend>
			 
			 <table>
				
						<tr>
						<td>Name</td>
						<td><input type="text" name="name">
						</td>
                         </tr>
                         <tr>
                         	<td>Phone</td>
                         	<td><input type="text" name="phone"></td>
                         </tr>
                         <tr>
                         	<td>E-mail</td>
                         	<td><input type="email" name="email"></td>
                         </tr>
						 <tr>
                         	<td>Address</td>
                         	<td><input type="text" name="address"></td>
                         </tr>
						<td>
							<input type="submit" name="submit" value="Submit">
							<a href="ShowSupList.php">Show</a>
							
						</td>
					</tr>
                     </fieldset>
                 </form>
                 </table>

</center>
</td>
         <tr>
			<td colspan="2" align="center" height="30px">
				Copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>