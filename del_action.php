<?php

//echo "hello world";	

//$id = $_POST['id'];
$conn = mysqli_connect("localhost", "root", "");

        mysqli_select_db($conn, "registration");

$delete="delete from test where id='".$_POST['id']."'";
//echo $delete;
mysqli_query($conn,$delete);
//echo "recors deleted successfully";
//header("test2.php");

$id = $_POST['id'];

echo $id;
?>