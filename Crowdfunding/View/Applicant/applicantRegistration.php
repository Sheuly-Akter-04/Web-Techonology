<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>FundBD |Crowdfunding</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
    <!-- Registration Done by Database --> 
    <?php
    include '../../dbcon.php';
    if(isset($_POST['submit']))
    {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $username = mysqli_real_escape_string($con,$_POST['username']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $repassword = mysqli_real_escape_string($con,$_POST['repassword']);
      $occupation = mysqli_real_escape_string($con,$_POST['occupation']);
      $gender = mysqli_escape_string($con,$_POST['gender']);
      $dob = date('y-m-d', strtotime($_POST['date']));
      $gender = mysqli_escape_string($con,$_POST['gender']);
      $yearlyIncome = mysqli_escape_string($con,$_POST['yearlyIncome']);

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
          $insetquery = "insert into user(name, username, email, password, repassword, occupation, gender, dob, income) values('$name','$username','$email','$password','$repassword', '$occupation', '$gender', '$dob', '$yearlyIncome')";

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




    <!-- Regustration Code finish --> 


    <!-- .................................Header Start..................... --> 
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="../../index.php">Home</a>
            <a href="../../loginType.php">Login</a>
            <a href="../../regType.php">Registration</a>
            <a href="../../aboutUS.php">About Us</a>
        </tr>
      </table>
    </fieldset>
          <!-- ...............................Header Close....................... -->



          <!-- .................................Main Content..................... -->
    <fieldset>
  <form method="post" action="" >
    <fieldset>
    
        <legend><b>Applicant Registration</b></legend><br>
    
      
        <label>Name : </label>
        <input type="text" name="name" ><br>
        <hr><br>
    
        <label>Email :</label>
        <input type="text"  name="email" ><br>
        <hr><br>
    
        <label>User Name : </label>
        <input type="text"  name="username" ><br>
        <hr><br>
    
        <label>Password :  </label>
        <input type="password"  name="password" ><br>
        <hr><br>
    
        <label>Confirm Password : </label>
        <input type="password"  name="repassword" ><br>
        <hr><br>
    
        <label>Occupation :</label>
        <input type="text" name="occupation" ><br>
        <hr><br>
    
        <fieldset>
    
        <legend>Gender</legend>
    
        
    
        <input type="radio" name="gender" value="Male">
        <label class="male">Male</label>
    
        <input type="radio" name="gender" value="Female">
        <label class="female">Female</label>
    
        <input type="radio" name="gender" value="Other">
        <label class="other">Other</label>
    
        </fieldset>
    
        <hr>
    
    
    
        <fieldset>

        <legend style="font-family: Arial, Helvetica, sans-serif;">Date Of Birth</legend>

        <div class="pp2">

        <input type="date" name="date" placeholder="dd/mm/yyyy">


        </fieldset>
    
    
        <hr>
		<fieldset>
    
        <legend>Yearly Income</legend>
    
        
    
        <input type="radio" name="yearlyIncome" value="Below 10000">
        <label class="Below 10000">Below 10000</label>
    
        <input type="radio" name="yearlyIncome" value="10000 to 50000">
        <label class="10000 to 50000">10000 to 50000</label>
    
        <input type="radio" name="yearlyIncome" value="More Than 50000">
        <label class="More Than 100000">More Than 100000</label>
    
        </fieldset>
    
        <hr>
    
        <input type="submit" name="submit" id="submit" value="Submit">
        
        <br><br>
    </fieldset>
    </form>
</fieldset>
<fieldset>
    <!-- .................................Main Content..................... -->

    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
    <!-- .................................Footer Close..................... -->
  

</body>
</html>