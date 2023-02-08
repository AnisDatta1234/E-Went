
<?php 
include "connection.php";
session_start();
$query1="SELECT * FROM e_went_control WHERE id='1'";
$sql1=mysqli_query($conn,$query1);
$res1=mysqli_fetch_assoc($sql1);

$query2="SELECT * FROM e_went_control WHERE id='4'";
$sql2=mysqli_query($conn,$query2);
$res2=mysqli_fetch_assoc($sql2);

$query3="SELECT * FROM  e_went_control WHERE id='3'";
$sql3=mysqli_query($conn,$query3);
$res3=mysqli_fetch_assoc($sql3);

$query4="SELECT * FROM  e_went_control WHERE id='2'";
$sql4=mysqli_query($conn,$query4);
$res4=mysqli_fetch_assoc($sql4);
$_SESSION['video4']=$res4['value'];

$query5="SELECT * FROM  e_went_control WHERE id='5'";
$sql5=mysqli_query($conn,$query5);
$res5=mysqli_fetch_assoc($sql5);

$query6="SELECT * FROM  e_went_control WHERE id='6'";
$sql6=mysqli_query($conn,$query6);
$res6=mysqli_fetch_assoc($sql6);
$_SESSION['image6']=$res6['value'];
//echo $_SESSION['image6'];


$query7="SELECT * FROM  e_went_control WHERE id='7'";
$sql7=mysqli_query($conn,$query7);
$res7=mysqli_fetch_assoc($sql7);
$_SESSION['image7']=$res7['value'];



$query8="SELECT * FROM e_went_control WHERE id='8'";
$sql8=mysqli_query($conn,$query8);
$res8=mysqli_fetch_assoc($sql8);

$query9="SELECT * FROM e_went_control WHERE id='9'";
$sql9=mysqli_query($conn,$query9);
$res9=mysqli_fetch_assoc($sql9);

$query11="SELECT * FROM e_went_control WHERE id='11'";
$sql11=mysqli_query($conn,$query11);
$res11=mysqli_fetch_assoc($sql11);


$query10="SELECT * FROM e_went_control WHERE id='10'";
$sql10=mysqli_query($conn,$query10);
$res10=mysqli_fetch_assoc($sql10);
$_SESSION['image10']=$res10['value'];


$query12="SELECT * FROM  e_went_control WHERE id='12'";
$sql12=mysqli_query($conn,$query12);
$res12=mysqli_fetch_assoc($sql12);
$_SESSION['image12']=$res12['value'];

$query14="SELECT * FROM  e_went_control WHERE id='14'";
$sql14=mysqli_query($conn,$query14);
$res14=mysqli_fetch_assoc($sql14);
//$_SESSION['image']=$res['value'];
$_SESSION['image14']=$res14['value'];

$query16="SELECT * FROM e_went_control WHERE id='16'";
$sql16=mysqli_query($conn,$query16);
$res16=mysqli_fetch_assoc($sql16);
$_SESSION['image16']=$res16['value'];

$query18="SELECT * FROM e_went_control WHERE id='18'";
$sql18=mysqli_query($conn,$query18);
$res18=mysqli_fetch_assoc($sql18);
$_SESSION['image18']=$res18['value'];

$query13="SELECT * FROM  e_went_control WHERE id='13'";
$sql13=mysqli_query($conn,$query13);
$res13=mysqli_fetch_assoc($sql13);


$query15="SELECT * FROM  e_went_control WHERE id='15'";
$sql15=mysqli_query($conn,$query15);
$res15=mysqli_fetch_assoc($sql15);
//$_SESSION['image']=$res['value'];

$query17="SELECT * FROM e_went_control WHERE id='17'";
$sql17=mysqli_query($conn,$query17);
$res17=mysqli_fetch_assoc($sql17);

$query19="SELECT * FROM e_went_control WHERE id='19'";
$sql19=mysqli_query($conn,$query19);
$res19=mysqli_fetch_assoc($sql19);


$query20="SELECT * FROM e_went_control WHERE id='20'";
$sql20=mysqli_query($conn,$query20);
$res20=mysqli_fetch_assoc($sql20);

$query21="SELECT * FROM e_went_control WHERE id='21'";
$sql21=mysqli_query($conn,$query21);
$res21=mysqli_fetch_assoc($sql21);
$_SESSION['image21']=$res21['value'];

$query24="SELECT * FROM e_went_control WHERE id='24'";
$sql24=mysqli_query($conn,$query24);
$res24=mysqli_fetch_assoc($sql24);
$_SESSION['oldimage']=$res24['value'];

$query22="SELECT * FROM e_went_control WHERE id='22'";
$sql22=mysqli_query($conn,$query22);
$res22=mysqli_fetch_assoc($sql22);
$_SESSION['oldpic']=$res22['value'];

$query26="SELECT * FROM e_went_control WHERE id='26'";
$sql26=mysqli_query($conn,$query26);
$res26=mysqli_fetch_assoc($sql26);
$_SESSION['oldpicpath']=$res26['value'];

$query23="SELECT * FROM e_went_control WHERE id='23'";
$sql23=mysqli_query($conn,$query23);
$res23=mysqli_fetch_assoc($sql23);

$query25="SELECT * FROM e_went_control WHERE id='25'";
$sql25=mysqli_query($conn,$query25);
$res25=mysqli_fetch_assoc($sql25);

$query27="SELECT * FROM e_went_control WHERE id='27'";
$sql27=mysqli_query($conn,$query27);
$res27=mysqli_fetch_assoc($sql27);

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

$query42="SELECT * FROM e_went_control WHERE id='42'";
$sql42=mysqli_query($conn,$query42);
$res42=mysqli_fetch_assoc($sql42);
$_SESSION['image42']=$res42['value'];



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

$query49="SELECT * FROM e_went_control WHERE id='49'";
$sql49=mysqli_query($conn,$query49);
$res49=mysqli_fetch_assoc($sql49);
?>
<!doctype html>
<html lang="en">
    
<!-- Mirrored from technext.github.io/nomad-force/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 06:50:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
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
<style>
/* Float four columns side by side */
.column {
  height:600px;
  float: left;
  width: 25%;
  padding: 0 5px;
}

.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
  height:600px;
    width: 100%;
    display: block;
    margin-bottom: 10px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #0df0cb;
  color: white;
}

.fa {font-size:50px;}
</style>
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
</style>
<!--


-->
    </head>
    
    <body>
    <script>
                  
    </script>  
        <main>

            <section class="hero" id="hero">
                <div class="heroText">
                    <h1 class="text-white mt-5 mb-lg-4" data-aos="zoom-in" data-aos-delay="800">
                      <?php echo $res1['value'];?>     
                    </h1>

                    <p class="text-secondary-white-color" data-aos="fade-up" data-aos-delay="1000">
                        <strong class="custom-underline"> </strong>
                    </p>
                </div>

                <div class="videoWrapper">
                    <video autoplay loop muted class="custom-video">
                        <source src="<?php echo $res4['value'];?>" type="video/mp4">

                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="overlay"></div>
            </section>

            <nav class="navbar navbar-expand-lg bg-light shadow-lg">
                <div class="container">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="<?php echo $res3['value'];?>" height="40px" alt=""><strong style="color:blue"><?php echo $res2['value'];?>
                  
                        </strong>
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style="color:green;">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Pride Notes</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#">Products</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#">Feature Highlites</a>
                            </li>
							<li class="nav-item">
                                <a class="nav-link" href="#">News & Events</a>
                            </li>						                         
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <section class="section-padding pb-0" id="about">

                <div class="container-fluid">
				
                    <div class="row">
                        <div class="col-lg-3 col-12 p-0">      
                            <img src="<?php echo $res43['value'];?>" class="img-fluid about-image" alt="">
                        </div>

                        <div class="col-lg-3 col-12 bg-dark">  
                            <div class="d-flex flex-column flex-wrap justify-content-center h-100 py-5 px-4 pt-lg-4 pb-lg-0">
                                <h4 class="text-white mb-3" data-aos="fade-up"><?php echo $res34['value'];?></h4>

                                

                            </div>
                        </div>
                        <div class="col-lg-6 col-12 p-0">  
                            <section id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?php echo $res44['value'];?>" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-warning">
                                            <h3 class="text-white mb-0"><?php echo $res37['value'];?></h3>

                                            <p class="text-secondary-white-color mb-0"></p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?php echo $res46['value'];?>" alt="">

                                        <div class="team-thumb bg-primary">
                                            <h3 class="text-white mb-0"><?php echo $res38['value'];?></h3>

                                            <p class="text-secondary-white-color mb-0"></p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?php echo $res47['value'];?>" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-success">
                                            <h3 class="text-white mb-0"><?php echo $res39['value'];?></h3>

                                            <p class="text-secondary-white-color mb-0"></p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?php echo $res48['value'];?>" alt="">

                                        <div class="team-thumb bg-info">
                                            <h3 class="text-white mb-0"><?php echo $res40['value'];?></h3>

                                            <p class="text-secondary-white-color mb-0"></p>
                                        </div>
                                    </div>

                                    <div class="carousel-item">
                                        <img src="<?php echo $res49['value'];?>" class="img-fluid team-image" alt="">

                                        <div class="team-thumb bg-danger">
                                            <h3 class="text-white mb-0"><?php echo $res41['value'];?></h3>

                                            <p class="text-secondary-white-color mb-0"></p>
                                        </div>
                                    </div>
                                </div>

                                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                                      <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>

                                      <span class="visually-hidden">Next</span>
                                </button>
                            </section>

                        </div>
                    </div>
                </div>
                            <div class="container mb-5 pb-lg-5">
                    <div class="row">
                        <div class="col-12"><br><br>
                            <h2 class="mb-3" data-aos="fade-up"><?php echo $res8['value'];?></h2>
                        </div>

                        <div class="col-lg-6 col-12 mt-3 mb-lg-5">
                            <p class="me-4" data-aos="fade-up" data-aos-delay="300"><!-- Over the years, SARAOGI group has diversified its product portfolio and has become a trusted name across various sectors including energy, minerals, FMCG and finance. We have now added focus to the emerging future of the automobile industry – E-Rickshaws and E-Loaders. We are a leading business house of India with rich experience and highly qualified top management and workforce across all dynamics of business. We strive for long term association and value for all our stakeholders including vendors, employees, management, shareholders. Our motive is to focus and rely on superior quality products with maximum customer satisfaction. -->
                                 <?php echo $res9['value'];?>
                            </p>
							<h3 class="mb-3" data-aos="fade-up"><?php echo $res33['value'];?></h3>
                            <p data-aos="fade-up" data-aos-delay="500"
                              >
                              <?php echo $res34['value'];?>
                            </p>
                        </div>

                        <div class="col-lg-6 col-12 mt-lg-3 mb-lg-5">						
							<img src="  <?php echo $res10['value'];?>" width="98%" alt=""><br>
							<!-- All our vehicles are 100% compliant with government regulations as per CMVR Act 1989. Our vehicles are intensively tested across all parameters and conditions by various government agencies by either ICAT/ARAI/CIRT and duly certified by them. All our vehicles are state approved by as per local regulations. -->
              <?php echo $res11['value'];?>
                        </div>

                    </div>
                </div>
			</section>
			 <section class="section-padding" id="products">
                <div class="container">
                    <div class="row">
<div class="cover">
    <button class="left" onclick="leftScroll()">Left</button>
   <div class="scroll-images">
   <div class="child" style="margin-left: 14px;">
                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">Products</h2>
                        </div>
						<div class="card1">
  <img src="<?php echo $res12['value'];?>" alt="Denim Jeans" style="width:100%">
  <h5>Mio</h5>
  <p class="price1">₹67,500</p>
  <p><?php echo $res13['value'];?></p>
  
</div>
<div class="card1">
  <img src="<?php echo $res14['value'];?>" alt="Denim Jeans" style="width:100%">
  <h5>Rabbitor</h5>
  <p class="price1"></p>
  <p><?php echo $res15['value'];?></p>
  
</div>
<div class="card1">
  <img src="<?php echo $res16['value'];?>" alt="Denim Jeans" style="width:100%">
  <h5>Marium</h5>
  <p class="price1">₹60,000</p>
  <p><?php echo $res17['value'];?></p>
  
</div>
<div class="card1">
  <img src="<?php echo $res18['value'];?>" alt="Denim Jeans" style="width:100%">
  <h5>JV</h5>
  <p class="price1">₹55,000</p>
  <p>1<?php echo $res19['value'];?></p>
  
</div>                 
 </div>
   <button class="right" onclick="rightScroll()">Right</button>
   </div>
</div>     
                    </div>
                </div>
            </section>
			<section class="section-padding" id="Features">			
                <div class="container">
                    <div class="row">
					<br><br><br><br>
						 <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up"><?php echo $res20['value'];?></h2>
                        </div>
                       <div class="row">
  <img src="<?php echo $res21['value'];?>" alt="Computer man" style="width:100%;" usemap="#workmap" >
	<map name="workmap">
		
		<area target="_self" alt="Light" title="Light" href="#" onclick="myFunction()" coords="330,230,14" shape="circle">
		<area target="_blank" alt="Remote" onclick="myFunction()" title="Remote" href="#" coords="510,310,11" shape="circle">
		<area target="_blank" alt="Brake" onclick="myFunction()" title="Brake" href="#" coords="900,505,14" shape="circle">
		<area target="_blank" alt="Back" onclick="myFunction()" title="Back" href="#" coords="945,180,13" shape="circle">
	</map>
	</img>
	<div class="popup">
  <span class="popuptext" id="myPopup">LED Headlight</span>
</div>
<div class="popup01">
  <span class="popuptext01" id="myPopup">Backrest</span>
</div>
<div class="popup02">
  <span class="popuptext02" id="myPopup">ABS</span>
</div>
<div class="popup03">
  <span class="popuptext03" id="myPopup">Remote Key</span>
</div>
        </div>
  </div>
</div>

                    </div>
                </div>
				<script>
// When the user clicks on div, open the popup
//function myFunction() {
  //var popup = document.getElementById("myPopup");
  //popup.classList.toggle("show");
//}
</script>
<script>
 
function leftScroll() {
        const left = document.querySelector(".scroll-images");
        left.scrollBy(200, 0);
      }
      function rightScroll() {
        const right = document.querySelector(".scroll-images");
        right.scrollBy(-200, 0);
      }
	  

</script>
            </section>
            <section class="news section-padding" id="news">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-5 text-center" data-aos="fade-up">News & Events</h2>
                        </div>

                        <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                            <div class="news-thumb" data-aos="fade-up">
                                <a href="news-detail.html" class="news-image-hover news-image-hover-warning">
                                    <img src="<?php echo $res22['value'];?>" class="img-fluid large-news-image news-image" alt="">
                                </a>

                                <div class="news-category bg-warning text-white">News</div>
                                
                                <div class="news-text-info">
                                    <h5 class="news-title">
                                        <a href="news-detail.html" class="news-title-link">C<!-- heck out the glimpses of the 16th Electric Vehicles Expo in India. An initiative to build a greener, cleaner and pollution-free tomorrow. E-Went is proud to be a part of this wonderful event. -->
                                          <?php echo $res23['value'];?>
                                        </a>
                                    </h5>

                                    <span class="text-muted">22 hours ago</span>
                                </div>
                            </div> 
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100">
                                    
                                    <a href="news-detail.html" class="news-image-hover news-image-hover-primary">
                                        <img src="<?php echo $res24['value'];?>" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category bg-primary text-white">Events</div>
                                </div>
                                
                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="news-detail.html" class="news-title-link"><!-- Whenever & wherever you ride, never ever forget to wear a helmet. Life is priceless! -->
                                              <?php echo $res25['value'];?>
                                            </a>
                                        </h5>

                                        <div class="d-flex flex-wrap">
                                            <span class="text-muted me-2">
                                                <i class="bi-geo-alt-fill me-1 mb-2 mb-lg-0"></i>
                                                Kolkata,
                                            </span>

                                            <span class="text-muted">August 6, 2022</span>
                                        </div>
                                    </div>
                                </div>
                            </div> 

                            <div class="news-thumb news-two-column d-flex flex-column flex-lg-row" data-aos="fade-up">
                                <div class="news-top w-100" data-aos="fade-up">
                                    
                                    <a href="news-detail.html" class="news-image-hover news-image-hover-success">
                                        <img src="<?php echo $res26['value'];?>" class="img-fluid news-image" alt="">
                                    </a>

                                    <div class="news-category bg-success text-white">News</div>
                                </div>
                                
                                <div class="news-bottom w-100">
                                    <div class="news-text-info">
                                        <h5 class="news-title">
                                            <a href="news-detail.html" class="news-title-link"><?php echo $res27['value'];?></a>
                                        </h5>

                                        <span class="text-muted">6 days ago</span>
                                    </div>
                                </div>
                            </div> 
                        </div>

                    </div>
                </div>
				
            </section>

            <section class=" contact section-padding" id="contact">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-7 col-12 mx-auto">

                            <h2 class="mb-4 text-center" data-aos="fade-up">Dont' wait, enquire now</h2>

                            <form action="#" method="post" class="contact-form" role="form" data-aos="fade-up">

                                <div class="row">
                                    
                                    <div class="col-lg-6 col-6">
                                        <label for="name" class="form-label">Name <sup class="text-danger">*</sup></label>

                                        <input type="text" name="name" id="name" class="form-control" placeholder="Full name" required>
                                    </div>

                                    <div class="col-lg-6 col-6">
                                        <label for="email" class="form-label">Email <sup class="text-danger">*</sup></label>

                                        <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                    </div>

                                    <div class="col-12 my-4">
                                        <label for="message" class="form-label">How can we help?</label>

                                        <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tell us about the project" required></textarea>
                                        
                                    </div>

                                    <div class="col-12">
                                        <label for="services" class="form-label">Products<sup class="text-danger">*</sup></label>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" id="checkbox1" name="checkbox1" class="form-check-input">

                                            <label class="form-check-label" for="checkbox1">Mio</label>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-12 my-2 my-lg-0">
                                        <div class="form-check">
                                            <input type="checkbox" id="checkbox2" name="checkbox2" class="form-check-input">

                                            <label class="form-check-label" for="checkbox2">Rabbitor</label>
                                          </div>
                                    </div>

                                    <div class="col-lg-4 col-12">
                                        <div class="form-check">
                                            <input type="checkbox" id="checkbox3" name="checkbox3" class="form-check-input">

                                            <label class="form-check-label" for="checkbox3">Electric</label>
                                          </div>
                                    </div>
                                </div>

                                <div class="col-lg-5 col-12 mx-auto mt-5">
                                    <button type="submit" class="form-control">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </section>
            <section class="google-map">
                
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14733.812480218578!2d88.2132494!3d22.5995485!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027f7ab90eae25%3A0x202d8609de562a26!2sKamdhenu%20Udyog%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1672308085679!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </section>

        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h4 class="text-white">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Factory Address
                        </h4>
						<a href="#" target="_parent">Junglepur Complex Gate No.3,Mauza-Baniara J.L No.26 P.S. Domjur,Howrah West Bengal</a>
                        
                    </div>
					<a href="mailto:info@company.com" class="custom-link mt-3 mb-5"> Mail ID : customer.care@e-went.com</a>
                    <div class="col-6"
                        class="copyright-text mb-0">                        
                        Office Address: <a href="#" target="_parent">Centre Point,21 Hemanta Basu Street,2nd Floor, Suite No 210A, Kolkata - 01</a><br>
                    
                        Contact No : <a href="#" target="_blank">+91 98316 03444</a>
                    </p>
                    Copyright © E-Went 2021 
                    </div>

                    <div class="col-lg-3 col-5 ms-auto">
                        <ul class="social-icon">
                            <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                            <li><a href="#" class="social-icon-link bi-twitter"></a></li>

                            <li><a href="#" class="social-icon-link bi-whatsapp"></a></li>

                            <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                            <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                        </ul>
                    </div>

                </div>
            </section>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/magnific-popup-options.js"></script>
        <script src="js/scrollspy.min.js"></script>
        <script src="js/custom.js"></script>

    </body>

<!-- Mirrored from technext.github.io/nomad-force/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Sep 2022 06:50:44 GMT -->
</html>