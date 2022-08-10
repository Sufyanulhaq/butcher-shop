<?php

include "./classes/Database.php";



$id=$_GET['id'];
echo $id;
$d=mysqli_query($con,"DELETE FROM `products` WHERE product_id='$id'");
if($d){
    header("location:products.php");
}

?>