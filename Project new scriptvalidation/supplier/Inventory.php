<!DOCTYPE html>
<html>
<body>

<h2>INVENTORY</h2>

<ul>
  <li>Fast Food</li>
  <li>Snacks</li>
  <li>Heavy Items</li>
  <li>Lite Items</li>
  <li>Package Items</li>
  <li>Regular Items</li>
  <li>Drinks</li>
</ul>  

<h1>Select Category from Inventory</h1>

<p>The selected items are used to create a drop-down list.</p>

<form action="#">
  <label for="Items">Choose a Item:</label>
  <select name="Items" id="Items">
    <option value="Fast Food">Fast Food</option>
    <option value="Snacks">Snacks</option>
    <option value="Lite Items">Lite Items</option>
    <option value="Package Items">Package Items</option>
	<option value="Regular Items">Regular Items</option>
	<option value="Drinks">Drinks</option>
  </select>
  <br><br>
  <input type="submit" value="Submit">
</form>

<p>Click the "Submit" button and the form-data will be sent to a page on the 
server called "item_page.php".</p>

</body>
</html>