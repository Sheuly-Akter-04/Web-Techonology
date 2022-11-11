<?php 
include_once('connection.php'); 
$query="select * from users"; 
$result=mysqli_query($con,$query); 
?> 
<!DOCTYPE html> 
<html> 
	<head> 
		<title> Database </title> 
	</head> 
	<body> 
	<table align="center" border="1px" style="width:600px; line-height:40px;"> 
	<tr> 
		<th colspan="5"><h2>User List</h2></th> 
		</tr> 
			  <th> UserID </th> 
			  <th> UserName </th> 
			  <th> Email </th> 
			  <th  colspan="2">ACTION</th> 
			  
		</tr> 
		
		<?php while($rows=mysqli_fetch_assoc($result)) 
		{ 
		?> 
		<tr> <td><?php echo $rows['user_id']; ?></td> 
		<td><?php echo $rows['user_name']; ?></td> 
		<td><?php echo $rows['email']; ?></td>
		<td><a href="edit.php?ui=$result[user_id]"> EDIT</td>
		<td><a href="delete.php?ui=$result['user_id']"> DELETE</td>
		</tr> 

	<?php 
               } 
          ?> 

	</table> 
	<center><a href="index.php">Back</a><br></center>
	</body> 
	</html>