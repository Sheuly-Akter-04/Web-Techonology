<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Publix Home</title>
</head>

<body>
    <table border="3" align="center" width=45%;">
        <tr>
            <td align="left" colspan="3">
                <img src="logo.png" align="left" height="50" width="190" border="1"> 
                <div align="right">
                    Logged in as 
					<a href="">Bob |</a>
                    <a href="">Logout </a>
                </div>
            </td>
        </tr>


        <tr>
            <td align="center" rowspan="3" >
			<p>Account</p>
			<hr>
			<ul>
            <li> <a href="Dashbord.php" target="_blank">Dashbord</a></li>
            <li> <a href="Profile.php" target="_blank">View Profile</a></li>
            <li> <a href="Edit_profile.php" target="_blank">Edit Profile</a></li>
            <li> <a href="change_pic.php" target="_blank">Change Profile Picture</a></li>
            <li> <a href="chang_pass.php" target="_blank">Change Password</a></li>
            <li> <a href="Login.html" target="_blank">Logout</a>
					
					</ul>
            </td>
            <td width="65%" rowspan="3">
               <fieldset>
          <legend style="font-family: calibri;"><b>PROFILE PICTURE</b></legend>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
			
     <img src="user.png" align="left" height="100" width="100" border="1"> 

	 
            
            <input type="file" name="file">
            <hr>
            <input type="submit" name="submit" value="Submit"> <br>
            </form>
        
        </fieldset>
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td align="center" colspan="2" >
                Copyright &#169; 2017
            </td>
        </tr>
    </table>
	<?php

    

?>
</body>

</html>
