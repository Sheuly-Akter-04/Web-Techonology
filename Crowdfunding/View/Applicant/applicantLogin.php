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
  <!-- Database WOrk -->
<?php
    
    include '../../dbcon.php';
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
                    header('location:applicantProfile.php');
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
  <!-- Database WOrk -->


  <!-- ...............................Header Start....................... -->
  
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
            <a href="../../logintype.php">Login</a>
            <a href="../../regtype.php">Registration</a>
            <a href="../../aboutus.php">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Header Close..................... -->
    <!-- .................................Main Content..................... -->
    <fieldset>
    <form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
      <fieldset>
        <legend><b>Login as Applicant</b></legend>
        
          <table align="center">
            <tr>
                <td>User Name </td>
                <td>:<input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password </td>
                <td>:<input type="password" name="password"></td>
            </tr>
          </table>	
            <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                  <a href="./applicantForgotPassword.html">Forgot Password</a>
                </td>
                
              </tr>
            
                
            </table>  
      </fieldset>
    </form>
  </fieldset>
  
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
 
  <!-- .................................Footer Close..................... -->

</body>
</html>