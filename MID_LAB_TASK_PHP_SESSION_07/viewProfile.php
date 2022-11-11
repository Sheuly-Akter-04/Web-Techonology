<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>View Profile</title>
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
               <legend>Profile</legend>
               <table>
                   <tr>
                       <td>Name : </td>
                       <td><?php echo $user_name ?> </td>
                       <td rowspan="5" >
                       <img width="40%" src="user.png"><br>
                           <a href="">Change Profile Picture</a>
                       </td>
                   </tr>
                   <tr>
                   <td>Email : </td>
                       <td><?php echo $email ?> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td> Gender : </td>
                       <td><?php echo $gender ?> </td>
                       <td></td>
                   </tr>
                   <tr>
                   <td>Date of Birth : </td>
                       <td><?php  for(  $i = 0 ; $i < count($date_birth) ; $i++){echo $date_birth[$i]; if( $i !=2 ) { echo "/";  } } ?> </td>
                       <td></td>
                    </tr>
                   <tr>
                   <td>
                   <a href="">Edit Profile</a>
                   </td>

                       <td></td>
                       <td></td>
                   </tr>

               </table>
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
$user = $_SESSION['current_user'] ;

$user_name = $user ['user_name'];
$gender = $user ['gender'];
$date_birth = $user ['date_barth'];
$email =  $user ['email'];

?>
</body>

</html>
