<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <title>Change Password</title>
</head>
<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>
<body>
<form method="POST" action="">
<?php

            include '../dbcon.php';

            $id = $_GET['userid'];
            $selectquery = "select * from user where userid='$id'";
            $newquery = mysqli_query($con,$selectquery);
            $result = mysqli_fetch_assoc($newquery);
        
            if(isset($_POST['submit']))
            {
            
            $id = $_GET['userid'];
            $password = mysqli_real_escape_string($con,$_POST['password']);
            $repassword = mysqli_real_escape_string($con,$_POST['repassword']);

            $updatequery = "update user set userid=$id, password='$password', repassword='$repassword' where userid=$id";
            $query = mysqli_query($con,$updatequery);
            
            if($query)
            {
                ?>
                    <script>
                        alert('Password Change!');
                    </script>
                <?php
                header('location:managerdashboard.php');
            }
            else
            {
                ?>
                    <script>
                        alert('Update Incomplete! DO it Again');
                    </script>
                <?php
            }

            }
        ?>
    <table border="3" align="center" width=65%;">
        <tr>
            <td align="left" colspan="3">
                <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
                <div align="right">
                <a href="managerdashboard.php">Home |</a>
                <a href="../index.php">Logout |</a>
                <a href="managerdashboard.php">Back </a>
                </div>
            </td>
        </tr>


        <tr>
            <td width="65%" rowspan="3">
               <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>CHANGE PASSWORD</b></legend>

    <div class="pp">

    <label>Current Password : </label>
    <input type="text" name="current" value="<?php echo $result['password'] ?>" disabled><br><br>

    <label style="color: black;">New Password : </label>
    <input type="text" name="password" ><br><br><br>

    <label style="color: black;">Retype New Password : </label>
    <input type="text" name="repassword" ><br><br>

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
                Copyright &#169; 2021
            </td>
        </tr>
    </table>
</form>
</body>

</html>
