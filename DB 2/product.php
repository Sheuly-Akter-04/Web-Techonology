<?php 
include_once('connection.php'); 
$query="select * from products"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> DB </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>Product List</h2></th> 
		</tr> 
			  <th> Name </th> 
			  <th> Buy Price </th> 
			  <th> Sell Price </th> 
			  <th  colspan="2">ACTION</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['pname']; ?></td> 
		<td><?php echo $rows['buy_price']; ?></td> 
		<td><?php echo $rows['sel_price']; ?></td>
		<td><a href="edit.php?pi=$result[p_id]"> EDIT</td>
		<td><a href="delete.php?pi=$result['p_id']"> DELETE</td>
		</tr> 

	<?php 
               } 
          ?> 

	</table> 
	<center><a href="Ad.php">Back</a><br></center>
	</body> 
	</html>