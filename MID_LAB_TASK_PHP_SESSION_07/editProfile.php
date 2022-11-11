<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Edit Profile</title>
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
                    <legend>EDIT PROFILE</legend>
                    <form action="editinfo.php" method="post">
                        <table>
                            <tr>
                                <td>Name : </td>
                                <td>
                                    <input type="text" name="changeName">
                                </td>

                            </tr>
                            <tr>
                                <td>Email : </td>
                                <td>
                                    <input type="text" name="changeEmail">
                                </td>

                            </tr>
                            <tr>
                                <td> Gender : </td>
                                <td>
                                    <input type="radio" name="radio" value="male">Male
                                    <input type="radio" name="radio" value="female">Female
                                    <input type="radio" name="radio" value="other">Other
                                </td>

                            </tr>
                            <tr>
                                <td>Date of Birth : </td>
                                <td>
                                    <input type="text" name="changeDOB">
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
                                    <?php if($updateinfo == 1){ $updateinfo = 0 ; echo "Info Updated";}      ?>
                                </td>
                            </tr>

                        </table>
                    </form>
                </fieldset>
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

session_start();
$user = $_SESSION['current_user'];
$updateinfo = $_SESSION['updateInfoDone'];

if ( $updateinfo == 1 ){
    $updateinfo = 1 ;
}else
$updateinfo = 0;

$user_name = $user['user_name'];
$gender = $user['gender'];
$date_birth = $user['date_barth'];
$email =  $user['email'];



?>

</body>

</html>
