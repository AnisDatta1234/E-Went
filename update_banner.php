<?php 
session_start();
include "connection.php";
$video4=$_SESSION['video4'];
$oldimage=$_SESSION['image'];	
$banner_text=$_REQUEST['banner_text'];
$logo_text=$_REQUEST['logo_text'];
$banner_video=$_FILES['banner_video']['name'];
$banner_video_tmp_name=$_FILES['banner_video']['tmp_name'];
$banner_video_folder="videos/".$banner_video;
move_uploaded_file($banner_video_tmp_name,$banner_video_folder);
//echo $banner_video_folder;
//echo "<br>";
 // $temp= explode('.',$banner_video_folder);
 //   $extension = end($temp);
   //echo $extension;
   //die();
   if($banner_video_folder=="videos/")
   {
   	  	$query3_new="UPDATE `e_went_control` SET `value`='$video4' WHERE id='2'";
		$sql3_new=mysqli_query($conn,$query3_new);
		if($sql3_new)
		{
			echo "<script>alert('Data Updated Successfully');</script>";
			echo "<script>window.location.href='banner.php';</script>";
		}
		else
		{
	 		echo "Not Updated";
		}   
   }
   else
   {
   		$query3="UPDATE `e_went_control` SET `value`='$banner_video_folder' WHERE id='2'";
		$sql3=mysqli_query($conn,$query3);
		if($sql3)
		{
			echo "<script>alert('Data Updated Successfully');</script>";
			echo "<script>window.location.href='banner.php';</script>";
		}
		else
		{
	 		echo "Not Updated";
		} 
   }	


$query1="UPDATE `e_went_control` SET `value`='$banner_text' WHERE id='1'";
$sql1=mysqli_query($conn,$query1);
if($sql1)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='banner.php';</script>";
}
else
{
	 echo "Not Updated";
}
$query2="UPDATE `e_went_control` SET `value`='$logo_text' WHERE id='4'";
$sql2=mysqli_query($conn,$query2);
if($sql2)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='banner.php';</script>";
}
else
{
	 echo "Not Updated";
}
$inner_logo_image=$_FILES['inner_logo_image']['name'];
$inner_logo_image_tmp_name=$_FILES['inner_logo_image']['tmp_name'];
$inner_logo_image_folder="images/".$inner_logo_image;
move_uploaded_file($inner_logo_image_tmp_name,$inner_logo_image_folder);
 $tempnew= explode('.',$inner_logo_image_folder);
   $extensionNew = end($tempnew);
   //echo $extensionNew;
 
	 if($inner_logo_image_folder=="images/")
	{
			$query5="UPDATE `e_went_control` SET `value`='$oldimage' WHERE id='3'";
			$sql5=mysqli_query($conn,$query5);
			if($sql5)
			{
				echo "<script>alert('Data Updated Successfully');</script>";
				echo "<script>window.location.href='banner.php';</script>";
			}
			else
			{
	 			echo "Not Updated";
			} 
	}   
   else 
   {
   	  	$query4="UPDATE `e_went_control` SET `value`='$inner_logo_image_folder' WHERE id='3'";
		$sql4=mysqli_query($conn,$query4);
		if($sql4)
		{
				echo "<script>alert('Data Updated Successfully');</script>";
				echo "<script>window.location.href='banner.php';</script>";
		}
		else
		{
	 		echo "Not Updated";
		}   
    }
     	
?>