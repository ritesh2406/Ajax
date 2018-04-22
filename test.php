<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Form</title>
        <script  src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            function formval(e){
                //alert ("hello world");
                var vardata = new FormData($("#uform")[0]);
                e.preventDefault();
               // var vardata = $("#uform").serialize();
                $.ajax({
                    url:"user_action.php",
                    type:"POST",
                    cache:false,
					processData:false,
					contentType:false,
                    data:vardata,
                    success:show_message
                });
                
            }
            function show_message(msg){
                if(msg){
                    $("#uform")[0].reset();
                }
                
                //alert(msg);
            }
            
        </script>
    </head>
<body>
<div id="userform">
<form action="" method ="post" enctype ="multipart/form-data" id="uform" name="userform" >
    Name :<input type="text" name ="name"><br><br>
    
    Address:<textarea name="address" rows="5" columns="50"></textarea><br><br>

    DOB:<select name="dd">
    <?php
    for($i=1;$i<=31;$i++){
        echo "<option value='".$i."'>".$i."</option>";
    }
        ?>
    </select>
    <select name="mm">
    <?php
    for($i=1;$i<=12;$i++){
        echo "<option value='".$i."'>".$i."</option>";
    }
        ?>
    </select>
        <select name="yyyy">
    <?php
    for($i=1950;$i<=2017;$i++){
        echo "<option value='".$i."'>".$i."</option>";
    }
        ?>
    </select>
        <br><br>
        City:<select name="city">
    <option value="kolkata">Kolkata</option>
    <option value="bangalore">Bangalore</option>
    <option value="mumbai">Mumbai</option>
    <option value="delhi">Delhi</option>
    <option value="pune">Pune</option>
    </select>
        <br><br>
    <strong>Image upload:</strong><input type="file" name="img"><br><br>
    Submit:<input type="submit" name="submit" value="Submit" onclick="return formval(event)">
</form>
</div>
</body>
</html>