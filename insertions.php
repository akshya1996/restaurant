<?php 
$db = new mysqli("localhost","root","","testdb");
	// this will trigger when submit button click

 
$db = new mysqli("localhost","root","","testdb");
echo "im here";
$query1 = "Insert into menu_order values(1122336655,3,3,5,3)";
$query2 = "Insert into menu_order values(1155997766,4,4,5,3)";
$query3 = "Insert into menu_order values(2233115566,5,6,7,2)";
$query4 = "Insert into menu_order values(4455669933,6,5,7,3)";
$query5 = "Insert into menu_order values(4455669988,7,7,9,3)";
$query6 = "Insert into menu_order values(4455889977,8,11,8,2)";
$query7 = "Insert into menu_order values(4477442211,3,9,9,1)";
$query8 = "Insert into menu_order values(4477447744,4,9,9,3)";
$query9 = "Insert into menu_order values(4488996633,5,3,5,4)";
$query10 = "Insert into menu_order values(6655665566,6,8,9,4)";
$query11 = "Insert into menu_order values(7788994455,7,11,8,4)";
$query12= "Insert into menu_order values(8877994455,8,7,9,3)";
$query13= "Insert into menu_order values(7788994455,7,5,7,4)";



		// execute query
		$sql1 = $db->query($query1);
		$sql2= $db->query($query2);
		$sql3= $db->query($query3);
		$sql4= $db->query($query4);
		$sql5= $db->query($query5);
		$sql6= $db->query($query6);
		$sql7= $db->query($query7);
		$sql8= $db->query($query8);
		$sql9= $db->query($query9);
		$sql10= $db->query($query10);
		$sql1= $db->query($query11);
		$sql12= $db->query($query12);
		$sql13= $db->query($query13);
		
		
		
		if($sql12==1)
			echo "Row Successfully Added";
		else
			echo "Enter Valid Values";
		
		

	
?>