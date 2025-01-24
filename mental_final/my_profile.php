<?php
require_once 'dbconnection.inc.php';
session_start();
if (!isset($_SESSION['upuid'])) {
    header("Location: index.html");
}else{
  $filter = $_SESSION['upuid'];
  $query=mysqli_query($conn,"SELECT * FROM `users` WHERE `User_ID`='$filter'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Mind Care - My Profile Page</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>
<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="#">
            <span>Mind Care</span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="my_profile.php"> My Profile</a>
              </li>  
              <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Mind Care, <br>
                    The Mental Health App
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!</p>
                    <div class="btn-box">
                      <a href="my_profile.php" class="btn-1">
                        My Profile
                      </a>
                      <a href="#contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/s.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Mind Care, <br>
                    The Mental Health App
                    </h1>
                    <p>
                      Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!</p>
                    <div class="btn-box">
                      <a href="index_chat.php" class="btn-1">
                      View Chat
                      </a>
                      <a href="#contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/s.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                    Mind Care, <br>
                    The Mental Health App
                    </h1>
                    <p>
                     Welcome <?php echo $row['User_Type']; ?>, <?php echo $row['Fullname']; ?>!</p>
                    <div class="btn-box">
                      <a href="logout.php" class="btn-1">
                      Logout
                      </a>
                      <a href="#contact" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="images/s.jpeg" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom" id="start">
    <div class="container">
      <div class="heading_container heading_center">
        <br>
        <br>
        <h2>
          My Profile Details
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-12 mx-auto">
          <div class="form_container">
            <form action="insertion.inc.php" method="POST">
              <div>
                <input type="text" placeholder="Your Name" name="fname" value="<?php echo $row['Fullname'] ?>" required />
                <input type="hidden" value="<?php echo $row['User_Type']; ?>" name="mod" required>
                <input type="hidden" value="<?php echo $filter; ?>" name="uid" required>
              </div>
              <div>
                <input type="email" placeholder="Your Email" name="email" value="<?php echo $row['Email_Address'] ?>" required />
              </div>
              <div>
                <input type="text" placeholder="Your Phone" name="phone" value="<?php echo $row['Phone_Number'] ?>" required />
              </div>
              <div>
                <input type="password" id="pass" placeholder="Your Password" name="password" required />
                <br>
                 <input type="checkbox"  style="width: 12px;" onclick="showPass();"> Show Password
              </div>
              <div>
                <input type="password" id="pass1" placeholder="Confirm Your Password" name="cpassword" required />
                <br>
                 <input type="checkbox" style="width: 12px;" onclick="showPass1();"> Show Password
              </div>                          
              <div class="btn_box ">
                <button name="upu">
                  UPDATE MY DETAILS
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
        <br>
<br>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  <section class="info_section layout_padding2" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location: Nariobi, Kenya.
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +254 712 345678
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                 Email: mindcare@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_link_box">
            <h4>
              Links
            </h4>
            <div class="info_links">
              <a class="active" href="#">
                <img src="images/nav-bullet.png" alt="">
                Home
              </a>
              <a class="" href="logout.php">
                <img src="images/nav-bullet.png" alt="">
                Logout
              </a>
              <a class="" href="#contact">
                <img src="images/nav-bullet.png" alt="">
                Contact Us
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

<script type="text/javascript">
        function showPass() {
  var x = document.getElementById("pass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
        function showPass1() {
  var x = document.getElementById("pass1");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved.
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>