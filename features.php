<?php 
session_start();
include "connection.php";
$query20="SELECT * FROM  e_went_control WHERE id='20'";
$sql20=mysqli_query($conn,$query20);
$res20=mysqli_fetch_assoc($sql20);


// $query21="SELECT * FROM  e_went_control WHERE id='20'";
// $sql20=mysqli_query($conn,$query20);
// $res20=mysqli_fetch_assoc($conn,$sql20);

$query1="SELECT * FROM  e_went_control WHERE id='4'";
$sql1=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($sql1);
$query2="SELECT * FROM  e_went_control WHERE id='3'";
$sql2=mysqli_query($conn,$query2);
$res=mysqli_fetch_assoc($sql2);
// $result=mysqli_fetch_assoc($sql);
// $query1="SELECT * FROM  e_went_control WHERE id='4'";
// $sql1=mysqli_query($conn,$query1);
// $row=mysqli_fetch_assoc($sql1);
// $query2="SELECT * FROM  e_went_control WHERE id='3'";
// $sql2=mysqli_query($conn,$query2);
// $res=mysqli_fetch_assoc($sql2);
// $_SESSION['image']=$res['value'];

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
 <form action="update_feature.php" enctype="multipart/form-data" method="POST">
  <div class="container">
  
     
      <label for="email"><b>Feature Text</b></label>
       <input type="text" placeholder="Enter Banner Text" name="feature_text" id="" value="<?php echo $res20['value'];?>">

      
   
          <label for=""><b>Feature Image</b></label>
        <input type="file" placeholder="" name="feature_image" id="">

   <!--  <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> -->

       <button type="submit" class="registerbtn">Update</button>
  </div>
  
  <div class="container signin">
  
  </div>
</form>
</body>
</html>