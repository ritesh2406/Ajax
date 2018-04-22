<?php
include ("conn.php");

//print_r($_POST);

$name = $_POST['name'];

$add = $_POST['address'];

$dob=$_POST['dd'].'/'.$_POST['mm'].'/'.$_POST['yyyy'];

$city = $_POST['city'];
if(!empty($_FILES)){
        $img_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            }


$insert = "INSERT INTO `test` (`id`, `name`, `address`, `dob`,`city`,`image`) VALUES ('', '".$name."', '".$add."', '".$dob."','".$city."','".$img_name."')";


//echo $insert;

//exit();
//echo "$insert";
//exit();	
mysqli_query($conn, $insert);


echo "success";

//print_r($_POST);

//print_r($_FILES);

?>