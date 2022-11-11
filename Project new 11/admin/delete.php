
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<fieldset>
			<legend>EDIT User</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="N/A"></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Delete"> 
						<a href="userlist.php">Back</a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
