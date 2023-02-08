<?php 
include "connection.php";
$email=$_POST['email'];
$password=md5($_POST['password']);
$query="SELECT * FROM admin where email='$email' AND password='$password'";
$sql=mysqli_query($conn,$query);
$res=mysqli_num_rows($sql);
if($res)
{
	 echo "<script>alert('Login Successfull');</script>";
	 echo "<script>window.location.href='banner.php';</script>";
}
else 
{
	echo "<script>alert('Incorrect email or Password');</script>"; 
}
?>