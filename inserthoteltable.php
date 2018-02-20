<!DOCTYPE html>
<html>

<body>
<!-- your html form -->
<form method="POST">
	Tableno:
	<input type="text" name="itemid">
	<br />
	Status:
	<select name="status">
	 <option value="reserved">Reserved</option>
	 <option value="unreserved">Unreserved</option>
	 </select>
	<br />
	
	<input type="submit" name="sub">
</form>
<!--<a href="register.php">Register</a> -->


<?php 
$db = new mysqli("localhost","root","","testdb");
	// this will trigger when submit button click
	if(isset($_POST['sub'])){
		$db = new mysqli("localhost","root","","testdb");
		$query = "INSERT INTO HotelTable VALUES('".$_POST['itemid']."','".$_POST['status']."')";
         
		// execute query
		$sql = $db->query($query);
		
		if($sql==1)
			echo "Row Successfully Added";
		else
			echo "Enter Valid Values";
		
		
		
		
	}
	
?>
</body>
</html>