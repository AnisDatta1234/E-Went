<?php 
session_start();
include "connection.php";
$banner_text=$_REQUEST['banner_text'];
$query5="UPDATE e_went_control SET value='$banner_text' WHERE id='5'";
$sql5=mysqli_query($conn,$query5);
if($sql5)
{
	echo "<script>alert('Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}
else 
{
	 echo "Not updated";
	 echo "<script>window.location.href='pride_notes.php';</script>";
}

$banner_heading=$_REQUEST['banner_heading'];
$query8="UPDATE e_went_control SET value='$banner_heading' WHERE id='8'";
$sql8=mysqli_query($conn,$query8);
if($sql8)
{
	echo "<script>alert('Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}
else 
{
	 echo "Not updated";
	 echo "<script>window.location.href='pride_notes.php';</script>";
}	

 $pride_note_details=$_REQUEST['pride_note_details'];
$query9="UPDATE e_went_control SET value='$pride_note_details' WHERE id='9'";
$sql9=mysqli_query($conn,$query9);
if($sql9)
{
	echo "<script>alert('Updated Successfully');</script>";	
	echo "<script>window.location.href='pride_notes.php';</script>";
}
else 
{
	 echo "<script>alert('Not Updated');</script>";	
	 echo "<script>window.location.href='pride_notes.php';</script>";
}

$right_banner_details=$_REQUEST['right_banner_details'];
$query11="UPDATE e_went_control SET value='$right_banner_details' WHERE id='11'";
$sql11=mysqli_query($conn,$query11);
if($sql11)
{
	echo "<script>alert('Updated Successfully');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}
else 
{
	 echo "Not updated";
	 echo "<script>window.location.href='pride_notes.php';</script>";
}

$image6=$_SESSION['image6'];
$banner_image=$_FILES['banner_image']['name'];
$banner_image_tmp_name=$_FILES['banner_image']['tmp_name'];
$path_banner_image="images/".$banner_image;
move_uploaded_file($banner_image_tmp_name,$path_banner_image);
if($path_banner_image=="images/")
{
	$query6_new="UPDATE e_went_control SET value='$image6' WHERE id='6'";
	$sql6_new=mysqli_query($conn,$query6_new);
	if($sql6_new)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		echo "<script>alert('Not Updated');</script>";
		 echo "<script>window.location.href='pride_notes.php';</script>";
	}	 
}

else 
{

	 $query6="UPDATE e_went_control SET value='$path_banner_image' WHERE id='6'";
	$sql6=mysqli_query($conn,$query6);
	if($sql6)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		 echo "<script>alert(' Not Updated');</script>";
	 	echo "<script>window.location.href='pride_notes.php';</script>";
	}
}

$image7=$_SESSION['image7'];
$banner_right_image=$_FILES['banner_right_image']['name'];
$banner_right_image_tmp_name=$_FILES['banner_right_image']['tmp_name'];
$path_banner_right_image="images/".$banner_right_image;
move_uploaded_file($banner_right_image_tmp_name,$path_banner_right_image);
if($path_banner_right_image=="images/")
{
	$query7_new="UPDATE e_went_control SET value='$image7' WHERE id='7'";
	$sql7_new=mysqli_query($conn,$query7_new);
	if($sql7_new)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		 echo "Not updated";
	 	echo "<script>window.location.href='pride_notes.php';</script>";
	}
}
else 
{
	 $query7="UPDATE e_went_control SET value='$path_banner_right_image' WHERE id='7'";
	$sql7=mysqli_query($conn,$query7);
	if($sql7)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
	 	echo "Not updated";
	 	echo "<script>window.location.href='pride_notes.php';</script>";
	}
}

$image10=$_SESSION['image10'];
$right_banner_image=$_FILES['right_banner_image']['name'];
$right_banner_image_tmp_name=$_FILES['right_banner_image']['tmp_name'];
$right_path_banner_image="images/".$right_banner_image;
move_uploaded_file($right_banner_image_tmp_name,$right_path_banner_image);
if($right_path_banner_image=="images/")
{
	
	$query10_new="UPDATE e_went_control SET value='$image10' WHERE id='10'";
	$sql10_new=mysqli_query($conn,$query10_new);
	if($sql10_new)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		echo "<script>alert('Not Updated');</script>";
		 echo "<script>window.location.href='pride_notes.php';</script>";
	}	
}
else 
{
	 $query10="UPDATE e_went_control SET value='$right_path_banner_image' WHERE id='10'";
	$sql10=mysqli_query($conn,$query10);
	if($sql10)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='pride_notes.php';</script>";
	}
}

$Pride_Notes_Moto_details_34=$_REQUEST['Pride_Notes_Moto_details_34'];
$query34="UPDATE e_went_control SET value='$Pride_Notes_Moto_details_34' WHERE id='34'";
$sql34=mysqli_query($conn,$query34);
	if($sql34)
   {
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='pride_notes.php';</script>";
	}
	

$Pride_Notes_Moto_Heading_33=$_REQUEST['Pride_Notes_Moto_Heading_33'];
$query33="UPDATE e_went_control SET value='$Pride_Notes_Moto_Heading_33' WHERE id='33'";
$sql33=mysqli_query($conn,$query33);
	if($sql33)
	{
		echo "<script>alert('Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	}
	else 
	{
		echo "<script>alert('Not Updated');</script>";
	 	echo "<script>window.location.href='pride_notes.php';</script>";
	}

$pride_note_details_heading_37=$_REQUEST['pride_note_details_heading_37'];
$query37="UPDATE e_went_control SET value='$pride_note_details_heading_37' WHERE id='37'";
$sql37=mysqli_query($conn,$query37);
if($sql37)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}	
else 
{
	echo "<script>alert('Data Not Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";	  
}

$pride_note_details_heading_38=$_REQUEST['pride_note_details_heading_38'];
$query38="UPDATE e_went_control SET value='$pride_note_details_heading_38' WHERE id='38'";
$sql38=mysqli_query($conn,$query38);
if($sql38)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}	
else 
{
	echo "<script>alert('Data Not Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";	  
}

$pride_note_details_heading_39=$_REQUEST['pride_note_details_heading_39'];
$query39="UPDATE e_went_control SET value='$pride_note_details_heading_39' WHERE id='39'";
$sql39=mysqli_query($conn,$query39);
if($sql39)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}	
else 
{
	echo "<script>alert('Data Not Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";	  
}

$pride_note_details_heading_40=$_REQUEST['pride_note_details_heading_40'];
$query40="UPDATE e_went_control SET value='$pride_note_details_heading_40' WHERE id='40'";
$sql40=mysqli_query($conn,$query40);
if($sql40)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}	
else 
{
	echo "<script>alert('Data Not Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";	  
}

$pride_note_details_heading_41=$_REQUEST['pride_note_details_heading_41'];
$query41="UPDATE e_went_control SET value='$pride_note_details_heading_41' WHERE id='41'";
$sql41=mysqli_query($conn,$query41);
if($sql41)
{
	echo "<script>alert('Data Updated Successfully');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";
}	
else 
{
	echo "<script>alert('Data Not Updated');</script>";
	echo "<script>window.location.href='pride_notes.php';</script>";	  
}

$image42=$_SESSION['image42'];
$pride_note_image=$_FILES['pride_note_image']['name'];
$pride_note_image_42_tmp_name=$_FILES['pride_note_image']['tmp_name'];
$path_pride_note_image_42="images/".$pride_note_image;
if($path_pride_note_image_42=="images/")
{
	 $query_42_new="UPDATE e_went_control SET value='$image42' WHERE id='42'";
	 $sql_42_new=mysqli_query($conn,$query_42_new);
	 if($sql_42_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_42="UPDATE e_went_control SET value='$path_pride_note_image_42' WHERE id='42'";
	 $sql_42=mysqli_query($conn,$query_42);
	 if($sql_42)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}
$image43=$_SESSION['image43'];
$pride_note_image_43=$_FILES['pride_note_image_43']['name'];
$pride_note_image_43_tmp_name=$_FILES['pride_note_image_43']['tmp_name'];
$path_pride_note_image_43="images/".$pride_note_image_43;
move_uploaded_file($pride_note_image_43_tmp_name,$path_pride_note_image_43);
if($path_pride_note_image_43=="images/")
{
	 $query_43_new="UPDATE e_went_control SET value='$image43' WHERE id='43'";
	 $sql_43_new=mysqli_query($conn,$query_43_new);
	 if($sql_43_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_43="UPDATE e_went_control SET value='$path_pride_note_image_43' WHERE id='43'";
	 $sql_43=mysqli_query($conn,$query_43);
	 if($sql_43)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	

$image44=$_SESSION['image44'];
$pride_note_image_44=$_FILES['pride_note_image_44']['name'];
$pride_note_image_44_tmp_name=$_FILES['pride_note_image_44']['tmp_name'];
$path_pride_note_image_44="images/".$pride_note_image_44;
move_uploaded_file($pride_note_image_44_tmp_name,$path_pride_note_image_44);
if($path_pride_note_image_44=="images/")
{
	 $query_44_new="UPDATE e_went_control SET value='$image44' WHERE id='44'";
	 $sql_44_new=mysqli_query($conn,$query_44_new);
	 if($sql_44_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_44="UPDATE e_went_control SET value='$path_pride_note_image_44' WHERE id='44'";
	 $sql_44=mysqli_query($conn,$query_44);
	 if($sql_44)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	


$image44=$_SESSION['image44'];
$pride_note_image_44=$_FILES['pride_note_image_44']['name'];
$pride_note_image_44_tmp_name=$_FILES['pride_note_image_44']['tmp_name'];
$path_pride_note_image_44="images/".$pride_note_image_44;
move_uploaded_file($pride_note_image_44_tmp_name,$path_pride_note_image_44);
if($path_pride_note_image_44=="images/")
{
	 $query_44_new="UPDATE e_went_control SET value='$image44' WHERE id='44'";
	 $sql_44_new=mysqli_query($conn,$query_44_new);
	 if($sql_44_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_44="UPDATE e_went_control SET value='$path_pride_note_image_44' WHERE id='44'";
	 $sql_44=mysqli_query($conn,$query_44);
	 if($sql_44)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	


$image46=$_SESSION['image46'];
$pride_note_image_46=$_FILES['pride_note_image_46']['name'];
$pride_note_image_46_tmp_name=$_FILES['pride_note_image_46']['tmp_name'];
$path_pride_note_image_46="images/".$pride_note_image_46;
move_uploaded_file($pride_note_image_46_tmp_name,$path_pride_note_image_46);
if($path_pride_note_image_46=="images/")
{
	 $query_46_new="UPDATE e_went_control SET value='$image46' WHERE id='46'";
	 $sql_46_new=mysqli_query($conn,$query_46_new);
	 if($sql_46_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_46="UPDATE e_went_control SET value='$path_pride_note_image_46' WHERE id='46'";
	 $sql_46=mysqli_query($conn,$query_46);
	 if($sql_46)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	


$image44=$_SESSION['image44'];
$pride_note_image_44=$_FILES['pride_note_image_44']['name'];
$pride_note_image_44_tmp_name=$_FILES['pride_note_image_44']['tmp_name'];
$path_pride_note_image_44="images/".$pride_note_image_44;
move_uploaded_file($pride_note_image_44_tmp_name,$path_pride_note_image_44);
if($path_pride_note_image_44=="images/")
{
	 $query_44_new="UPDATE e_went_control SET value='$image44' WHERE id='44'";
	 $sql_44_new=mysqli_query($conn,$query_44_new);
	 if($sql_44_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_44="UPDATE e_went_control SET value='$path_pride_note_image_44' WHERE id='44'";
	 $sql_44=mysqli_query($conn,$query_44);
	 if($sql_44)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	

$image44=$_SESSION['image44'];
$pride_note_image_44=$_FILES['pride_note_image_44']['name'];
$pride_note_image_44_tmp_name=$_FILES['pride_note_image_44']['tmp_name'];
$path_pride_note_image_44="images/".$pride_note_image_44;
move_uploaded_file($pride_note_image_44_tmp_name,$path_pride_note_image_44);
if($path_pride_note_image_44=="images/")
{
	 $query_44_new="UPDATE e_went_control SET value='$image44' WHERE id='44'";
	 $sql_44_new=mysqli_query($conn,$query_44_new);
	 if($sql_44_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_44="UPDATE e_went_control SET value='$path_pride_note_image_44' WHERE id='44'";
	 $sql_44=mysqli_query($conn,$query_44);
	 if($sql_44)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	

$image44=$_SESSION['image44'];
$pride_note_image_44=$_FILES['pride_note_image_44']['name'];
$pride_note_image_44_tmp_name=$_FILES['pride_note_image_44']['tmp_name'];
$path_pride_note_image_44="images/".$pride_note_image_44;
move_uploaded_file($pride_note_image_44_tmp_name,$path_pride_note_image_44);
if($path_pride_note_image_44=="images/")
{
	 $query_44_new="UPDATE e_went_control SET value='$image44' WHERE id='44'";
	 $sql_44_new=mysqli_query($conn,$query_44_new);
	 if($sql_44_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_44="UPDATE e_went_control SET value='$path_pride_note_image_44' WHERE id='44'";
	 $sql_44=mysqli_query($conn,$query_44);
	 if($sql_44)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	


$image46=$_SESSION['image46'];
$pride_note_image_46=$_FILES['pride_note_image_46']['name'];
$pride_note_image_46_tmp_name=$_FILES['pride_note_image_46']['tmp_name'];
$path_pride_note_image_46="images/".$pride_note_image_46;
move_uploaded_file($pride_note_image_46_tmp_name,$path_pride_note_image_46);
if($path_pride_note_image_46=="images/")
{
	 $query_46_new="UPDATE e_went_control SET value='$image46' WHERE id='46'";
	 $sql_46_new=mysqli_query($conn,$query_46_new);
	 if($sql_46_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_46="UPDATE e_went_control SET value='$path_pride_note_image_46' WHERE id='46'";
	 $sql_46=mysqli_query($conn,$query_46);
	 if($sql_46)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	


$image47=$_SESSION['image47'];
$pride_note_image_47=$_FILES['pride_note_image_47']['name'];
$pride_note_image_47_tmp_name=$_FILES['pride_note_image_47']['tmp_name'];
$path_pride_note_image_47="images/".$pride_note_image_47;
move_uploaded_file($pride_note_image_47_tmp_name,$path_pride_note_image_47);
if($path_pride_note_image_47=="images/")
{
	 $query_47_new="UPDATE e_went_control SET value='$image47' WHERE id='47'";
	 $sql_47_new=mysqli_query($conn,$query_47_new);
	 if($sql_47_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_47="UPDATE e_went_control SET value='$path_pride_note_image_47' WHERE id='47'";
	 $sql_47=mysqli_query($conn,$query_47);
	 if($sql_47)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	


$image48=$_SESSION['image48'];
$pride_note_image_48=$_FILES['pride_note_image_48']['name'];
$pride_note_image_48_tmp_name=$_FILES['pride_note_image_48']['tmp_name'];
$path_pride_note_image_48="images/".$pride_note_image_48;
move_uploaded_file($pride_note_image_48_tmp_name,$path_pride_note_image_48);
if($path_pride_note_image_48=="images/")
{
	 $query_48_new="UPDATE e_went_control SET value='$image48' WHERE id='48'";
	 $sql_48_new=mysqli_query($conn,$query_48_new);
	 if($sql_48_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_48="UPDATE e_went_control SET value='$path_pride_note_image_48' WHERE id='48'";
	 $sql_48=mysqli_query($conn,$query_48);
	 if($sql_48)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	

$image49=$_SESSION['image49'];
$pride_note_image_49=$_FILES['pride_note_image_49']['name'];
$pride_note_image_49_tmp_name=$_FILES['pride_note_image_49']['tmp_name'];
$path_pride_note_image_49="images/".$pride_note_image_49;
move_uploaded_file($pride_note_image_49_tmp_name,$path_pride_note_image_49);
if($path_pride_note_image_49=="images/")
{
	 $query_49_new="UPDATE e_went_control SET value='$image49' WHERE id='49'";
	 $sql_49_new=mysqli_query($conn,$query_46_new);
	 if($sql_49_new)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}	
}
else
{
	 $query_49="UPDATE e_went_control SET value='$path_pride_note_image_49' WHERE id='49'";
	 $sql_49=mysqli_query($conn,$query_49);
	 if($sql_49)
	 {
	 	  echo "<script>alert('Data Updated Successfully');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";
	 }
	 else 
	{
		echo "<script>alert('Data Not Updated');</script>";
		echo "<script>window.location.href='pride_notes.php';</script>";	  
	}
}	



?>