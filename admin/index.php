<?php 
include './classes/Database.php';
session_start();  
if (!isset($_SESSION["userLogin"])) {
  header("location:login.php");
}

include "./templates/top.php"; 

?>
 
<?php include "./templates/navbar.php"; ?>

<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>
    <?php include "./classes/Database.php"; ?>

    <?php
$p ="SELECT * FROM `admin` ";
 $q=mysqli_query($con,$p);


?>

      <!-- <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas> -->

      <h2><center>Admin Details</center></h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th> 
            </tr>
          </thead>
          <tbody id="admin_list">
          <?php
            $i=1;
$row=mysqli_fetch_object($q);
            ?>

             <tr>
              <td><?=$i?></td>
              <td><?=$row->name?></td>
              <td><?=$row->email?></td>
              <td><?php if($row->is_active==1)echo "Active";else echo"Deactive"?></td> 
               
            </tr> 
    
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/admin.js"></script>
