<?php
include ("conn1.php");

//print_r($_POST);

$fname = $_POST['fname'];

$lname = $_POST['lname'];

$email = $_POST['email'];

$pass = $_POST['password'];

$conpass = $_POST['cpassword'];

$contact = $_POST['cnumber'];
if(!empty($_FILES)){
        $img_name = $_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
            }

$insert = "INSERT INTO `ajax` (`id`, `fname`, `lname`, `email`,`password`,`cpassword`,`cnumber`,`img`) VALUES ('', '".$fname."', '".$lname."', '".$email."','".$pass."','".$conpass."','".$contact."','".$img_name."')";


//echo $insert;

//exit();
//echo "$insert";
//exit();	
mysqli_query($conn, $insert);


echo "success";

//print_r($_POST);

//print_r($_FILES);

?>