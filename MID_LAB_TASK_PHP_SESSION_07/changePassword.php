<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Change Password</title>
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
               <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>CHANGE PASSWORD</b></legend>

    <div class="pp">

    <label>Current Password : </label>
    <input type="password" id="currpword" name="currpword" ><br><br>

    <label style="color: green;">New Password : </label>
    <input type="password" id="npword" name="npword" ><br><br>

    <label style="color: red;">Retype New Password : </label>
    <input type="password" id="Rnpword" name="Rnpword" ><br>

    </div>

    


    <hr><br>

    <input type="submit" name="submit" id="submit" value="Submit">

</fieldset>
</form>
            </td>
        </tr>
        <tr></tr>
        <tr></tr>
        <tr>
            <td align="center" colspan="2" >
                Copyright &#169; 2027
            </td>
        </tr>
    </table>
	<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {​​​​​​​
      if(isset($_POST['submit']))
        {​​​​​​​
            $currentpass = $_POST['currentpass'];
            $newpword = $_POST['newpword'];
            $Rnewpword  = $_POST['Rnewpword'];
            if($currentpass == $newpword)
            {​​​​​​​
                echo "Please use a New Password!";
            }​​​​​​​
            if($Rnewpword != $newpword)
            {​​​​​​​
                echo "Your New Password doesn't match!";
            }​​​​​​​
            else
            {​​​​​​​
                echo "Your Password has been changed!";
            }​​​​​​​
        }​​​​​​​
    }​​​​​​​   

?>
</body>

</html>
