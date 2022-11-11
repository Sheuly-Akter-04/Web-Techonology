<html>
<head>
<title>Registration Page</title>
</head>
<body>
<?php
    include 'dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $repassword = mysqli_real_escape_string($con,$_POST['repassword']);
      $gender = mysqli_escape_string($con,$_POST['gender']);
      $dob = date('y-m-d', strtotime($_POST['date']));

      $usernamequery = "select * from user where username='$username'";
      $query = mysqli_query($con,$usernamequery);

      $unamecount = mysqli_num_rows($query);

      if($unamecount>0)
      {
        ?>
          <script>
          alert("Username has been Taken!");
          </script>
        <?php
      }
      else
      {
        if($password === $repassword)
        {
          $insetquery = "insert into user(name, username, email, password, repassword, gender, dob) values('$name','$username','$email','$password','$repassword', '$gender', '$dob')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Registration complete! Go to Login Page");
                      </script>
                      <?php
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }else{
          echo "Password are not matching!";
        }
      }
    }

?>




<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br>

     <a href="index.php">Home |</a>
<a href="login.php">Login |</a>
<a href="registration.php">Registration |</a>
<a href="aboutus.php">About us |</a>
<a href="contactus.php">Contract us </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Registration</b></legend>

    <div class="pp1">

    <label>Name : </label>
    <input type="text" id="name" name="name" ><br>
    <hr><br>

    <label>Email :</label>
    <input type="text" id="email" name="email" ><br>
    <hr><br>

    <label>User Name : </label>
    <input type="text" id="uname" name="username" ><br>
    <hr><br>

    <label>Password :  </label>
    <input type="password" id="pword" name="password" ><br>
    <hr><br>

    <label>Confirm Password : </label>
    <input type="password" id="conpword" name="repassword" ><br>
    <hr><br>

    </div>

    <fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;">Gender</legend>

    <div class="pp2">

    <input type="radio" name="gender" value="Male">
    <label class="male">Male</label>

    <input type="radio" name="gender" value="Female">
    <label class="female">Female</label>

    <input type="radio" name="gender" value="Other">
    <label class="other">Other</label>

    </fieldset>

    <hr>

    </div>


<div class="pp3">

<fieldset>

<legend style="font-family: Arial, Helvetica, sans-serif;">Date Of Birth</legend>

<div class="pp2">

<input type="date" name="date" placeholder="dd/mm/yyyy">


</fieldset>


</div>


    <hr>

    <input type="submit" name="submit" value="Registration">
    
    <input type="reset" name="reset" id="reset" value="Reset"><br><br>
</fieldset>
</form>

<br>
<br>
</td>
</tr>
<tr>
<td>
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
</body>


</html>

















