<?php
include ('db_connec.php');
$del="delete from test where id='".$_GET['id']."'";
mysqli_query($con,$del);
header('location:test2.php');


//$id = $_GET['id'];

//echo $id;
?>