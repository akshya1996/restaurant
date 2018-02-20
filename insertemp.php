<!DOCTYPE html>
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
<!-- your html form -->

<div class="container">
<div class="col-md-5">
    <div class="form-area"> 
<form method="POST"  >
<br style="clear:both">
<h3 style="margin-bottom: 25px; text-align: center;">Insert Employee</h3>
<div class="form-group">
	Empid:
	<input type="text" class="form-control" name="empid">
		</div>
<div class="form-group">
	PayRate:
	<input type="text" class="form-control" name="payrate">
		</div>
<div class="form-group">
	Phone:
	<input type="text" class="form-control" name="phone">
		</div>
<div class="form-group">
	Name:
	<input type="text" class="form-control" name="name">
		</div>
<div class="form-group">
	SSN:
	<input type="text" class="form-control" name="ssn">
		</div>
<div class="form-group">
	Date of Joining:
	<input type="text" class="form-control" name="doj">
		</div>
<div class="form-group">
	AptNumber:
	<input type="text" class="form-control" name="aptnumber">
		</div>
<div class="form-group">
	Street:
	<input type="text" class="form-control" name="street">
		</div>
<div class="form-group">
	City:
	<input type="text" class="form-control" name="city">
		</div>
<div class="form-group">
	State:
	<input type="text" class="form-control" name="state">
		</div>
<div class="form-group">
	Zipcode:
	<input type="text" class="form-control" name="zipcode">
		</div>
<div class="form-group">
	Age:
	<input type="text" class="form-control" name="age">
		</div>
<div class="form-group">
	Type:
	<input type="text" class="form-control" name="type">
		</div>

	<button type="submit" id="submit" name="sub" class="btn btn-primary pull-right">Submit</button>

</form>
<!--<a href="register.php">Register</a> -->


<?php 
$db = new mysqli("localhost","root","","testdb");
	// this will trigger when submit button click
	if(isset($_POST['sub'])){
 
		$db = new mysqli("localhost","root","","testdb");
 
		// create query
		//$query = "SELECT * FROM user WHERE username='".$_POST['uname']."' AND password='".$_POST['pass']."'";
		
		
		$query = "INSERT INTO HOTELEMPLOYEE VALUES('".$_POST['empid']."','".$_POST['payrate']."','".$_POST['phone']."','".$_POST['name']."','".$_POST['ssn']."','".$_POST['doj']."','".$_POST['aptnumber']."','".$_POST['street']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zipcode']."','".$_POST['age']."','".$_POST['type']."')";
         
		// execute query
		$sql = $db->query($query);
		if($sql==1)
			echo "Row Successfully Added";
		else
			echo "Enter Valid Values";
		
		
		
		
	}
	
?>
</div>
</div>
</div>

</body>
</html>