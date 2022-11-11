<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="50" width="250" border="1"> 

<a href="">Home |</a>
<a href="">Login |</a>
<a href="">Registration</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="name" ><br><br>

    <label>Password : </label>
    <input type="password" id="password" name="password"> <br>
    
    </div>


    <hr><br>

    <input type="checkbox" id="checkbox" name="checkbox" value="remember me">
    <label>Remember Me</label><br><br>

    <input type="submit" name="submit" id="submit" value="Submit">
    
    <a href="">Forgot Password?</a>
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
</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2027</p>
</td>
</tr>
</body>


</html>

















