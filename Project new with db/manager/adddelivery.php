<html>
<head>
<title>Registration Page</title>
</head>
<body>
<?php 
    include '../dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $phone = mysqli_real_escape_string($con,$_POST['phone']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $address = mysqli_real_escape_string($con,$_POST['address']);

      $usernamequery = "select * from delivery where username='$username'";
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
          $insetquery = "insert into delivery(name, username, phone, email, address) values('$name','$username','$phone','$email','$address')";

          $iquery = mysqli_query($con, $insetquery);
          if($con)
              {
                  ?>
                  <script>
                      alert("Bingo! Supplier added");
                      </script>
                      <?php
                      header('location:managerdashboard.php');
              }
              else
              {
                  ?>
                  <script>
                      alert("Something Wrong! DO it again. Thank you");
                      </script>
                      <?php
              }
        }
      }
  ?>



<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br>

     <a href="managerdashboard.php">Back</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="POST" action="">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>Add Delivery</b></legend>

    <div class="pp1">

    <label>Name : </label>
    <input type="text" name="name" ><br>
    <hr><br>

    <label>Email :</label>
    <input type="text" name="email" ><br>
    <hr><br>

    <label>User Name : </label>
    <input type="text" name="username" ><br>
    <hr><br>

    </div>


    <label>Phone Number: </label>
    <input type="text" name="phone" ><br>
    <hr><br>
    <label>Address : </label>
    <textarea name="address"></textarea>
    <hr><br>
 


    <input type="submit" name="submit" value="Add">
    
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

















