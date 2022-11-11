
<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="50" width="250" border="1"> 

<a href="">Home</a>
<a href="">Login</a>
<a href="">Registration</a>
</td>
</tr>
<tr>
<td>
<br>
<?php include('Header.php');?>
    <form id="forgetpass" method="get" action="ForgotPassword.php">
            <fieldset style="border: black 2px solid;">
                <legend><b>FORGET PASSWORD</b></legend>

                <div class="forgetpass">
                    <label for="email"><b>Email</b></label>
                    : <input type="text" id="email" name="email" size="55px" placeholder="email*"><br>

                </div><br>
                <input class="button "type="submit" value="Search" name="submit">
                
            </fieldset>
        </form>
    <?php include('Footer.php');?>


</td>
</tr>
<tr>
<td>
<p>Copyright &#169; 2027</p>
</td>
</tr>
</body>


</html>

















