<?php
include('conn.php');
$sql = "SELECT * FROM `test`";
		
$res = mysqli_query($conn, $sql);
		
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>

function del_records(id){
	
	var userid = id;
	
	var vardata = {id : userid};
	
	 $.ajax({
	   
	  url:"del_action.php",

      type:"POST",

      data:vardata,

      success:show_message	  
	   
   });
   
   function show_message(msg){
	   
	  // alert(msg);
       
       if(msg){
           
        alert("Records deleted successfully");   
        $("#id"+msg).fadeOut(1000);
       }
	   
   }
 
	
}

</script>

<table width="800" border="1">
    <tr>
        <td>Name</td>
        <td>Address</td>
        <td>DOB</td>
        <td>City</td>
        <td>Image</td>
    </tr>
    <?php
    
    while($rows=mysqli_fetch_assoc($res)){
     ?>
    <tr id="id<?php echo $rows['id'];?>">
        <td><?php echo $rows['name']?></td>
        <td><?php echo $rows['address']?></td>
        <td><?php echo $rows['dob']?></td>
        <td><?php echo $rows['city']?></td>
        <td><img src="upload/<?php echo $rows['image']?>" width="100" height="50"></td>
        <td><a href="#" onclick="del_records(<?php echo $rows['id'];?>)">Delete</a></td>
        <td><a href ="test4.php".php?id=<?php echo $rows['id']?>">EDIT</a></td>
    </tr>
    <?php
    }
    ?>
</table>