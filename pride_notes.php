<?php 
session_start();
include "connection.php";
// $query="SELECT * FROM  e_went_control WHERE id='5'";
// $sql=mysqli_query($conn,$query);
// $result=mysqli_fetch_assoc($sql);
$query1="SELECT * FROM  e_went_control WHERE id='4'";
$sql1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($sql1);
$query2="SELECT * FROM  e_went_control WHERE id='3'";
$sql2=mysqli_query($conn,$query2);
$res=mysqli_fetch_assoc($sql2);
//$_SESSION['image']=$res['value'];

$query5="SELECT * FROM e_went_control WHERE id='5'";
$sql5=mysqli_query($conn,$query5);
$res5=mysqli_fetch_assoc($sql5);

$query8="SELECT * FROM e_went_control WHERE id='8'";
$sql8=mysqli_query($conn,$query8);
$res8=mysqli_fetch_assoc($sql8);

$query9="SELECT * FROM e_went_control WHERE id='9'";
$sql9=mysqli_query($conn,$query9);
$res9=mysqli_fetch_assoc($sql9);

$query11="SELECT * FROM e_went_control WHERE id='11'";
$sql11=mysqli_query($conn,$query11);
$res11=mysqli_fetch_assoc($sql11);

$query33="SELECT * FROM e_went_control WHERE id='33'";
$sql33=mysqli_query($conn,$query33);
$res33=mysqli_fetch_assoc($sql33);

$query34="SELECT * FROM e_went_control WHERE id='34'";
$sql34=mysqli_query($conn,$query34);
$res34=mysqli_fetch_assoc($sql34);



$query37="SELECT * FROM e_went_control WHERE id='37'";
$sql37=mysqli_query($conn,$query37);
$res37=mysqli_fetch_assoc($sql37);

$query38="SELECT * FROM e_went_control WHERE id='38'";
$sql38=mysqli_query($conn,$query38);
$res38=mysqli_fetch_assoc($sql38);

$query39="SELECT * FROM e_went_control WHERE id='39'";
$sql39=mysqli_query($conn,$query39);
$res39=mysqli_fetch_assoc($sql39);

$query40="SELECT * FROM e_went_control WHERE id='40'";
$sql40=mysqli_query($conn,$query40);
$res40=mysqli_fetch_assoc($sql40);

$query41="SELECT * FROM e_went_control WHERE id='41'";
$sql41=mysqli_query($conn,$query41);
$res41=mysqli_fetch_assoc($sql41);


$query43="SELECT * FROM e_went_control WHERE id='43'";
$sql43=mysqli_query($conn,$query43);
$res43=mysqli_fetch_assoc($sql43);
$_SESSION['image43']=$res43['value'];

$query44="SELECT * FROM e_went_control WHERE id='44'";
$sql44=mysqli_query($conn,$query44);
$res44=mysqli_fetch_assoc($sql44);
$_SESSION['image44']=$res44['value'];

$query46="SELECT * FROM e_went_control WHERE id='46'";
$sql46=mysqli_query($conn,$query46);
$res46=mysqli_fetch_assoc($sql46);
$_SESSION['image46']=$res46['value'];

$query47="SELECT * FROM e_went_control WHERE id='47'";
$sql47=mysqli_query($conn,$query47);
$res47=mysqli_fetch_assoc($sql47);
$_SESSION['image47']=$res47['value'];

$query48="SELECT * FROM e_went_control WHERE id='48'";
$sql48=mysqli_query($conn,$query48);
$res48=mysqli_fetch_assoc($sql48);
$_SESSION['image48']=$res48['value'];

$query49="SELECT * FROM e_went_control WHERE id='49'";
$sql49=mysqli_query($conn,$query49);
$res49=mysqli_fetch_assoc($sql49);
$_SESSION['image49']=$res49['value'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>E-Went PRIDE IN EVERY RIDE</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com/">

        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;700;900&amp;display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link rel="stylesheet" href="css/magnific-popup.css">

        <link href="css/aos.css" rel="stylesheet">

        <link href="css/templatemo-nomad-force.css" rel="stylesheet">
		
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title></title>

<style>
.card1 {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: auto;
  text-align: center;
  font-family: arial;
    float: left;
  width: 24.6%;
  padding: 5px;
}

.price1 {
  color: grey;
  font-size: 22px;
}

.card1 button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card1 button:hover {
  opacity: 0.7;
}
</style>
<style>
/* Popup container - can be anything you want */
.popup .popup01 .popup02 .popup03{
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: fixed;
  width: 125px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  margin-top: -31%;
  left: 22%;
  margin-left: -44px;
}
/* The actual popup */
.popup01 .popuptext01 {
  visibility: fixed;
  width: 125px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  margin-top: -37%;
  left: 22%;
  margin-left: 570px;
}
/* The actual popup */
.popup02 .popuptext02 {
  visibility: fixed;
  width: 125px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  margin-top: -12.5%;
  left: 22%;
  margin-left: 520px;
}
/* The actual popup */
.popup03 .popuptext03 {
  visibility: fixed;
  width: 125px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  margin-top: -27.5%;
  left: 22%;
  margin-left: 311px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
/* Popup arrow */
.popup01 .popuptext01::after {
  content: "";
  position: absolute;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
/* Popup arrow */
.popup02 .popuptext02::after {
  content: "";
  position: absolute;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}
/* Popup arrow */
.popup03 .popuptext03::after {
  content: "";
  position: absolute;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}

.cover {
  padding: 0px 30px;
  position: relative;
}
.left {
  position: absolute;
  left: 0;
  top: 50%;
  transform: translateY(-50%);
}
.right {
  position: absolute;
  right: 0;
  top: 50%;
  transform: translateY(-50%);
}
.scroll-images::-webkit-scrollbar {
   -webkit-appearance: none;
}

.scroll-images {
  width: 100%;
  height: 888px;
  display: flex;
  flex-wrap: nowrap;
  overflow-x: auto;
  overflow-y: hidden;
  scroll-behavior: smooth;
  -webkit-overflow-scrolling: touch;
}

.scroll-images::-webkit-scrollbar {
  width: 5px;
  height: 8px;
  background-color: #aaa;
}



.child {
  margin: 1px 10px;
  overflow: hidden;
}
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=file] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=file]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
	
</head>
<body><nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="index-2.html">


                        <img src="<?php echo $res['value'];?>" height="40px" alt=""><strong style="color:blue">   <?php echo $row['value'];?></strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="banner.php">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="pride_notes.php">Pride Notes</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="products.php">Products</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="features.php">Feature Highlites</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="news.php">News & Events</a>
                            </li>						                         
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
 <form action="update_pride_notes.php" enctype="multipart/form-data" method="POST">
  <div class="container">
  
     
      <label for="email"><b>Banner Text</b></label>
       <input type="text" placeholder="Enter Banner Text" name="banner_text" id="" value="<?php echo $res5['value'];?>">

       <!-- <label for="psw"><b>Banner Image</b></label>
       <input type="file" placeholder="" name="banner_image" id="" >

        <label for="psw"><b>Banner Right Image</b></label>
       <input type="file" placeholder="" name="banner_right_image" id="" > -->

   
          <label for=""><b>Banner Heading</b></label>
        <input type="text" placeholder="Enter Inner Text" name="banner_heading" id=""  value="<?php echo $res8['value'];?>">

       
        <label for=""><b>Pride Note Details Heading1</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details_heading_37" id=""  value="<?php echo $res37['value'];?>">

       <label for=""><b>Pride Note Details Heading2</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details_heading_38" id=""  value="<?php echo $res38['value'];?>">

        <label for=""><b>Pride Note Details Heading3</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details_heading_39" id=""  value="<?php echo $res39['value'];?>">

        <label for=""><b>Pride Note Details Heading4</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details_heading_40" id=""  value="<?php echo $res40['value'];?>">


        <label for=""><b>Pride Note Details Heading5</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details_heading_41" id=""  value="<?php echo $res41['value'];?>">

         <label for=""><b>Pride Note Details</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details" id=""  value="<?php echo $res9['value'];?>">

         <label for="psw"><b>Right Banner Image(Pride Notes)</b></label>
       <input type="file" placeholder="" name="right_banner_image" id="" >


         <label for=""><b>Pride Note Moto Details</b></label>
        <input type="text" placeholder="Enter Inner Text" name="Pride_Notes_Moto_details_34" id=""  value="<?php echo $res34['value'];?>">


         <label for=""><b>Pride_Notes_Moto_Heading</b></label>
        <input type="text" placeholder="" name="Pride_Notes_Moto_Heading_33" id=""  value="<?php echo $res33['value'];?>">

        <label for="psw"><b>Pride Notes Image1</b></label>
       <input type="file" placeholder="" name="pride_note_image_43" id="" >

       <label for="psw"><b>Pride Notes Image2</b></label>
       <input type="file" placeholder="" name="pride_note_image_44" id="" >

       <label for="psw"><b>Pride Notes Image3</b></label>
       <input type="file" placeholder="" name="pride_note_image_46" id="" >

       <label for="psw"><b>Pride Notes Image4</b></label>
       <input type="file" placeholder="" name="pride_note_image_47" id="" >

       <label for="psw"><b>Pride Notes Image5</b></label>
       <input type="file" placeholder="" name="pride_note_image_48" id="" >


       <label for="psw"><b>Pride Notes Image6</b></label>
       <input type="file" placeholder="" name="pride_note_image_49" id="" >


         <!-- <label for=""><b>Pride Note Details</b></label>
        <input type="text" placeholder="Enter Inner Text" name="pride_note_details" id=""  value="<?php echo $res9['value'];?>">
 -->
       <label for=""><b>Right Banner Details</b></label>
        <input type="text" placeholder="Enter Inner Text" name="right_banner_details" id=""  value="<?php echo $res11['value'];?>">


   <!--  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

       <button type="submit" class="registerbtn">Update</button>
  </div>
  
  <div class="container signin">
  
  </div>
</form>
</body>
</html>