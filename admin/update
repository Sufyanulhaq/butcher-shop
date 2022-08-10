<?php
include './classes/Database.php';

$id =$_GET['id'];
$query=mysqli_query($con,"select *  from products  where product_id='$id'"); 
$res=mysqli_fetch_object($query);
?>

 
<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>
    <?php include "./classes/Database.php"; ?>

     

      <div class="row">
      	<div class="col-10">
      		<h2>Update Product </h2>
      	</div>
 
      <div class="modal-body">
        <form  method='POST' enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Name</label>
		        		<input type="text" name="product_name"  value="<?=$res->product_title?>"class="form-control" placeholder="Enter Product Name">
		        	</div>
        		</div>
        	 
        		 
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Description</label>
		        		<input type='text' class="form-control"  value="<?=$res->product_desc?>" name="product_desc" placeholder="Enter product desc">
                        
		        	</div>
        		</div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Qty</label>
                <input type="number" name="product_qty"  value="<?=$res->product_qty?>" class="form-control" placeholder="Enter Product Quantity">
              </div>
            </div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Price</label>
		        		<input type="number" value="<?=$res->product_price?>" name="product_price" class="form-control" placeholder="Enter Product Price">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Keywords <small>(eg: apple, iphone, mobile)</small></label>
		        		<input type="text"  value="<?=$res->product_keywords?>" name="product_keywords" class="form-control" placeholder="Enter Product Keywords">
		        	</div>
        		</div>
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Product Image <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="product_image" class="form-control">
		        	</div>
        		</div> 
        		<div class="col-12">
        			<input type="submit" name="add_product" class="btn btn-primary add-product" value='update Product'>
        		</div>
        	</div>
        	
        </form>
</div>
      
      
    </main>
  </div>
</div>



 <?php

if(isset($_POST['add_product'])){
	$title=$_POST['product_name'];
	$desc=$_POST['product_desc'];
	$qty=$_POST['product_qty'];
	$price=$_POST['product_price'];
	$keyword=$_POST['product_keywords'];
	$photo=$_FILES['product_image']['name'];
	$tmp=$_FILES['product_image']['tmp_name'];
	move_uploaded_file($tmp,'../product_images/'.$photo);
  $update="UPDATE `products` SET  `product_title`='$title',`product_price`='$price',`product_qty`='$qty',`product_desc`='$desc',`product_image`='$photo',`product_keywords`='$keyword' WHERE product_id='$id'";
  $q=mysqli_query($con,$update);
  if($q){
   
 echo "<script>window.location='http://localhost/Ecommce_App/admin/products.php';</script>";
  }else {
    echo "<script>alert('Update Error')</script>";
  }


}

?>

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>














