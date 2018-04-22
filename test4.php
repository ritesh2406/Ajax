<?php
include ('db_connec.php');

if($_POST){

    print_r($_POST);
    
    
    $name=$_POST['name'];
    $address=$_POST['address'];
    $dob=$_POST['dd'].'/'.$_POST['mm'].'/'.$_POST['yyyy'];
    $city=$_POST['city'];
    if(!empty($_FILES)){
    $image_name=$_FILES['img']['name'];
        move_uploaded_file($_FILES['img']['tmp_name'],"upload/".$_FILES['img']['name']);
    }
    $upd="update test set
     name='$name',
     address='$address',
     dob='$dob',
     city='$city'";

        if($image_name){
            $upd.="image='$image_name'";
        }
    $upd.="where id='".$_GET['id']."'";
    //echo $upd;
    //exit();
    
    mysqli_query($con,$upd);
	header('location:test2.php');
    
    
    }
    $sel="select * from test where id='".$_GET['id']."'";
    $qry   = mysqli_query($con,$sel);
    $fetch = mysqli_fetch_array($qry);
    print_r($fetch);
    ?>
<form action="" method="post" enctype="multipart/form-data">
    NAME:<input type="text" name="name" value="<?php echo $fetch['name'];?>"><br><br>
    ADDRESS:<textarea name="address"><?php echo $fetch['address'];?></textarea><br><br>
    DOB:<select name="dd">
    <?php
     $dates= explode('/',$fetch['dob']);

     for($i=1;$i<=31;$i++){
         ?>
         <option value='<?php echo $i;?>'<?php if($dates[0]==$i){echo "selected";}?>><?php echo $i;?></option>
        <?php
     }
     ?>
    </select>
    <select name="mm">
        <?php
     $dates= explode('/',$fetch['dob']);

     for($i=1;$i<=12;$i++){
         ?>
         <option value='<?php echo $i;?>'<?php if($dates[1]==$i){echo "selected";}?>><?php echo $i;?></option>
        <?php
     }
     ?>
    </select>
    <select name="yyyy">
        <?php
     $dates= explode('/',$fetch['dob']);

     for($i=1950;$i<=2017;$i++){
         ?>
         <option value='<?php echo $i;?>'<?php if($dates[2]==$i){echo "selected";}?>><?php echo $i;?></option>
        <?php
     }
     ?>
    </select>
    <br><br>
    City: <select name="city">
          <option value="kolkata" <?php if($fetch['city']=='kolkata'){ echo "selected";}?>>Kolkata</option>

          <option value="bangalore" <?php if($fetch['city']=='bangalore'){ echo "selected";}?>>Bangalore</option>

          <option value="mumbai" <?php if($fetch['city']=='mumbai'){ echo "selected";}?>>Mumbai</option>

          <option value="delhi" <?php if($fetch['city']=='delhi'){ echo "selected";}?>>Delhi</option>
     
          <option value="pune" <?php if($fetch['city']=='pune'){ echo "selected";}?>>Pune</option>
              
               </select>
    <br><br>
    Image upload:<input type="file" name="img" value="<?php echo $fetch['image'];?>"><br><br>
    <input type="submit" name="submit" value="Submit">

</form>