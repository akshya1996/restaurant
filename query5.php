<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";
session_start();

// Create connection
$mysqli = new mysqli("localhost","root","","testdb");
// Check connection


$query2 = "select A.itemid, B.itemname, B.nutriinfo
from menu_order A, menu B
where A.itemid=B.itemid
group by A.itemid, B.itemid, B.itemname, B.nutriinfo
having count(A.itemid)=(select max(sub.mycount)
from (select itemid, count(itemid) mycount
from menu_order 
group by itemid)sub)";
$result=$mysqli->query($query2);






if ($result = $mysqli->query($query2)) {

$count=0;
    /* fetch object array */
    while ($row = $result->fetch_row()) {
      $_SESSION['itemid'][$count]=$row[0];
	  $_SESSION['itemname'][$count]=$row[1];
	  $_SESSION['nutriinfo'][$count]=$row[2];
	  $count++;
	  
		
    }
$mysqli->close();}
?>
<table style="width:100%" class="table table-hover col-sm-8">
<thead>
  <tr>
    <th>ITEMID</th>
    <th>ITEM NAME</th>
     <th>NUTRI INFO</th>	
  </tr>
   </thead>
    <tbody>
 <?php for($i=0;$i<$count;$i++)
 { 
    echo '<tr>';
    echo '<td>'.$_SESSION['itemid'][$i].'</td>';
    echo '<td>'.$_SESSION['itemname'][$i].'</td>';
	echo '<td>'.$_SESSION['nutriinfo'][$i].'</td>';
  echo '</tr>';
  
 }
 ?>
 </tbody>
</table>
</body>
</html>