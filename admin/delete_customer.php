<?php

include './classes/Database.php';
$id =$_GET['id'];
$delete=mysqli_query($con,"DELETE FROM `user_info` WHERE `user_id` ='$id'");
if($delete){
    header("location:customers.php");
}



?>