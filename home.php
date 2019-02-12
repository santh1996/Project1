<?php
session_start();
//$db = mysqli_connect('localhost','root','','accounts');
//include('login.php');
//$username = $_POST['username'];
//echo "$username";

//LFI/RFI attack
if(isset($_GET['page']))
{
    include($_GET['page']);
}
include ('Log2.php');
    //$users=$_GET['username'];
    //echo "Welcome ".$users;
    
     $db = mysqli_connect('localhost','root','','accounts');
     $user=$_SESSION['username'];

     if($user==true)
     {

     }
     else
     {
        header('location:index.php');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Bootstrap CSS File -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  
    <!-- Main Stylesheet File -->
    <link href="css123/style123.css" rel="stylesheet">

</head>

<body id="body">
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <!--<div class="common-left float-left">
        <i class="ministry"></i> <a target="_blank" href="https://en.wikipedia.org/wiki/Government_of_India" title="GOVERNMENT OF INDIA">GovtINFO</a>
      </div>-->
      <div id="logo" class="pull-left">
        <a href="#body"><img src="image/logoindia.png" alt=GovtInfo" height="40px;" /></a>
      </div>
      <div class="social-links float-right">
        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
      </div>
    </div>
  </section>

  <!-- Header -->
  <header id="header">
    <div class="container">
      <div id="logo" class="pull-left">
        <!--<h1><a href="#body" class="scrollto">Govt<span>INFO</span></a></h1>-->
        <i class="ministry"></i> <a target="_blank" href="https://www.india.gov.in" title="GOVERNMENT OF INDIA"><img src="image/s.jpg" alt=GovtInfo" height="50px;" /></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu" style="margin-top: 10px;">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#rti">RTI</a></li>
          <li><a href="#fp">Function & Policies</a></li>
          <li><a href="#contact">Contact Us</a></li>
          <li class="menu-has-children"><a href="#">Services</a>
            <ul>
              <li><a href="aadhar.php">Aadhar Enrolment</a></li>
              <li><a href="passport.php">Passport Registration</a></li>
              <li><a href="pancard.php">Apply Pancard Here</a></li>
              <li><a href="voterid.php">Voter ID Enrolment</a></li>
            </ul>
          </li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </nav>
    </div>
  </header>


  <!-- intro start -->
  <section id="intro">
    <div class="intro-content">
      <h2>Welcome to<br>GovtINFO</h2>
      <div>
        <a href="#about" class="btn-get-started scrollto">Learn More</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <div class="item" style="background-image: url('img/intro-carousel/a.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/b.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/c.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/d.jpg');"></div>
      <div class="item" style="background-image: url('img/intro-carousel/e.jpg');"></div>
    </div>
  </section> <!--intro end -->


    <!-- about section start -->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>About Us</h2>
        </div>
          <div class="rows">
            <p style="color: black;">The Government of India (IAST: Bhārata Sarakāra), often abbreviated as GoI, is the union government created by the constitution of India as the legislative, executive and judicial authority of the union of 29 states and seven union territories of a constitutionally democratic republic. It is located in New Delhi, the capital of India.<br>The Indian subcontinent was home to the urban Indus Valley Civilisation of the 3rd millennium BCE. In the following millennium, the oldest scriptures associated with Hinduism began to be composed. Social stratification, based on caste, emerged in the first millennium BCE, and Buddhism and Jainism arose. Early political consolidations took place under the Maurya and Gupta empires; the later peninsular Middle Kingdoms influenced cultures as far as southeast Asia. In the medieval era, Judaism, Zoroastrianism, Christianity, and Islam arrived, and Sikhism emerged, all adding to the region's diverse culture. Much of the north fell to the Delhi sultanate; the south was united under the Vijayanagara Empire. The economy expanded in the 17th century in the Mughal Empire. In the mid-18th century, the subcontinent came under British East India Company rule, and in the mid-19th under British crown rule. A nationalist movement emerged in the late 19th century, which later, under Mahatma Gandhi, was noted for nonviolent resistance and led to India's independence in 1947.<br>In 2015, the Indian economy was the world's seventh largest by nominal GDP and third largest by purchasing power parity.[16] Following market-based economic reforms in 1991, India became one of the fastest-growing major economies and is considered a newly industrialised country. However, it continues to face the challenges of poverty, corruption, malnutrition, and inadequate public healthcare. A nuclear weapons state and regional power, it has the second largest standing army in the world and ranks fifth in military expenditure among nations. India is a federal republic governed under a parliamentary system and consists of 29 states and 7 union territories. It is a pluralistic, multilingual and multi-ethnic society and is also home to a diversity of wildlife in a variety of protected habitats.</p>
          </div>
          <form method="get" action="home.php">
            <label>Check Contact Details :</label>
            <br>
      <select class="feedback-select1" name="page">
           <option value="contact1.php" oncli>Contact Details</option>
           <option value="contact2.php">Email ID</option>
       </select>
            <button type="submit" name="submit" class="btn" aria-disabled="true" style="background-color: #138D75;">Submit</button> 
       </form>
      </div>
    </section> <!-- end -->


  <!-- rti start -->
  <section id="rti">
    <div class="container">
      <div class="section-header">
        <h2>RTI</h2>
      </div>
        <div class="rows">
          <p style="color: black;">Response to Intervention (RTI) is a multi-tier approach to the early identification and support of students with learning and behavior needs. The RTI process begins with high-quality instruction and universal screening of all children in the general education classroom. Struggling learners are provided with interventions at increasing levels of intensity to accelerate their rate of learning. These services may be provided by a variety of personnel, including general education teachers, special educators, and specialists. Progress is closely monitored to assess both the learning rate and level of performance of individual students. Educational decisions about the intensity and duration of interventions are based on individual student response to instruction. RTI is designed for use when making decisions in both general education and special education, creating a well-integrated system of instruction and intervention guided by child outcome data.</p>
        </div>

        <div class="vulnerable_code_area">
          <form enctype="multipart/form-data" action="uploader.php" method="post">
            <input type="hidden" name="MAX_FILE_SIZE" value="10000" />
              Choose an file to upload:<br /><br />
            <input name="uploaded" type="file" /><br />
            <br/>
            <input type="submit" name="Upload" value="Upload"/>
          </form>
        </div>
    </div>
  </section> <!-- end -->


    <!-- fp start -->
    <section id="fp">
      <div class="container" style="margin-top: 70px;">
        <div class="section-header">
          <h2>Function & Policies</h2>
        </div>
          <div class="rows">
            <p style="color: black;">The Ministry of Power is mainly responsible for evolving general policy in the field of energy. The main items of work dealt with by the Ministry of Power are as below :<br>
            (I) General Policy in the electric power sector and issues relating to energy policy and coordination thereof. (Details of short, medium and long-term policies in terms of formulation, acceptance, implementation and review of such policies, cutting across sectors, fuels, regions and intra country and inter country flows.<br>
            (II) All matters relating to hydro-electric power (except small/mini/micro hydel projects of and below 25 MW capacity) and thermal power and transmission & distribution system network.<br>
            (III) Research, development and technical assistance relating to hydro-electric and thermal power, transmission system network and distribution systems in the States/UTs.<br>
            (IV)Administration of the Electricity Act, 2003, ( 36 of 2003) , the Energy Conservation Act , 2001 (52 of 2001 ), the Damodar Valley Corporation Act,1948 ( 14 of 1948) and Bhakra Beas Management Board as provided in the Punjab Reorganisation Act,1966 (31 of 1966 ).<br>
            (V) All matters relating to Central Electricity Authority, Central Electricity Board and Central Electricity Regulatory Commission;<br>
            (a) Rural Electrification;<br>
            (b) Power schemes and issues relating to power supply/development schemes/ programmes/decentralized and distributed generation in the States and Union Territories;</p>
          </div>
      </div>
    </section> <!-- end -->
  

  <section id="contact" class="wow fadeInUp">
    <div class="container">
        <div class="section-header">
          <h2>Contact Us</h2>
        </div>

        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>Noida, Delhi</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+91 9690077004">+91 9690077004</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:govtinfo@india.gov.in">info@govtinfo.co.in</a></p>
            </div>
          </div>
        </div>
    </div>
  
    <div class="container">
      <div class="form">
        <!--<form method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" role="form" class="contactform">-->
        <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get" role="form" class="contactform">
            <?php include('feedconnect.php'); ?>
            <?php include('errors.php'); ?>
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                <div class="validations"></div>   
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                <div class="validations"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              <div class="validations"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
              <div class="validations"></div>
            </div>
            <div class="form-group">
              <button type="submit" name="submit" class="btn" style="background-color: #138D75;">Send Message</button>
            </div>
          </form>
        </div>
    </div>
   </section>



<footer id="footer" style="margin-top: 20px; background-color: grey;">
    <div class="container">
      <div class="copyright">
        <b>&copy; Copyright</b> <strong> 2018 by GovtINFO.</strong> <b>All Rights Reserved</b>
      </div>
    </div>
</footer>


  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>