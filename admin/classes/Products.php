 <?php
include './Database.php';
if(isset($_POST['add_product'])){
	$title=$_POST['product_name'];
	$desc=$_POST['product_desc'];
	$qty=$_POST['product_qty'];
	$price=$_POST['product_price'];
	$keyword=$_POST['product_keywords'];
	$photo=$_FILES['product_image']['name'];
	$tmp=$_FILES['product_image']['tmp_name'];
	move_uploaded_file($tmp,'../../product_images/'.$photo);
$insert="INSERT INTO `products` product_title='$title', product_price='$price', product_qty='$qty',product_desc='$desc',product_image='$photo',product_keywords='$keyword'";  
$data =mysqli_query($con,$insert);
if($data){
	header("location:../products.php");
}else{
	echo "<script>alert('Error')</script>";
}


}


?>