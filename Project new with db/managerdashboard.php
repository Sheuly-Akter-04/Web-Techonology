<!DOCTYPE html>
<html>


<body>
<?php
	
	$title = "Home Page";
	include('../Project new/admin/header.php');
?>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br>
     
<a href="managerdashboard.php">Home |</a>
<a href="login.php">Logout </a>
</td>
</tr>
<tr>
<td>
<br>
<center><h3>Welcome Back, <?php echo $_SESSION['current_user']['username']; ?></h3></center>
<br>
<p><b>DESHBOARD :</b></p>
			<hr>
			<ul>
            <li> <a href="../Project new/manager/managerviewprofile.php">View Profile</a></li>
            <li> <a href="../Project new/manager/changepassword.php">Change password</a></li>
            <li> <a href="../Project new/manager/manageinformation.php">Managers information</a></li>
            <li> <a href="../Project new/manager/managerresponsibility.php">Manager responsibilities</a></li>
			<li> <a href="../Project new/manager/admininformation.php">Admin Information</a></li>
			<li> <a href="../Project new/manager/supplierpreserve.php">Supplier preserve</a></li>
            <li> <a href="../Project new/manager/deliverypreserve.php">Delivery preserve</a></li>
            <li> <a href="../Project new/manager/oderlist.php">Orderlist</a></li>
			<li> <a href="../Project new/manager/account.php">Account</a></li>
			<li> <a href="../Project new/manager/inventory.php">Inventory</a></li>
           
					</ul>
			
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

















