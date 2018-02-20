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
$itemid="";
		$itemname="";
		$description="";
		$price="";
                $nutriinfo="";
                $empid="";

?>

<center>
<div class="container">
<div class="col-md-5">
    <div class="form-area">  
        <form method="POST">
        <br style="clear:both">
                    <h3 style="margin-bottom: 25px; text-align: center;">Update Menu Info</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="itemname" placeholder="Item Name" required>
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
$query2="SELECT * FROM menu where itemname like '%".$_POST['itemname']."%'";
$result=$mysqli->query($query2);




if ($result = $mysqli->query($query2)) {

    /* fetch object array */
    while ($row = $result->fetch_row()) {
     
		$itemid=$row[0];
		$itemname=$row[1];
                $description=$row[2];
                $price=$row[3];
                $nutriinfo=$row[4];
                $empid=$row[5];
		
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
<h3 style="margin-bottom: 25px; text-align: center;">Update Menu</h3>
<div class="form-group">
	ItemId:
	<input type="text" name="itemid" class="form-control" value="<?php echo $itemid ?>" readonly>
	</div>
<div class="form-group">
	ItemName:
	<input type="text" name="itemname" class="form-control" value="<?php echo $itemname ?>">
	</div>
<div class="form-group">
	Description:
	<input type="text" name="description" class="form-control" value="<?php echo $description ?>">
	</div>
<div class="form-group">
        Price:
	<input type="text" name="price" class="form-control" value="<?php echo $price ?>">
	</div>
<div class="form-group">
        Nutriinfo:
	<input type="text" name="nutriinfo" class="form-control" value="<?php echo $nutriinfo ?>">
	</div>
<div class="form-group">
        EmpId:
	<input type="text" name="empid" class="form-control" value="<?php echo $empid ?>" readonly>
	</div>
	

	 <button type="submit" id="submit" name="update" class="btn btn-primary pull-right">Update</button>
</form>



<?php 

if(isset($_POST['update'])){
	   
		$itemid=$_POST['itemid'];
		$itemname=$_POST['itemname'];
        $description=$_POST['description'];
        $price=$_POST['price'];
        $nutriinfo=$_POST['nutriinfo'];
		$empid=$_POST['empid'];
		$db = new mysqli("localhost","root","","testdb");
		$query = "UPDATE menu SET itemid='".$itemid."' , itemname='".$itemname."' ,  description='".$description."' ,   price='".$price."' ,  nutriinfo='".$nutriinfo."' where itemid='".$itemid."'";
         
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