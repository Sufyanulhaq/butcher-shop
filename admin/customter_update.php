<?php
include './classes/Database.php';

$id =$_GET['id'];
$query=mysqli_query($con,"select *  from user_info  where user_id='$id'"); 
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
      		<h2>Update User Information </h2>
      	</div>
 
      <div class="modal-body">
        <form  method='POST' enctype="multipart/form-data">
        	<div class="row">
        		<div class="col-12">
        			<div class="form-group">
		        		<label> Name</label>
		        		<input type="text" name="name"  value="<?=$res->first_name?>"class="form-control" >
		        	</div>
        		</div>
        	 
        		 
        		 
            <div class="col-12">
              <div class="form-group">
                <label>mobile</label>
                <input type="text" name="mobile"  value="<?=$res->mobile?>" class="form-control"  >
              </div>
            </div>
        		 
        		<div class="col-12">
        			<div class="form-group">
		        		<label>Address  </label>
		        		<input type="text"  value="<?=$res->address1?>" name="address" class="form-control">
		        	</div>
        		</div>
        		 
        		<div class="col-12">
        			<input type="submit" name="user" class="btn btn-primary add-product" value='update userInfo'>
        		</div>
        	</div>
        	
        </form>
</div>
      
      
    </main>
  </div>
</div>



 <?php

if(isset($_POST['user'])){
	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];  
  $update=mysqli_query($con,"UPDATE `user_info` SET  `first_name`='$name',`last_name`='$name', `mobile`='$mobile',`address1`='$address',`address2`='$address' WHERE `user_id`='$id'");
  if($update){
 echo "<script>window.location='http://localhost/Ecommce_App/admin/customers.php';</script>";
  }else {
    echo "<script>alert('Update Error')</script>";
  }


}

?>

<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>














