<html>


<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b><br> 

<a href="index.php">Home |</a>
<a href="registration.php">Registration |</a>
</td>
</tr>
<tr>
<td>
<br>
<br>
<form method="post" action="../Project new/controller/supplierlogincheck.php" onsubmit="return v3()">
<fieldset>

    <legend style="font-family: Arial, Helvetica, sans-serif;"><b>SUPPLIER LOGIN</b></legend>

    <div class="pp">

    <label>User Name : </label>
    <input type="text" id="name" name="username" >  &nbsp;
    <span id="errName" style="color:red"></span> <!--For JS error message-->
    
    <br><br>

    <label>Password : </label>
    <input type="password" id="password" name="password"> &nbsp;
    <span id="errPass" style="color:red"></span>
    
    <br>
    
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




<script>
    function get(id)
    {
        return document.getElementById(id);
    }
    function v3()
    {
        var name = get("name").value;
        
         var pass = get("password").value;
      
        var validate = true;
        if(name=="")
        {
            validate = false;
           get("errName").innerHTML="Please Enter User Name";
            get("name").focus();
        }
        else
        {
            get("errName").innerHTML="";
        }

        if(pass=="")
        {
            validate = false;
            get("errPass").innerHTML="Please Enter Password";
            get("password").focus();
        }
        else
        {
            get("errPass").innerHTML="";
        }



        return validate;

    }


</script>










</body>


</html>

















