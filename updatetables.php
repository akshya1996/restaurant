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
.
/*Remove that CSS*/
.col-md-3 {
    margin-left:5%;
    }
/*Remove that CSS*/



button {
  margin: 20px 0;
  line-height: 34px;
  position: relative;
  cursor: pointer;
  user-select: none;
  outline:none !important;
  width:100%;
}

button:active {

  outline:none;
}

button.ribbon {
  
  outline:none;
  outline-color: transparent;
}
button.ribbon:before, button.ribbon:after {
  top: 5px;
  z-index: -10;
}
button.ribbon:before {
  border-color: #53dab6 #53dab6 #53dab6 transparent;
  left: -25px;
  border-width: 17px;
}
button.ribbon:after {
  border-color: #53dab6 transparent #53dab6 #53dab6;
  right: -25px;
  border-width: 17px;
}

button:before, button:after {
  content: '';
  position: absolute;
  height: 0;
  width: 0;
  border-style: solid;
  border-width: 0;
  outline:none;
}

button.btn-default:before {
  border-color: #757575 #757575 #757575 transparent;
    }
    button.btn-default:after {
  border-color: #757575 transparent #757575 #757575;
    }
    
    
    
    button.btn-primary:before {
  border-color: #2e6da4 #2e6da4 #2e6da4 transparent;
    }
    button.btn-primary:after {
  border-color: #2e6da4 transparent #2e6da4 #2e6da4;
    }
    
    
    button.btn-success:before {
  border-color: #398439 #398439 #398439 transparent;
    }
    button.btn-success:after {
  border-color: #398439 transparent #398439 #398439;
    }
    
    
    button.btn-info:before {
  border-color: #269abc #269abc #269abc transparent;
    }
    button.btn-info:after {
  border-color: #269abc transparent #269abc #269abc;
    }
    
    
    button.btn-warning:before {
  border-color: #d58512 #d58512 #d58512 transparent;
    }
    button.btn-warning:after {
  border-color: #d58512 transparent #d58512 #d58512;
    }
    
    
    button.btn-danger:before {
  border-color: #ac2925 #ac2925 #ac2925 transparent;
    }
    button.btn-danger:after {
  border-color: #ac2925 transparent #ac2925 #ac2925;
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
<div class="col-md-12">
<div class="form-area"> 
<h3 style="margin-bottom: 25px; text-align: center;">Update Information</h3>
<form method="POST" action="updateemp.php" >
<br style="clear:both">
  <center>
	<button type="submit" id="submit" name="sub8" class="btn btn-danger ribbon">Employee</button>
</center>
</form>
<form method="POST" action="updatehoteltable.php" >
<br style="clear:both">

	<button type="submit" id="submit" name="sub9" class="btn btn-danger ribbon">Table</button>

</form>

<form method="POST" action="updatemenu.php" >
<br style="clear:both">

	<button type="submit" id="submit" name="sub10" class="btn btn-danger ribbon">Menu </button>

</form>



</div>
</div>
</div>
</body>
</html>
	
	









<!--<a href="register.php">Register</a> -->



</div>
</div>
</div>
</body>
</html>