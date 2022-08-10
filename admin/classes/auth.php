<?php 
session_start();
include "Database.php";
 
if(isset($_POST['login'])){
	$email =$_POST['email'];
	$password=$_POST['password'];
$q = mysqli_query($con,"SELECT  * FROM admin WHERE email = '$email' AND password='$password'");
if(mysqli_num_rows($q)>0){
	$row =mysqli_fetch_object($q);
	 $_SESSION["user"]=$row->name;
	 $_SESSION["userLogin"]=true;
	 header("location:../index.php");
	 

}else{
	echo "<script> alert('Enter Correct Details')</script>";
}

}

?>