<?php
  session_start();
?>
<html>

<body>
<?php
    
      include 'dbcon.php';
      if(isset($_POST['submit']))
      {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username_search = "select * from user where username='$username'";
        $query = mysqli_query($con,$username_search);

        $username_count = mysqli_num_rows($query);

        if($username_count)
        {
          $username_pass = mysqli_fetch_assoc($query);

          $db_pass = $username_pass['password'];
          
          $_SESSION['name'] = $username_pass['name'];
          $_SESSION['userid'] = $username_pass['userid'];
           
          if($db_pass)
          {
            ?>
                  <script>
                      alert("Login Complete!");
                      </script>
                      <?php
                      header('location:../Project new/manager/managerdashboard.php');
          }
          else
          {
             ?>
                  <script>
                      alert("Wrong password");
                      </script>
                      <?php
          }

        }
        else
        {
          ?>
                  <script>
                      alert("Invalid Username!");
                      </script>
                      <?php
        }
      }

    ?>





<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="../Project new/manager/logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br> 

<a href="index.php">Home |</a>
<a href="registration.php">Registration |</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Manager LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="username" ><br><br>

    <label>Password : </label>
    <input type="password" id="password" name="password"> <br>
    
    </div>


    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" value="Login">
    
    <a href="forgetpass.php">Forgot Password</a>
<br><br>
</fieldset>
</form>

<br>
<br>

</a>
</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
</body>


</html>

















