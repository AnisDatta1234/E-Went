<?php 
session_start();
include "connection.php";
$product_text13=$_REQUEST['product_text13'];
$product_text15=$_REQUEST['product_text15'];
$product_text17=$_REQUEST['product_text17'];
$product_text19=$_REQUEST['product_text19'];

$query13="UPDATE e_went_control SET value='$product_text13' WHERE id='13'";
$sql13=mysqli_query($conn,$query13);
if($sql13)
{
	 echo "<script>alert('Updated Successfully');</script>";
	 echo "<script>window.location.href='products.php';</script>";
}
else
{
		echo "<script>alert('Not Updated');</script>";
	   echo "<script>window.location.href='products.php';</script>"; 
}

$query15="UPDATE e_went_control SET value='$product_text15' WHERE id='15'";
$sql15=mysqli_query($conn,$query15);
if($sql15)
{
	 echo "<script>alert('Updated Successfully');</script>";
	 echo "<script>window.location.href='products.php';</script>";
}
else
{
		echo "<script>alert('Not Updated');</script>";
	   echo "<script>window.location.href='products.php';</script>";  
}

$query17="UPDATE e_went_control SET value='$product_text17' WHERE id='17'";
$sql17=mysqli_query($conn,$query17);
if($sql13)
{
	 echo "<script>alert('Updated Successfully');</script>";
	 echo "<script>window.location.href='products.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	   echo "<script>window.location.href='products.php';</script>"; 
}

$query19="UPDATE e_went_control SET value='$product_text19' WHERE id='19'";
$sql19=mysqli_query($conn,$query19);
if($sql19)
{
	 echo "<script>alert('Updated Successfully');</script>";
	 echo "<script>window.location.href='products.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";
	   echo "<script>window.location.href='products.php';</script>"; 
}

$image12=$_SESSION['image12'];
$product_image12=$_FILES['product_image12']['name'];
$product_image12_tmp_name=$_FILES['product_image12']['tmp_name'];
$product_image12_path="images/".$product_image12;
move_uploaded_file($product_image12_tmp_name,$product_image12_path);
if($product_image12_path=="images/")
{
	$query12_new="UPDATE e_went_control SET value='$image12' WHERE id='12'";
	$sql12_new=mysqli_query($conn,$query12_new);
	if($sql12_new)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}
	else 
	{
		 	echo "<script>alert('Not Updated');</script>";
	 	  echo "<script>window.location.href='products.php';</script>"; 
	} 
}	
else 
{
	$query12="UPDATE e_went_control SET value='$product_image12_path' WHERE id='12'";
    $sql12=mysqli_query($conn,$query12);
	if($sql12)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}	
	else 
	{
		 echo "<script>alert('Not Updated');</script>";
	   	echo "<script>window.location.href='products.php';</script>"; 
	}
}

$image14=$_SESSION['image14'];
$product_image14=$_FILES['product_image14']['name'];
$product_image14_tmp_name=$_FILES['product_image14']['tmp_name'];
$product_image14_path="images/".$product_image14;
move_uploaded_file($product_image14_tmp_name,$product_image14_path);

if($product_image14_path=="images/")
{
	$query14_new="UPDATE e_went_control SET value='$image14' WHERE id='14'";
	$sql14_new=mysqli_query($conn,$query14_new);
	if($sql14_new)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}
	else 
	{
		 	echo "<script>alert('Not Updated');</script>";
	 	  echo "<script>window.location.href='products.php';</script>"; 
	} 
}	
else 
{
	$query14="UPDATE e_went_control SET value='$product_image14_path' WHERE id='14'";
    $sql14=mysqli_query($conn,$query14);
	if($sql14)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}	
	else 
	{
		 echo "<script>alert('Not Updated');</script>";
	   	echo "<script>window.location.href='products.php';</script>"; 
	}
}
$image16=$_SESSION['image16'];
$product_image16=$_FILES['product_image16']['name'];
$product_image16_tmp_name=$_FILES['product_image16']['tmp_name'];
$product_image16_path="images/".$product_image16;
move_uploaded_file($product_image16_tmp_name,$product_image16_path);
if($product_image16_path=="images/")
{
	$query16_new="UPDATE e_went_control SET value='$image16' WHERE id='16'";
	$sql16_new=mysqli_query($conn,$query16_new);
	if($sql16_new)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}
	else 
	{
		 	echo "<script>alert('Not Updated');</script>";
	 	  echo "<script>window.location.href='products.php';</script>"; 
	} 
}	
else 
{
	$query16="UPDATE e_went_control SET value='$product_image16_path' WHERE id='16'";
	$sql16=mysqli_query($conn,$query16);
	if($sql16)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}
	else 
	{
		 echo "<script>alert('Not Updated');</script>";
		   echo "<script>window.location.href='products.php';</script>"; 
	}
}

$image18=$_SESSION['image18'];
$product_image18=$_FILES['product_image18']['name'];
$product_image18_tmp_name=$_FILES['product_image18']['tmp_name'];
$product_image18_path="images/".$product_image18;
move_uploaded_file($product_image18_tmp_name,$product_image18_path);
if($product_image18_path=="images/")
{
	$query18_new="UPDATE e_went_control SET value='$image18' WHERE id='18'";
	$sql18_new=mysqli_query($conn,$query18_new);
	if($sql18_new)
	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}
	else 
	{
		 	echo "<script>alert('Not Updated');</script>";
	 	  echo "<script>window.location.href='products.php';</script>"; 
	} 
}	
else 
{
	$query18="UPDATE e_went_control SET value='$product_image18_path' WHERE id='18'";
	$sql18=mysqli_query($conn,$query18);
	if($sql18)
 	{
		 echo "<script>alert('Updated Successfully');</script>";
		 echo "<script>window.location.href='products.php';</script>";
	}	
	else 
	{
		 echo "<script>alert('Not Updated');</script>";
		   echo "<script>window.location.href='products.php';</script>"; 
	}
}

?>