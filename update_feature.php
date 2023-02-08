<?php
session_start();
include "connection.php";
$feature_text=$_REQUEST['feature_text'];

$query20="UPDATE e_went_control SET value='$feature_text' WHERE id='20'";
$sql20=mysqli_query($conn,$query20);
if($sql20)
{
	 echo "<script>alert('Updated Successfully');</script>";
	 echo "<script>window.location.href='features.php';</script>";
}
else 
{

	echo "<script>alert('NoT Updated');</script>";
	 echo "<script>window.location.href='features.php'</script>";
}


$image21=$_SESSION['image21'];
$feature_image=$_FILES['feature_image']['name'];
$feature_image_tmp_name=$_FILES['feature_image']['tmp_name'];
$feature_image_path="images/".$feature_image;
move_uploaded_file($feature_image_tmp_name,$feature_image_path);
if($feature_image_path=="images/")
{
	$query21_new="UPDATE e_went_control SET value='$image21' WHERE id='21'";
	$sql21_new=mysqli_query($conn,$query21_new);
	if($sql21_new)
	{
		 echo "<script>alert('Updated Successfully');</script>";
	 	echo "<script>window.location.href='features.php';</script>";
	}
	else 
	{

		echo "<script>alert('NoT Updated');</script>";
		echo "<script>window.location.href='features.php';</script>";
	}
}
else 
{
	$query21="UPDATE e_went_control SET value='$feature_image_path' WHERE id='21'";
	$sql21=mysqli_query($conn,$query21);
	if($sql21)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='features.php';</script>";
	}
	else 
	{

		echo "<script>alert('NoT Updated');</script>";
		echo "<script>window.location.href='features.php';</script>";
	}
}



?>