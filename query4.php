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


$query2 = "select A.itemid, B.itemname, avg(rating) as Rating
from menu_order A, menu B
where A.itemid=B.itemid
and description like '%special%'
group by A.itemid, B.itemname
having avg(rating)>=4";
$result=$mysqli->query($query2);






if ($result = $mysqli->query($query2)) {

$count=0;
    /* fetch object array */
    while ($row = $result->fetch_row()) {
      $_SESSION['itemid'][$count]=$row[0];
	  $_SESSION['itemname'][$count]=$row[1];
	  $_SESSION['rating'][$count]=$row[2];
	  $count++;
	  
		
    }
$mysqli->close();}
?>
<table style="width:100%" class="table table-hover col-sm-8">
<thead>
  <tr>
    <th>ITEMID</th>
    <th>ITEM NAME</th>
     <th>AVERAGE RATING</th>	
  </tr>
   </thead>
    <tbody>
 <?php for($i=0;$i<$count;$i++)
 { 
    echo '<tr>';
    echo '<td>'.$_SESSION['itemid'][$i].'</td>';
    echo '<td>'.$_SESSION['itemname'][$i].'</td>';
	echo '<td>'.$_SESSION['rating'][$i].'</td>';
  echo '</tr>';
  
 }
 ?>
 </tbody>
</table>
</body>
</html>