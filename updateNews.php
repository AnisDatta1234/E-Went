<?php 
session_start();
include "connection.php";
$news_details_23=$_REQUEST['news_details_23'];
$query23="UPDATE e_went_control SET value='$news_details_23' WHERE id='23'";
$sql23=mysqli_query($conn,$query23);
if($sql23)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='news.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='news.php';</script>";	 
}

$news_text_25=$_REQUEST['news_text_25'];
$query25="UPDATE e_went_control SET value='$news_text_25' WHERE id='25'";
$sql25=mysqli_query($conn,$query25);
if($sql25)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='news.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='news.php';</script>";	 
}


$news_text_27=$_REQUEST['news_text_27'];
$query27="UPDATE e_went_control SET value='$news_text_27' WHERE id='27'";
$sql27=mysqli_query($conn,$query27);
if($sql27)
{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='news.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	 echo "<script>window.location.href='news.php';</script>";	 
}


$oldimage=$_SESSION['oldimage'];
$news_image_right_24=$_FILES['news_image_right_24']['name'];
$news_image_right_24_tmp_name=$_FILES['news_image_right_24']['tmp_name'];
$path_news_image_right_24="images/".$news_image_right_24;
move_uploaded_file($news_image_right_24_tmp_name,$path_news_image_right_24);
if($path_news_image_right_24=="images/")
{
	 $query24_new="UPDATE e_went_control SET value='$oldimage' WHERE id='24'";
	$sql24_new=mysqli_query($conn,$query24_new);
	if($sql24_new)
	{
	 	echo "<script>alert('Data Updated Successfully');</script>";
	 	echo "<script>window.location.href='news.php';</script>"; 
	}
	else 
	{
	 	 echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='news.php';</script>";
	}
}	
else 
{
	$query24="UPDATE e_went_control SET value='$path_news_image_right_24' WHERE id='24'";
	$sql24=mysqli_query($conn,$query24);
	if($sql24)
	{
		 echo "<script>alert('Data Updated Successfully');</script>";
		 echo "<script>window.location.href='news.php';</script>"; 
	}
	else 
	{
		  echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='news.php';</script>";
	}
}	

$oldpic=$_SESSION['oldpic'];
$news_image_left_22=$_FILES['news_image_left_22']['name'];
$news_image_left_22_tmp_name=$_FILES['news_image_left_22']['tmp_name'];
$path_news_image_left_22="images/".$news_image_left_22;
move_uploaded_file($news_image_left_22_tmp_name,$path_news_image_left_22);
if($path_news_image_left_22=="images/")
{
	 $query22_new="UPDATE e_went_control SET value='$oldpic' WHERE id='22'";
	 $sql22_new=mysqli_query($conn,$query22_new);
	 if($sql22_new)
	 {
	 	echo "<script>alert('Data Updated Successfully');</script>";
	 	echo "<script>window.location.href='news.php';</script>"; 
	}
	else 
	{
	 	 echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='news.php';</script>";
	}
}
else 
{
	$query22="UPDATE e_went_control SET value='$path_news_image_left_22' WHERE id='22'";
	$sql22=mysqli_query($conn,$query22);
	if($sql22)
	{
	 echo "<script>alert('Data Updated Successfully');</script>";
	 echo "<script>window.location.href='news.php';</script>"; 
	}
	else 
	{
		  echo "<script>alert('Not Updated');</script>";
		 echo "<script>window.location.href='news.php';</script>";
	}
}	
$oldpicpath=$_SESSION['oldpicpath'];
$news_image_right_26=$_FILES['news_image_right_26']['name'];
$news_image_right_26_tmp_name=$_FILES['news_image_right_26']['tmp_name'];
$path_news_image_right_26="images/".$news_image_right_26;
move_uploaded_file($news_image_right_26_tmp_name,$path_news_image_right_26);
if($path_news_image_right_26=="images/")
{
	$query26_new="UPDATE e_went_control SET value='$oldpicpath' WHERE id='26'"; 
	$sql26_new=mysqli_query($conn,$query26_new);
	if($sql26_new)
	{
	 	echo "<script>alert('Data Updated Successfully');</script>";
	 	echo "<script>window.location.href='news.php';</script>"; 
	}
	else 
	{
	 	 echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='news.php';</script>";
	}
	
}	
else 
{
	$query26="UPDATE e_went_control SET value='$path_news_image_right_26' WHERE id='26'";
	$sql26=mysqli_query($conn,$query26);
	if($sql26)
	{
		 echo "<script>alert('Data Updated Successfully');</script>";
		 echo "<script>window.location.href='news.php';</script>"; 
	}
	else 
	{
			  echo "<script>alert('Not Updated');</script>";
		 echo "<script>window.location.href='news.php';</script>";
	}
}


?>