<?php 
session_start();
include "connection.php";
$contact_us_name_28=$_REQUEST['contact_us_name_28'];
$query28="UPDATE e_went_control SET value='$contact_us_name_28' WHERE id='28'";
$sql28=mysqli_query($conn,$query28);
if($sql28)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='contact.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='contact.php';</script>";	 
}	
$contact_us_email_29=$_REQUEST['contact_us_email_29'];
$query29="UPDATE e_went_control SET value='$contact_us_email_29' WHERE id='29'";
$sql29=mysqli_query($conn,$query29);
if($sql29)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='contact.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='contact.php';</script>";	 
}

$contact_us_subject_30=$_REQUEST['contact_us_subject_30'];

$query30="UPDATE e_went_control SET value='$contact_us_subject_30' WHERE id='30'";
$sql30=mysqli_query($conn,$query30);
if($sql30)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='contact.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='contact.php';</script>";	 
}
$contact_us_products=$_REQUEST['product'];
$contact_us_products_32=implode(",",$contact_us_products);
$query32="UPDATE e_went_control SET value='$contact_us_products_32' WHERE id='32'";
$sql32=mysqli_query($conn,$query32);
if($sql32)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='contact.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='contact.php';</script>";	 
}

?>