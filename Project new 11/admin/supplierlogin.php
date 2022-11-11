<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br> 

     <a href="index.php">Home |</a>
<a href="registration.html">Registration |</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="post" action="Menu.html">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>SUPPLIER LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="name" ><br><br>

    <label>Password : </label>
    <input type="password" id="password" name="password"> <br>
    
    </div>


    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" id="submit" value="Login">
    
    <a href="forgetpass.php">Forgot Password</a>
<br><br>
</fieldset>
</form>

<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") 
        {
          if(isset($_POST['submit']))
            {
              $name = $_POST['name'];
              $password = $_POST['password'];
              if (empty($name || $password)) 
              {
                echo "Your User Name or Password is empty";
              } 
                else 
              {
                echo "Your user name is $name and password is $password";
              }
            }
        }
?>

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

















