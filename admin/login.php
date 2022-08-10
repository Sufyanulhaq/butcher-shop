<?php session_start();
 
include './classes/Database.php';

if (isset($_SESSION["userLogin"]) && $_SESSION["userLogin"]===true) {
	header("location:index.php");
  }

?>
<?php include "./templates/top.php"; ?>

<?php include "./templates/navbar.php"; ?>

<div class="container">
	<div class="row justify-content-center" style="margin:100px 0;">
		<div class="col-md-4">
			<h4 class="text-center">Admin Login</h4>
			<p class="message"></p>
			<form action='classes/auth.php' method='POST'>
			  <div class="form-group">
			    <label for="email">Email address</label>
			    <input type="email" class="form-control" name="email"   placeholder="Enter email">
			    
			  </div>
			  <div class="form-group">
			    <label for="password">Password</label>
			    <input type="password" class="form-control" name="password"   placeholder="Password">
			  </div> 
			  <input type="submit" class="btn btn-success login-btn" name='login'  value='Login'>
			</form>
		</div>
	</div>
</div>





<?php include "./templates/footer.php"; ?>

<script type="text/javascript" src="./js/main.js"></script>
