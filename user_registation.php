<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>User Registration Form</title>
<script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
function validate(e){

  //var vardata = $("#userregistation").serialize();
  
  //document.write(vardata);
  
  //exit;
    var vardata = new FormData($("#userregistation")[0]);
	  
  

	  
	            e.preventDefault();
				
				$.ajax({
					
					url:'user_regaction.php',
					type:'POST',
					cache:false,
					processData:false,
					contentType:false,
					data: vardata,
					
					success : show_success
					
					
					
					
				});

}


function show_success(msg){

  /*alert(msg);
  
	$("#userregistation")[0].reset();
    */
    
    alert(msg);

}


</script>
</head>

<body>
<div class="myform" style="margin-left:100px;">

<h1> User Registation</h1>
<form name="userregistration" method="post" action="" id="userregistation" enctype="multipart/form-data">

<label>First Name</label>
<input type="text" name="fname" size="30" id="fname" /><br /><br />
<label>Last Name</label>
<input type="text" name="lname" size="30" id="lname"/><br /><br />
<label>Email</label>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" size="30" id="email"/><br /><br />
<label>Password</label>
<input type="password" name="password" size="30" id="password"/><br /><br />
<label>Confirm password</label>
<input type="password" name="cpassword" size="30" id="cpassword"/><br /><br />
<label>Contact Number</label>
<input type="text" name="cnumber" size="30" id="cnumber"/><br /><br />
<label><strong>Image upload:</strong><input type="file" name="img"><br><br></label>

<input type="submit" name="submit" value="submit" onclick="return validate(event)"/>

</form>
<a href="show.php">Show</a>

</div>


</body>
</html>
