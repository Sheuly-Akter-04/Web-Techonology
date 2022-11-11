
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<fieldset>
			<legend>UPDATE</legend>
			<table>
				<tr>
					<td>Date :</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>Current cash :</td>
					<td><input type="text" name="text" value=""></td>
				</tr>

				<tr>
					<td>Supplier payout :</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>Delivery payout :</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>Total pending amount:</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>S- pending amount:</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>D- pending amount:</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>Net profit:</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				<tr>
					<td>Net loss:</td>
					<td><input type="text" name="text" value=""></td>
				</tr>
				
				<tr>
					<td></td>
					<td>
						<input type="submit" name="signup" value="Updated"> 
						<a href="../managerdashboard.php">Back </a>
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
