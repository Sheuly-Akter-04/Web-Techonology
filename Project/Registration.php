<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br>

<a href="Home page.html">Home |</a>
<a href="Login.html">Login |</a>
<a href="Contract us.html">Contract us </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form align="center" method="post" action="../Project/Controller/regCheck.php">
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
    <input type="text" id="uname" name="uname" ><br>
    <hr><br>

    <label>Password :  </label>
    <input type="password" id="pword" name="pword" ><br>
    <hr><br>

    <label>Confirm Password : </label>
    <input type="password" id="conpword" name="conpword" ><br>
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

<input type="text" id="date" name="date" size="5"> /
<input type="text" id="month" name="month" size="5"> /
<input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>


</fieldset>


</div>


    <hr>

    <input type="submit" name="submit" id="submit" value="Submit">
    
    <input type="reset" name="reset" id="reset" value="Reset"><br><br>
</fieldset>
</form>

<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") 
   {
     if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $email = $_POST['email'];
           $uname = $_POST['uname'];
           $pword = $_POST['pword'];
           $conpword = $_POST['conpword'];
           $gender = $_POST['gender'];
           $date = $_POST['date'];
           $month = $_POST['month'];
           $year = $_POST['year'];
           
           if(empty($name))
           {
               echo "Name is empty ";
           
           }
           if(empty($uname))
           {
               echo "User Name is empty ";
           
           }
           if($pword != $conpword)
           {
               echo "Your password doesn't match ";
           
           }
           if(empty($date))
           {
               echo "Date is empty! ";
           
           }
           if(empty($month))
           {
               echo "Month is empty! ";
           
           }
           if(empty($year))
           {
               echo "Year is empty! ";
           
           }
           else 
           {
               echo "Name: $name, User Name : $uname, You are : $gender, Your DOB is: $date/$month/$year";
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
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>
</body>


</html>

















