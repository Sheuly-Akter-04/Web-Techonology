
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<fieldset>
			<legend>EDIT USER </legend>
			<table>
				<tr>
					<td>User name :</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Edited"> 
						<a href="../managerdashboard.php">Back </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
