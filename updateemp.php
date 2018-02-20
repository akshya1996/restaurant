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
$empid="";
		$payrate="";
		$phone="";
		$name="";
		$ssn="";
		$doj="";
		$aptnumber="";
		$street="";
		$city="";
		$state="";
		$zipcode="";
		$age="";
		$type="";
		

?>




<center>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form method="POST">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Update Employee Info</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="empid" placeholder="Employee ID" required>
					</div>
           <center> 
        <button type="submit" id="submit" name="sub" class="btn btn-primary pull-right">Submit</button>
		</center>
        </form>
    </div>
</div>

<?php
if(isset($_POST['sub'])){
//$mysqli = new mysqli("localhost", $username, $password, $database); @mysql_select_db($database) or die( "Unable to select database");

$mysqli = new mysqli("localhost","root","","testdb");
$query2="SELECT * FROM hotelemployee where empid='".$_POST['empid']."'";
$result=$mysqli->query($query2);




if ($result = $mysqli->query($query2)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
     
		$empid=$row[0];
		$payrate=$row[1];
		$phone=$row[2];
		$name=$row[3];
		$ssn=$row[4];
		$doj=$row[5];
		$aptnumber=$row[6];
		$street=$row[7];
		$city=$row[8];
		$state=$row[9];
		$zipcode=$row[10];
		$age=$row[11];
		$type=$row[12];
		
    }
	
	
    /* free result set */
    $result->close();
}





}

?>
</div>
<div class="container">
<div class="col-md-5">
    <div class="form-area"> 
<form method="POST"  >
<br style="clear:both">
<h3 style="margin-bottom: 25px; text-align: center;">Update Employee</h3>
   <div class="form-group">
	Empid:
	<input type="text" name="empid" class="form-control" value="<?php echo $empid ?>" readonly>
	</div>
	<div class="form-group">
	PayRate:
	<input type="text" name="payrate" class="form-control" value="<?php echo $payrate ?>">
	</div>
	<div class="form-group">
	Phone:
	<input type="text" name="phone" class="form-control" value="<?php echo $phone ?>">
	</div>
	<div class="form-group">
	Name:
	<input type="text" name="name" class="form-control" value="<?php echo $name ?>">
	</div>
	<div class="form-group">
	SSN:
	<input type="text" name="ssn" class="form-control" value="<?php echo $ssn ?>">
	</div>
	<div class="form-group">
	Date of Joining:
	<input type="text" name="doj" class="form-control" value="<?php echo $doj ?>">
	</div>
	<div class="form-group">
	AptNumber:
	<input type="text" name="aptnumber" class="form-control" value="<?php echo $aptnumber ?>">
	</div>
	<div class="form-group">
	Street:
	<input type="text" name="street" class="form-control" value="<?php echo $street ?>">
	</div>
	<div class="form-group">
	City:
	<input type="text" name="city" class="form-control" value="<?php echo $city ?>">
	</div>
	<div class="form-group">
	State:
	<input type="text" name="state" class="form-control" value="<?php echo $state ?>">
	</div>
	<div class="form-group">
	Zipcode:
	<input type="text" name="zipcode" class="form-control" value="<?php echo $zipcode ?>">
	</div>
	<div class="form-group">
	Age:
	<input type="text" name="age" class="form-control" value="<?php echo $age ?>">
	</div>
	<div class="form-group">
	Type:
	<input type="text" name="type" class="form-control" value="<?php echo $type ?>">
	</div>
	
	
	 <button type="submit" id="submit" name="update" class="btn btn-primary pull-right">Update</button>
</form>



<?php 

if(isset($_POST['update'])){
	   
		$empid=$_POST['empid'];
		$payrate=$_POST['payrate'];
		$phone=$_POST['phone'];
		$name=$_POST['name'];;
		$ssn=$_POST['ssn'];;
		$doj=$_POST['doj'];
		$aptnumber=$_POST['aptnumber'];
		$street=$_POST['street'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$zipcode=$_POST['zipcode'];
		$age=$_POST['age'];
		$type=$_POST['type'];
		
		$db = new mysqli("localhost","root","","testdb");
		$query = "UPDATE HotelEmployee SET payrate='".$payrate."' ,phone='".$phone."' , name='".$name."', ssn='".$ssn."', doj='".$doj."', aptnumber='".$aptnumber."',street='".$street."', city='".$city."', state='".$state."', zipcode='".$zipcode."', age='".$age."', type='".$type."' where empid='".$empid."'";
         
		// execute query
		$sql = $db->query($query);
		
		if($sql==1)
			echo "Row Successfully Updated";
		else
			echo "Enter Valid Values";
		
		
		
		
	}










?>
  </div>
</div>
</div>
</center>
</body>
</html>