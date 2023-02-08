<?php
$conn=mysqli_connect("localhost","root","","e-went");
$brand=$_REQUEST['brand'];
$query="INSERT INTO `e_went_control`(`id`, `control_id`, `value`, `vision`, `date_of_modification`) VALUES ('','$brand','','','')";
$sql=mysqli_query($conn,$query);
if($sql)
{
	header("location:index.php");
}	
else
{
	 echo "Not inserted";
}

?>