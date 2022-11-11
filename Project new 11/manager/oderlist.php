<html>
<style type="text/css">
table, th, td {
  padding: 5px;
}
table {
  border-spacing: 15px;
}
</style>

<body>
<table border="3" align="center" width=65%;">
<tr>
<td align="right">
     <img src="logo.png" align="left" height="65" width="150" border="1"><b><center>PHP RESTAURANT</center></b> 
	 
	 

     <a href="managerdashboard.php">Home |</a>
<a href="../index.php">Logout |</a>
<a href="managerdashboard.php">Back </a>
</td>
</tr>
<tr>
<td>
<br>
<br>
&nbsp;&nbsp;&nbsp;
<legend><b>Orderlist :</b></legend><br>

<form methods="" action"">

<table>
    <tr>
    <td>Serial no :
    <select name="=serial no">
    <option value="01">01</option>
    <option value="02">02</option>
    <option value="03">03</option>
    <option value="04">04</option>
    <option value="05">05</option>
    <option value="06">06</option>
    <option value="07">07</option>
    <option value="08" selected>01</option>
    </select>
    </td>
    </tr>
    <table>
    <tr>
    <td>Product name :
    <select name="orderlist">
    <option value="Water">Water</option>
    <option value="Pepsi">Pepsi</option>
    <option value="Chicken">Chicken</option>
    <option value="Bread">Bread</option>
    <option value="Chilli">Chilli</option>
    <option value="Cake">Cake</option>
    <option value="Tissue">Tissue</option>
    <option value="Fruits" selected>Water</option>
    </select>
    </td>
    </tr>
	
	<table>
    <tr>
    <td>Price :
    <select name="price">
    <option value="15">15</option>
    <option value="20">20</option>
    <option value="120">120</option>
    <option value="4">4</option>
    <option value="20">20</option>
    <option value="120">120</option>
    <option value="40">40</option>
    <option value="130" selected>15</option>
    </select>
    </td>
    </tr>
	
	<table>
    <tr>
    <td>Quantity :
    <select name="quantity">
    <option value="40 pc">40 pc</option>
    <option value="25 pc">25 pc</option>
    <option value="20 kg">20 kg</option>
    <option value="30 pc">30 pc</option>
    <option value="10 kg">10 kg</option>
    <option value="20 pc">20 pc</option>
    <option value="20 pc">20 pc</option>
    <option value="15 kg" selected>40 pc</option>
    </select>
    </td>
    </tr>
	
	<table>
    <tr>
    <td>Supplier :
    <select name="supplier">
    <option value="Zaman">Zaman</option>
    <option value="Shan">Shan</option>
    <option value="Saimon">Saimon</option>
    <option value="Moin">Moin</option>
    <option value="Fuad">Fuad</option>
    <option value="Fahim">Fahim</option>
    <option value="Kazi">Kazi</option>
    <option value="Uz" selected>Zaman</option>
    </select>
    </td>
    </tr>
	
	<table>
    <tr>
    <td>Delivery date :
    <select name="delivery date">
    <option value="12-03-21">12-03-21</option>
    <option value="12-03-21">12-03-21</option>
    <option value="13-03-21">13-03-21</option>
    <option value="13-03-21">13-03-21</option>
    <option value="14-03-21">14-03-21</option>
    <option value="14-03-21">14-03-21</option>
    <option value="15-03-21">15-03-21</option>
    <option value="14-03-21" selected>12-03-21</option>
    </select>
    </td>
    </tr>
	
	<table>
    <tr>
    <td>Delivery time :
    <select name="delivery time">
    <option value="10 AM">10 AM</option>
    <option value="12 PM">12 PM</option>
    <option value="8 AM">8 AM</option>
    <option value="8.30 AM">8.30 AM</option>
    <option value="7.30 AM">7.30 AM</option>
    <option value="4.30 AM">4.30 AM</option>
    <option value="1.30 PM">1.30 PM</option>
    <option value="12.30 PM" selected>10 AM</option>
    </select>
    </td>
    </tr>
	
    <br>
    <tr>
    <td>
    <hr>
    <input type="submit" name="submit" value="Submit"><br>
    </td>            
    </tr>
<table border="1"align="center" width="30%"height="10%"> 
<tr align="center">
<td><b>Serial no</b></td>
<td><b>Product name</b></td>
<td><b>Price</b></td>
<td><b>Quantity</b></td>
<td><b>Supplier name</b></td>
<td><b>Delivery date</b></td>
<td><b>Delivery time</b></td>
<td><b>Action</b></td>



</tr>
<tr align="center">
<td>01</td>
<td>Water</td>
<td>15</td>
<td>40 pc</td>
<td>Zaman</td>
<td>12-03-21</td>
<td>10 AM</td>
<td><a href="cancel.php">Cancel</a></td>


</tr>

<tr align="center">
<td>02</td>
<td>Pepsi</td>
<td>20</td>
<td>25 pc</td>
<td>Shan</td>
<td>12-03-21</td>
<td>12 PM</td>
<td><a href="cancel.php">Cancel</a></td>


</tr>

<tr align="center">

<td>03</td>
<td>Chicken</td>
<td>120</td>
<td>20 kg</td>
<td>Saimon</td>
<td>13-03-21</td>
<td>8 AM</td>
<td><a href="cancel.php">Cancel</a></td>


</tr>

<tr align="center">
<td>04</td>
<td>Bread</td>
<td>4</td>
<td>50 pc</td>
<td>Moin</td>
<td>13-03-21</td>
<td>8.30 AM</td>
<td><a href="cancel.php">Cancel</a></td>

</tr>

<tr align="center">
<td>05</td>
<td>Chilli</td>
<td>20</td>
<td>10 kg</td>
<td>Fuad</td>
<td>14-03-21</td>
<td>7.30 AM</td>
<td><a href="cancel.php">Cancel</a></td>
</tr>



<tr align="center">
<td>06</td>
<td>Cake</td>
<td>120</td>
<td>20 pc</td>
<td>Fahim</td>
<td>14-03-21</td>
<td>4.30 AM</td>
<td><a href="cancel.php">Cancel</a></td>


</tr>

<tr align="center">
<td>07</td>
<td>Tissue</td>
<td>40</td>
<td>20 pc</td>
<td>Kazi</td>
<td>15-03-21</td>
<td>1.30 PM</td>
<td><a href="cancel.php">Cancel</a></td>


</tr>

<tr align="center">
<td>08</td>
<td>Fruits</td>
<td>130</td>
<td>15 kg</td>
<td>Uz</td>
<td>14-03-21</td>
<td>12.30 PM</td>
<td><a href="cancel.php">Cancel</a></td>


</tr>

</td>

</td>




<br>
<br>
</td>
</tr>
<tr>
<table border="1"align="center" width="100%"height="10%"> 
<p align="center">Copyright &#169; 2021</p>
</td>
</tr>

</body>


</html>









































