<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
	padding: 10px 40px 60px;
	margin: 10px 0px 60px;
	border: 1px solid GREY;
	}
	
</style>
<script>

$(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});




</script>
</head>
<body>
<?php
$name="";
		$phone="";
		$zipcode="";
		$tableno="";
		

?>



<form method="POST">
	Phone:
	<input type="text" name="phone">
	<br />
	<input type="submit" name="sub">
</form>


<?php
if(isset($_POST['sub'])){
//$mysqli = new mysqli("localhost", $username, $password, $database); @mysql_select_db($database) or die( "Unable to select database");

$mysqli = new mysqli("localhost","root","","testdb");
$query2="SELECT * FROM customer_table where phone='".$_POST['phone']."'";
$result=$mysqli->query($query2);


if ($result = $mysqli->query($query2)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
     
		$name=$row[0];
		$phone=$row[1];
		$zipcode=$row[2];
		$tableno=$row[3];
		
    }
	
	
    /* free result set */
    $result->close();
}

}

?>
<form method="POST">
	Name:
	<input type="text" name="name" value="<?php echo $name ?>" 
	<br />
	Phone:
	<input type="text" name="phone" value="<?php echo $phone ?>" readonly>
	<br />
	Zipcode:
	<input type="text" name="zipcode" value="<?php echo $zipcode ?>">
	<br />
	Tableno:
	<input type="text" name="tableno" value="<?php echo $tableno ?>">
	<br />
	
	<input type="submit" name="update" value="Update">
</form>



<?php 

if(isset($_POST['update'])){
	   
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$zipcode=$_POST['zipcode'];
		$tableno=$_POST['tableno'];
		
		$db = new mysqli("localhost","root","","testdb");
		$query = "UPDATE customer_table SET , name='".$name."' , phone='".$phone."' , zipcode='".$zipcode."', tableno='".$tableno."' where phone='".$phone."'";
         
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