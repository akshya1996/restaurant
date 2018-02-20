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
$tableno="";
		
$status="";
		

?>

<center>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form method="POST">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Update Table Status</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="tableno" placeholder="Table No" required>
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
$query2="SELECT * FROM hoteltable where tableno='".$_POST['tableno']."'";
$result=$mysqli->query($query2);




if ($result = $mysqli->query($query2)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
     
		$tableno=$row[0];
		$status=$row[1];
		
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
<h3 style="margin-bottom: 25px; text-align: center;">Update Table Status</h3>
    				<div class="form-group">
	TableNo:
	<input type="text" name="tableno" class="form-control" value="<?php echo $tableno?>"readonly >
	
					</div>
					<div class="form-group">
	Status:
	<select name="status" class="form-control" >
	 <option>reserved</option>
	 <option>unreserved</option>
	 </select>
	 </div>
	   <button type="submit" id="submit" name="update" class="btn btn-primary pull-right">Update</button>
	
</form>

<?php 


if(isset($_POST['update'])){
	   
		$tableno=$_POST['tableno'];
		$status=$_POST['status'];
		
		$db = new mysqli("localhost","root","","testdb");
		$query = "UPDATE hoteltable SET tableno='".$tableno."' , status='".$status."' where tableno='".$tableno."'";
         
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