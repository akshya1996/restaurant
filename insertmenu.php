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
<h3 style="margin-bottom: 25px; text-align: center;">Insert Menu</h3>

<div class="form-group">
	Itemid:
	<input type="text" name="itemid" class="form-control">
	</div>
<div class="form-group">
	ItemName:
	<input type="text" name="itemname" class="form-control">
	</div>
<div class="form-group">
	Description:
	<input type="text" name="description" class="form-control">
	</div>
<div class="form-group">
	Price:
	<input type="text" name="price" class="form-control">
	</div>
<div class="form-group">
	Nutriinfo:
	<input type="text" name="nutriinfo" class="form-control">
	</div>
<div class="form-group">
	Employee id:
	<input type="text" name="empid" class="form-control">
	</div>

	
	<button type="submit" id="submit" name="sub" class="btn btn-primary pull-right">Submit</button>
</form>
<!--<a href="register.php">Register</a> -->


<?php 
$db = new mysqli("localhost","root","","testdb");
	// this will trigger when submit button click
	if(isset($_POST['sub'])){
 
		$db = new mysqli("localhost","root","","testdb");
 
		$query = "INSERT INTO MENU VALUES('".$_POST['itemid']."','".$_POST['itemname']."','".$_POST['description']."','".$_POST['price']."','".$_POST['nutriinfo']."','".$_POST['empid']."')";
         
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